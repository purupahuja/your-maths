<?php
        session_start();
		if ($_GET["logout"]==1 AND $_SESSION['id']) { session_destroy();
			$message="You have been logged out. Have a nice day!";
		}
		$link= mysqli_connect("localhost", "cl13-yourmaths", "password", "cl13-yourmaths");
  		if ($_POST['submit']=="Sign Up") {
            if (!$_POST['firstname']) $error.="<br />Please enter your First Name";
            if (!$_POST['lastname']) $error.="<br />Please enter your Last Name";
			if (!$_POST['email']) $error.="<br />Please enter your email";
				else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) $error.="<br />Please enter a valid email";
 		if (!$_POST['password']) $error.="<br />Please enter your password";
 		else {
 			if (strlen($_POST['password'])<8) $error.="<br />Please enter at least 8 characters in your password.";
 			if(!preg_match('/[A-Z]/', $_POST['password'])) $error.= "<br />Please include at least 1 capital letter in your password.";
 		}
			if ($error) $error = "There were error(s) in your sign up details:".$error;
			else {
			$query= "SELECT * FROM `users` WHERE email ='".mysqli_real_escape_string($link, $_POST['email'])."'";
			$result = mysqli_query($link, $query);
			$results = mysqli_num_rows($result);
			if ($results) $error = "That email is already registered. Do you want to log in?";
			else {
			$query = "INSERT INTO `users` (`firstname`, `lastname`, `email`, `password`) VALUES ('".mysqli_real_escape_string($link, $_POST['firstname'])."', '".mysqli_real_escape_string($link, $_POST['lastname'])."', '".mysqli_real_escape_string($link, $_POST['email'])."', '".md5(md5($_POST['email']).$_POST['password'])."')";
    		mysqli_query($link, $query);
    		$success="You've been signed up!";
    		$_SESSION['id']= mysqli_insert_id($link);
    		header("Location:dashboard.php");
			}
		}
	}
	if ($_POST['submit'] == "Log In") {
		$query = "SELECT * FROM users WHERE email='".mysqli_real_escape_string($link, $_POST['loginemail'])."'AND password='" .md5(md5($_POST['loginemail']) .$_POST['loginpassword']). "'LIMIT 1";
		$result = mysqli_query($link, $query);
		$row = mysqli_fetch_array($result);
		if($row){
			$_SESSION['id']=$row['id'];
			header("Location:dashboard.php");
		} else {
			$error = "We could not find a user with that email and password. Please try again.";
		}
	}
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YourMaths | The Maths is YOURS!</title>
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic|Raleway:400,400italic,500,500italic,600,600italic,700,700italic,300italic,300' rel='stylesheet' type='text/css'>
    <link rel="icon" type="image/png" href="favicon.PNG">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
      <script src="smoothscroll.js"></script>
       <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
      <script src="SmoothScroll.js"></script>
      <link rel="stylesheet" href="main.css">
  </head>
   <body data-spy="scroll" data-target=".navbar-collapse" >
       <div class="container" style="border-radius:0">
                 <?php
 			 	if ($error) {
 			 		echo '<div class="alert alert-danger">'.addslashes($error).'</div>';
 			 	}
 			 	if ($message) {
 			 		echo '<div class="alert alert-success">'.addslashes($message).'</div>';
 			 	}
 			 ?>
                </div>
       <h1 style="text-align: center">Welcome to YourMaths</h1>
       <div class="s2" style="background-color: #fff">
            <div class="container-fluid resum">
            <div class="container resum">
                <div id="signup">
                <h2 class="title">Sign Up</h2>
        <form class="marginTop" method="post">
          <div style="padding-left:0" class="form-group nam n2 col-md-6">
            <label style="color:white"  for="password">First Name</label>
            <input type="firstname" name="firstname" class="form-control" placeholder="First Name" value="<? echo addslashes($_POST['firstname']); ?>" />
          </div>
          <div style="padding-right:0" class="form-group nam n1 col-md-6">
            <label style="color:white" for="password">Last Name</label>
            <input  style="padding: 12px 12px 12px 12px" type="lastname" name="lastname" class="form-control" placeholder="Last Name" value="<? echo addslashes($_POST['lastname']); ?>" />
          </div>
          <div class="form-group">
            <label style="color:white"  for="email">Email Address</label>
            <input type="email" name="email" class="form-control" placeholder="Your Email" value="<? echo addslashes($_POST['email']); ?>" />
          </div>
          <div class="form-group">
            <label style="color:white"  for="password">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password" value="<? echo addslashes($_POST['password']); ?>" />
          </div>
          <input type="submit" name="submit" value="Sign Up" class="sub btn btn-success btn-lg marginTop"/>
        </form>
                    <br>
                    </div>
                <h2 class="title">...or Log In</h2>
                <form  method="post">
  				<div class="form-group">
  					<input type="email" name="loginemail" placeholder="Email" class="form-control" value="<?php echo addslashes($_POST['loginemail']); ?>" />
  				</div>
  				<div class="form-group">
  					<input type="password" name="loginpassword" placeholder="Password" class="form-control" value="<?php echo addslashes($_POST['loginpassword']); ?>" />
  				</div>
  				<input type="submit" name= "submit" class="btn btn-success" value="Log In">
  			</form>
                
                <br>
                    <br>
                <br>
                </div>
           </div></div>
    </body> 
</html>