<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
  <div class="header">
      <h1>VS Project</h1>
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
      <div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
	  <div class="input-group">
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
	  </div>
  </form>

  <footer>
        <p>Want to see the source code, visit our <a href="https://github.com/DimitrijeDjukic/vs_project.github.io">Github</a> page 
            <a href="https://github.com/DimitrijeDjukic/vs_project.github.io">  <i class="fa fa-github" style="font-size:24px"></i><a></a></p>
        
        <br>
        <div id="names">
            <div>Stefan Jovic</div>
            <div>Fatlum Kurtaj</div>
            <div>Katharina Weiss</div>
            <div>Reinhard Winter</div>
            <div>Dimitrije Djukic</div>
        </div>
    </footer>

</body>
</html>
