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
            <title>Homepage</title>
            <link rel="stylesheet" type="text/css" href="css/style.css">
        </head>
        <body>

          <!-- logged in user information -->
          <?php  if (isset($_SESSION['username'])) : ?>
                <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
                <p> <a href="index.php?logout='1'" style="color: red;">Logout</a> </p>  <!-- //move to the right side  -->
                
                
                

            <p>Now you are ready to use our services<p>
            <p>Please choose:</p>

            <a href="soap.php"><img src="fotos/sh.png" alt="not working"></a>
            <a href="restful.php"><img src="fotos/wetter.jpeg" alt="not working"></a>

   
            
            <?php if (isset($_SESSION['success'])) : ?>
            <div class="error success" >
                <h3>
                <?php 
                    echo $_SESSION['success']; 
                    unset($_SESSION['success']);
                ?>
            <?php endif ?>

          
                
                
                
        <?php endif  ?>
    </div>
		
    <p>Stefan Jovic   Fatlum Kurtaj   Katharina Weiss   Reinhard Winter   Dimitrije Djukic</p>
</body>
</html>