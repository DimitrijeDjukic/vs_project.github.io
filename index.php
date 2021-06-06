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
<title> VS </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div class="header">
         <h1> VS Project </h1>
    </div>

    <p style="margin: 10px 0px 0px 50px;">To be able to use our web services you need to <a href="login.php">Log In</a></p>
    <br>
    <p style="margin: 10px 0px 0px 50px;">If you are new here, please <a href="register.php">Register<a></p>



    <footer>
        <p>Want to see the source code, visit our <a href="https://github.com/DimitrijeDjukic/vs_project.github.io">Github</a> page 
            <a href="https://github.com/DimitrijeDjukic/vs_project.github.io">  <i class="fa fa-github" style="font-size:24px"></i><a></a></p>
        
        
        <div id="names">
            <div>Stefan Jovic</div>
            <div>Fatlum Kurtaj</div>
            <div>Katharina Weiss</div>
            <div>Reinhard Winter</div>
            <div>Dimitrije Djukic</div>
        </div>
    </footer>

</body>
<html>