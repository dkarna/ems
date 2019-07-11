<div class="contents">
	<div class="emp-detail">
		<a class="float-right" href="http://localhost/ems/admin/employee" id="small-link"> <i class="fa fa-long-arrow-left" aria-hidden="true"></i> &nbsp;Go back to Employee List</a>
		<div class="detail-head">
			<div class="head-pic">
				<?= img(array('src'=>'assets/images/default.png', 'alt'=> 'employee image')); ?>
			</div>


			<div class="head-name">
				<div class="item-1"><?php echo $post['first_name'] . ' ' .  $post['middle_name'] . ' ' .  $post['last_name'];  ?></div>
				<div class="item-2"><?php echo $post['department_name']; ?></div>
		</div>

		</div>
		<!-- profile pic ends here -->

		<!-- details starts here -->
<div class="row">
	<!-- basic info starts -->
	<div class="column col-md-4">
		<div class="column">

			<div class="card">
		<h5 class="card-header text-center alert alert-dark">Basic Info</h5>
			<div class="body-row ">
				<div class="item-1">Id</div>
				<div class="item-2"><?php echo $post['emp_id']; ?></div>
			</div>

			<div class="body-row ">
				<div class="item-1">Title</div>
				<div class="item-2"><?php echo $post['title']; ?></div>
			</div>
			<div class="body-row ">
				<div class="item-1">First Name</div>
				<div class="item-2"><?php echo $post['first_name']; ?></div>
			</div>
			<div class="body-row ">
				<div class="item-1">Middle Name</div>
				<div class="item-2"><?php echo $post['middle_name']; ?></div>
			</div>
			<div class="body-row ">
				<div class="item-1">Surname</div>
				<div class="item-2"><?php echo $post['last_name']; ?></div>
			</div>

				<div class="body-row ">
				<div class="item-1">Gender</div>
				<div class="item-2"><?php echo $post['gender']; ?></div>
			</div>

				<div class="body-row ">
				<div class="item-1">Date of birth</div>
				<div class="item-2"><?php echo $post['dob']; ?></div>
			</div>



			<div class="body-row ">
				<div class="item-1">Permanent Address</div>
				<div class="item-2"><?php if (!empty($post['p_street'])) echo $post['p_street'] . ', '; 
									      if (!empty($post['p_municipality'])) echo $post['p_municipality'] . ', ';
									      if (!empty($post['p_district'])) echo $post['p_district'] . ', ';
									      if (!empty($post['p_state'])) echo $post['p_state'] . ', ';
									      if (!empty($post['p_country'])) echo $post['p_country'] ; ?></div>
			</div>

			<div class="body-row ">
				<div class="item-1">Temporary Address</div>
				<div class="item-2"><?php if (!empty($post['t_street'])) echo $post['t_street'] . ', '; 
									      if (!empty($post['t_municipality'])) echo $post['t_municipality'] . ', ';
									      if (!empty($post['t_district'])) echo $post['t_district'] . ', ';
									      if (!empty($post['t_state'])) echo $post['t_state'] . ', ';
									      if (!empty($post['t_country'])) echo $post['t_country'] ; ?></div>
			</div>

			<div class="body-row ">
				<div class="item-1">Home Phone</div>
				<div class="item-2"><?php echo $post['home_phone']; ?></div>
			</div>

			<div class="body-row ">
				<div class="item-1">Mobile Phone</div>
				<div class="item-2"><?php echo $post['mobile_phone']; ?></div>
			</div>

			<div class="body-row ">
				<div class="item-1">Other Phones</div>
				<div class="item-2"><?php if (!empty($post['other_phone1'])) echo $post['other_phone1'] . ', '; 
									      if (!empty($post['other_phone2'])) echo $post['other_phone2'] . ', ';
									      if (!empty($post['other_phone3'])) echo $post['other_phone3'] ; ?></div>
			</div>

				<div class="body-row ">
				<div class="item-1">Email Id</div>
				<div class="item-2"><?php echo $post['email']; ?></div>
			</div>
		</div>
	</div>
	<!-- basic info ends -->

	
