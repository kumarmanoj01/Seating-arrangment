<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}
	?>
	<!DOCTYPE html>
	<html>
<head>
	<title>Exam Seat Arrangment</title>
	<link rel="stylesheet" type="text/css" href="styles/global.css"/>
	<meta mame="viewport" content="width=device-width,initial-scale:1.0,user-scalabe=0"/>
</head>
<body>

	<div id="header">
		<div class="logo"><a href="#"><span>Exam</span> Seat</a></div>
	</div>
	<a class="mobile" href="#">Menu</a>
	<div id="container">
		<div class="sidebar">
			<div >
				<img src="logo13.jpg" width="60" height="55">
				<font color="White"><p>Admin Online</p></font>
			</div>
			<ul id="nav">
				<li><a class="Dashbord" href="index.php">Dashbord</a></li>
				<li><a class="Room"href="room.php">Room</a></li>
				<li><a class="Department"href="Department.php">Department</a></li>
				<li><a class="Batch"href="batch.php">Batch</a></li>
				<li><a class="student"href="student.php">Student</a></li>
				<li><a class="Duration"href=duration.php>Duration</a></li>
				<li><a class="Adds"href="seatplan.php">Seatplan</a></li>
				<li><a class="views"href="operation.php">Operation</a></li>
			</ul>
		</div>
		<div class="content">
			<h1>LogOUT</h1>
			<div>
				<?php if (isset($_SESSION['success'])) : ?>
				<div class="error success" >
					<h3>
						<?php 
							echo $_SESSION['success']; 
							unset($_SESSION['success']);
						?>
					</h3>
				</div>
				<?php endif ?>

				<!-- logged in user information -->
				<?php  if (isset($_SESSION['username'])) : ?>
				<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
				<p> <a href="login.php?logout='1'" style="color: red;">logout</a> </p>
				<?php endif ?>
			</div>
		</div>
	</div>
</body>
</html>
