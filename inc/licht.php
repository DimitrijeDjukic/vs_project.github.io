<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Licht</title>
</head>
<body>
   
    <div class="header">
        <h1>Licht</h1>
    </div>

    <?php
    $url = 'http://localhost:44320/api/Licht/0';

    $response = file_get_contents($url);
    $obj = json_decode($response);

    echo 'Id: ' . $obj->{'id'}; echo "<br>";
    echo 'Name: ' . $obj->{'name'}; echo "<br>";
    echo 'Status: ' . $obj->{'status'}; echo "<br>";
    
    ?>

<?php
    $url = 'http://localhost:44320/api/Licht/1';

    $response = file_get_contents($url);
    $obj = json_decode($response);

    echo 'Id: ' . $obj->{'id'}; echo "<br>";
    echo 'Name: ' . $obj->{'name'}; echo "<br>";
    echo 'Status: ' . $obj->{'status'}; echo "<br>";
    
    ?>

<?php
    $url = 'http://localhost:44320/api/Licht/2';

    $response = file_get_contents($url);
    $obj = json_decode($response);

    echo 'Id: ' . $obj->{'id'}; echo "<br>";
    echo 'Name: ' . $obj->{'name'}; echo "<br>";
    echo 'Status: ' . $obj->{'status'}; echo "<br>";
    
    ?>

<?php
    $url = 'http://localhost:44320/api/Licht/3';

    $response = file_get_contents($url);
    $obj = json_decode($response);

    echo 'Id: ' . $obj->{'id'}; echo "<br>";
    echo 'Name: ' . $obj->{'name'}; echo "<br>";
    echo 'Status: ' . $obj->{'status'}; echo "<br>";
    
    ?>

<?php
    $url = 'http://localhost:44320/api/Licht/4';

    $response = file_get_contents($url);
    $obj = json_decode($response);

    echo 'Id: ' . $obj->{'id'}; echo "<br>";
    echo 'Name: ' . $obj->{'name'}; echo "<br>";
    echo 'Status: ' . $obj->{'status'}; echo "<br>";
    
    ?>



















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
