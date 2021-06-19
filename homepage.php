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
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" type="text/css" href="css/style.css">
        </head>
        <body>

          <!-- logged in user information -->
          <?php  if (isset($_SESSION['username'])) : ?>
            <div class="header">
                <h1>Welcome <strong><?php echo $_SESSION['username']; ?></strong></h1>
                <h2> <a href="index.html?logout='1'" style="color: red;">Logout</a> </h2>  <!-- //move to the right side  -->
          </div>
                <?php if (isset($_SESSION['success'])) : ?>
            <div class="error success" >
                <h3>
                <?php 
                    echo $_SESSION['success']; 
                    unset($_SESSION['success']);
                ?>
            <?php endif ?>

                
                


            <br>
            <table>
                <tr>
                    <td>
                         <a href="restful.php"><img class="homepage" src="fotos/sh.png" alt="not working"></a>
                    </td>
                   
                    <td>
                        <a href="soap.php"><img class="homepage" src="fotos/wetter.png" alt="not working"></a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="restful.php"><div class="sh">Smart Home Web Service (RESTful)</div></a>       
                </td>
                    <td>
                         <a href="soap.php"><div class="ws">Wetter Web Service (SOAP) </div></a>
                    </td>
                </tr>
            </table>

   
          
              
          
               
                
        <?php endif  ?>
    </div>
		
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