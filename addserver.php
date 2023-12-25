<?php 
	$batch_no="";
	$lecture_hall_no= "";
	$seat_capacity    = "";
	$status="";
	$department_name="";
	$sname="";
	$roll_no="";
	$reg_no="";
	$time_duration="";
	$errors = array(); 
	$db = mysqli_connect('localhost', 'root', '', 'realdata');

		// To add room	
	if (isset($_POST['addroom'])) {
		// receive all input values from the form
		
		$lecture_hall_no= mysqli_real_escape_string($db, $_POST['lh']);
		$seat_capacity  = mysqli_real_escape_string($db, $_POST['sc']);
		$status = mysqli_real_escape_string($db, $_POST['status']);

		// form validation: ensure that the form is correctly filled
		
		if (empty($lecture_hall_no)) { array_push($errors, "Lecture Hall No is required"); }
		if (empty($seat_capacity)) { array_push($errors, "Seat Capqacite is required"); }
		if (empty($status)) { array_push($errors, "Status is required"); }
		

		if (count($errors) == 0) {
			
			$addr = "INSERT INTO addroom (lecture_hall_no,seat_capacity, status) VALUES('$lecture_hall_no','$seat_capacity','$status')";
			$q=mysqli_query($db, $addr);
			if($q==1){
				echo " Your room added";
			}
		
		}
		
	}

	// To add Deptartment Name(dn)

	if (isset($_POST['adddept'])) {
		// receive all input values from the form
		$department_name= mysqli_real_escape_string($db, $_POST['dn']);
		
		$status = mysqli_real_escape_string($db, $_POST['status']);

		// form validation: ensure that the form is correctly filled
		if (empty($department_name)) { array_push($errors, "Department Name is required"); }
		
		if (empty($status)) { array_push($errors, "Status is required"); }
		

		if (count($errors) == 0) {
			
			$quary = "INSERT INTO adddept (department_name, status) VALUES('$department_name','$status')";
			$q=mysqli_query($db, $quary);
			
			if($q==1){
				echo "Department Name addition is Complet";
			}
		
		}
		
	}

	// To add Batch

	if (isset($_POST['addbatch'])) {
		// receive all input values from the form
		$batch_no = mysqli_real_escape_string($db, $_POST['bn']);
		$department_name = mysqli_real_escape_string($db, $_POST['dn']);
		$status = mysqli_real_escape_string($db, $_POST['status']);

		// form validation: ensure that the form is correctly filled
		if (empty($department_name)) { array_push($errors, "Department No. is required"); }
		if (empty($batch_no)) { array_push($errors, "Batch Name is required"); }
		if (empty($status)) { array_push($errors, "Status is required"); }
		

		if (count($errors) == 0) {
			
			$quary = "INSERT INTO addbatch (batch_no,department_name, status) VALUES('$batch_no','$department_name','$status')";
			$q=mysqli_query($db, $quary);
			if($q==1){
				echo "Batch No addition is Complet";
			}
		
		}
		
	}

	// To add Student
if (isset($_POST['addstudent'])) {
		// receive all input values from the form
		$sname = mysqli_real_escape_string($db, $_POST['sname']);
		$roll_no = mysqli_real_escape_string($db, $_POST['rollno']);
		$reg_no= mysqli_real_escape_string($db, $_POST['regno']);
		$batch_no= mysqli_real_escape_string($db, $_POST['bn']);
		$department_name = mysqli_real_escape_string($db, $_POST['dn']);
		$status = mysqli_real_escape_string($db, $_POST['status']);

		// form validation: ensure that the form is correctly filled
		if (empty($sname)) { array_push($errors, "Student Name is required"); }
		if (empty($roll_no)) { array_push($errors, "Roll No. is required"); }
		if (empty($reg_no)) { array_push($errors, "Registation no. is required"); }
		if (empty($batch_no)) { array_push($errors, "Batch no. is required"); }
		if (empty($department_name)) { array_push($errors, "Department Name is required"); }
		if (empty($status)) { array_push($errors, "Status is required"); }
		
			
		if (count($errors) == 0) {
			$quary = "INSERT INTO addstudent(sname,roll_no,reg_no,batch_no,department_name,status) 
			VALUES('$sname', '$roll_no', '$reg_no', '$batch_no','$department_name','$status')";
			$q=mysqli_query($db, $quary);
			if($q==1){
				echo " You are added";
			}
		
		}
		
	}

	// To Duration

	if (isset($_POST['adddu'])) {
		// receive all input values from the form
		$time_duration= mysqli_real_escape_string($db, $_POST['td']);
		
		$status = mysqli_real_escape_string($db, $_POST['status']);

		// form validation: ensure that the form is correctly filled
		if (empty($time_duration)) { array_push($errors, "Duration is required"); }
		
		if (empty($status)) { array_push($errors, "Status is required"); }
		

		if (count($errors) == 0) {
			
			$quary = "INSERT INTO addduration (time_duration, status) VALUES('$time_duration','$status')";
			$q=mysqli_query($db, $quary);
			if($q==1){
				echo "duration addition is Complet";
			}else
			{
				echo "no....";
			}
		
		}
		
	}
?>