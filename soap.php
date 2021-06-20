<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>SOAP</title>
</head>
<body>
   
    <div class="header">
        <h1>SOAP</h1>
    </div>
<section>
    <h2>Current Weather: </h2>
<?php

    $url = "http://localhost:5000/ws";


    $request_param_weather = '<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/"
				            xmlns:gs="http://vs_project.fh/models/soap/weather">
                            <soapenv:Header/>
                                <soapenv:Body>
                                    <gs:getCurrentWeatherRequest/>   
                                </soapenv:Body>
                        </soapenv:Envelope>';

    $headers = array(
        'Content-Type: text/xml; charset=utf-8',
        'Content-Length: '.strlen($request_param_weather)
    );

$ch = curl_init($url);
curl_setopt ($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt ($ch, CURLOPT_POSTFIELDS, $request_param_weather);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$data = curl_exec ($ch);

$result = $data;

if ($result === FALSE) {
    printf("CURL error (#%d): %s<br>\n", curl_errno($ch),
        htmlspecialchars(curl_error($ch)));
}

curl_close ($ch);

echo ' Current Weather ' . $data . ' Grad';

?>
</section>

    <section>
        <h2>Wind Data</h2>
        <?php

        $url = "http://localhost:5000/ws";

        $request_param_wind = '<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/"
				            xmlns:gs="http://vs_project.fh/models/soap/weather">
                            <soapenv:Header/>
                                <soapenv:Body>
                                    <gs:getWindRequest/>   
                                 </soapenv:Body>
                            </soapenv:Envelope>';

        $headers = array(
            'Content-Type: text/xml; charset=utf-8',
            'Content-Length: '.strlen($request_param_wind)
        );

        $ch = curl_init($url);
        curl_setopt ($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt ($ch, CURLOPT_POSTFIELDS, $request_param_wind);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $data = curl_exec ($ch);

        $result = $data;

        if ($result === FALSE) {
            printf("CURL error (#%d): %s<br>\n", curl_errno($ch),
                htmlspecialchars(curl_error($ch)));
        }

        curl_close ($ch);

        echo ' Wind Data: ' . $data ;

        ?>

    </section>


    <section>
        <h2>7 Day Forecast</h2>
        <?php
        $url = "http://localhost:5000/ws";

        $request_param_forecast = '<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/"
                                            xmlns:gs="http://vs_project.fh/models/soap/weather">
                            <soapenv:Header/>
                                 <soapenv:Body>
                                    <gs:getCurrentWeatherRequest/>
                                </soapenv:Body>
                         </soapenv:Envelope>';

        $headers = array(
        'Content-Type: text/xml; charset=utf-8',
        'Content-Length: '.strlen($request_param_forecast)
        );

        $ch = curl_init($url);
        curl_setopt ($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt ($ch, CURLOPT_POSTFIELDS, $request_param_forecast);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $data = curl_exec ($ch);

        $result = $data;

        if ($result === FALSE) {
        printf("CURL error (#%d): %s<br>\n", curl_errno($ch),
        htmlspecialchars(curl_error($ch)));
        }

        curl_close ($ch);

        echo ' Forecast ' . $data ;

        ?>

    </section>

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
