<?php 

/**
 * to check login
 */
class Validate_login_form extends CI_Model
{
	//validate login id and password
	function validate_id_password()
	{
		
		$msg='';
		$id= $this->input->post('user_id');
		$password=$this->input->post('password');

		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('user_id',$id);
		$query = $this->db->get();
		
	if ($query->num_rows()>0) 
		{
		foreach($query->result() as $row)
  			{
			 	// $store_password = $this->encrypt->decode($row->password);
  				// if($row->is_logged_in==0)
  				// {
  						$store_password=$row->user_pass;
			     if($password == $store_password)
			     {
			     	$user_num= $row->user_num;
			     	$this->db->select('*');
					$this->db->from('user_roles');
					$this->db->where('user_id',$user_num);
			     	$roleQuery=$this->db->get();
			     	if($roleQuery->num_rows()>0)
			     	{
			     		foreach ($roleQuery->result() as $row1) {
			     			$rid=$row1->role_id;
			     		}
			     	}
				  	    $this->db->select('*');
						$this->db->from('roles');
						$this->db->where('role_id',$rid);
						$rquery= $this->db->get();
						if($rquery->num_rows()>0)
						{
							foreach ($rquery->result() as $key )
							{
								$_SESSION['type']=$key->role_name;
							}
							
						}
					  $_SESSION['loggedin']=true;
				    $_SESSION['user_id']=$row->user_id;


				    $users=$this->Manage_employee_model->user_detail('employees',$_SESSION['user_id']);

				    $_SESSION['firstname']=$users['first_name'];
				    $_SESSION['surname']=$users['last_name'];
				    $data = [ 'is_logged_in' => '1' ];

					$this->db->where('user_id', $id);
			        $this->db->update('users', $data);
						     }
				     else
				     	$msg=$msg.'Invalid Password.';
	  				// }
	  				// else
  					// 	$msg=$msg."User is already logged in. ";

  			 
						
		}
	}
		else { 	$msg=$msg.'Invalid Login Id.';	}

			//message for invalid credentials 
			return $msg;
	}
}

 ?>