</div> 
<!-- education ends here -->
<div class="column col-md-4">
	
			<!-- Nationality -->
			<div class="column">
			<div class="card">
				<h5 class="card-header text-center alert alert-dark">Nationality</h5>
			<div class="body-row ">
				<div class="item-1">Nationality</div>
				<div class="item-2"><?php echo $post['nationality']; ?></div>
			</div>
			<div class="body-row ">
				<div class="item-1">Visa Permission</div>
				<div class="item-2"><?php echo $post['visa_permission']; ?></div>
			</div>
			<div class="body-row ">
				<div class="item-1">Visa Type</div>
				<div class="item-2"><?php echo $post['visa_type']; ?></div>
			</div>
			<div class="body-row ">
				<div class="item-1">Visa Expiry Date</div>
				<div class="item-2"><?php echo $post['visa_expiry_date']; ?></div>
			</div>
			<div class="body-row ">
				<div class="item-1">Passport No.</div>
				<div class="item-2"><?php echo $post['passport_no']; ?></div>
			</div>
			<div class="body-row ">
				<div class="item-1">Place of Issue</div>
				<div class="item-2"><?php echo $post['passport_issue_place']; ?></div>
			</div>

		</div>
		</div>
<!-- nationality ends  -->
		<div class="column ">
			<div class="card">
			<h5 class="card-header text-center alert alert-dark">Education</h5>	
			<div class="body-row ">
				<div class="item-1">Highest Degree</div>
				<div class="item-2"><?php echo $post['highest_degree']; ?></div>
			</div>
			<div class="body-row ">
				<div class="item-1">Degree Title</div>
				<div class="item-2"><?php echo $post['degree_title']; ?></div>
			</div>
			<div class="body-row ">
				<div class="item-1">University</div>
				<div class="item-2"><?php echo $post['university']; ?></div>
			</div>
			<div class="body-row ">
				<div class="item-1">Institute</div>
				<div class="item-2"><?php echo $post['institute']; ?></div>
			</div>
		</div>
	</div>

<!-- col1 end -->
<!-- education ends here -->

<!-- works -->
			<div class="column">
				<div class="card">
				<h5 class="card-header text-center alert alert-dark">Work Experience</h5>
				<div class="body-row ">
					<div class="item-1">Previous Employer</div>
					<div class="item-2"><?php echo $post['previous_employer']; ?></div>
				</div>
			</div>
</div>
		<!-- work ends here  -->

		
</div>
		<!-- Emergency contact -->
<div class="column col-md-4">
		<div class="column ">
				<div class="card">
			<h5 class="card-header text-center alert alert-dark">Emergency Contact</h5>
			<div class="body-row ">
				<div class="item-1">Name</div>
				<div class="item-2"><?php echo $post['pan']; ?></div>
			</div>

			<div class="body-row ">
				<div class="item-1">Relation</div>
				<div class="item-2"><?php echo $post['pan']; ?></div>
			</div>
			<div class="body-row ">
				<div class="item-1">Contact</div>
				<div class="item-2"><?php echo $post['pan']; ?></div>
			</div>

			<div class="body-row ">
				<div class="item-1">Address</div>
				<div class="item-2"><?php echo $post['pan']; ?></div>
			</div>
		</div>
</div>	

	<!-- emergency ends here -->
		<!-- pan -->
		<div class="column ">
				<div class="card">
			<h5 class="card-header text-center alert alert-dark">PAN</h5>
			<div class="body-row ">
				<div class="item-1">PAN</div>
				<div class="item-2"><?php echo $post['pan']; ?></div>
			</div>
		</div>
	</div>
		<!-- pan ends here -->
		<!-- health starts here -->
<div class="column ">
				<div class="card">
	<h5 class="card-header text-center alert alert-dark">Health</h5>
			<div class="body-row ">
				<div class="item-1">Blood Group</div>
				<div class="item-2"><?php echo $post['blood_group']; ?></div>
			</div>
			<div class="body-row ">
				<div class="item-1">Medical Complications</div>
				<div class="item-2"><?php echo $post['medical_complications']; ?></div>
			</div>
			<div class="body-row ">
				<div class="item-1">Regular Medication</div>
				<div class="item-2"><?php echo $post['regular_medication']; ?></div>
			</div>
			<div class="body-row ">
				<div class="item-1">Allergies</div>
				<div class="item-2"><?php echo $post['allergies']; ?></div>
			</div>
			<div class="body-row ">
				<div class="item-1">Allergy Description</div>
				<div class="item-2"><?php echo $post['allergy_description']; ?></div>
			</div>
		</div>
	</div>
		<!-- health ends here -->
		</div>
	</div>
	</div>
	</div>
</div>