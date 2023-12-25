<?php include('server.php')?>
<html>
<head>
	<title>Exam Seat Arrangment</title>
	<link rel="stylesheet" type="text/css" href="loginglobal.css"/>
</head>
<body>

	<div id="header">
		<div class="logo"><a href="#"><span>Exam Seating Arrangement System </span></a></div>
	</div>
	<div class="loginbox">
        
            <form action="login.php" method="post">
            	<?php include('errors.php'); ?>
            		<img src="logo14.jpg" class="avatar">
            		
            		<h2>Login Here</h2>
                    <p>Username</p>
                	<input type="text" name="username" placeholder="Enter Username" >
                	<p>Password</p>
                	<input type="password" name="password" placeholder="Enter password" >
                	<input type="submit" name="login" value="Login">
                	<p><a href="fpass.php">Lost your password?</a></p>
                	<p><a href="registration.php">Don't have an account?</a></p>
            </form>
            
        </div>

		
	</div>
</body>
</html>
