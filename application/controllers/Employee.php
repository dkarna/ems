<?php
	class Employee extends CI_Controller {

		public function view($page = 'dashboard') {
			if (!file_exists(APPPATH . 'views/employee/pages/' . $page . '.php')) {
				show_404();
			}

			$data['title'] = ucfirst($page);

			$this->load->view('employee/templates/header');
			$this->load->view('employee/pages/' . $page, $data);
			$this->load->view('employee/templates/footer');
		}
	}
?>