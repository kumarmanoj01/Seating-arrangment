<?php include('server.php') ?>
<!DOCTYPE html>

<html>
<head>
	<title>Exam Seat Arrangment</title>
	<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>

	<div id="header">
		<div class="logo"><a href="#"><span>Exam Seating Arrangement System </span></a></div>
	</div>
	<div class="loginbox">
        
            <form action="registration.php" method="post">
                <?php include('errors.php'); ?>
            		<h2>Resitration Here</h2>
                    <p>Name</p>
                <input type="text" name="username" placeholder="Enter  Full Name">
                <p>E mail </p>
                <input type="email" name="email" placeholder="Enter Email" >
                <p>Moblie No.</p>
                <input type="text" name="mob" placeholder="Enter  Moblie No." >
                <p> Create Password</p>
                <input type="password" name="password_1" placeholder="Enter password" >
                 <p> Confirm Password</p>
                <input type="password" name="password_2" placeholder=" confirm password" >
                <input type="submit" name="submit" value="submit">
                
                <a href="login.php">I have an account?</a>

            </form>
            
        </div>

		
	</div>

</body>
</html>