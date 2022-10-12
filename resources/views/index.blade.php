<?php
     if(array_key_exists('submit', $_GET)){
     //checks if input field is empty
        if (!$_GET['city']){
            $error = "The field is empty";
        }
     } //gets all values using api
    if ($_GET['city']) {
        $apiData = file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=".
        $_GET['city']."&appid=54de80f49f04e4183194d55e3aab0455");
        $weatherArray = json_decode($apiData, true);

        if ($weatherArray['cod'] == 200){
        // calculates to celsius
        $tempCelsius = $weatherArray['main']['temp'] - 273;
        $weather = "<b>" .$weatherArray['name'].", ".$weatherArray['sys']['country']." :
        ".intval($tempCelsius)."&deg;C</b> <br>";
        $weather .="<b>Weather Conditions : </b>" .$weatherArray['weather']['0']['description']."<br>";
        $weather .="<b>Wind Speed : </b>" .$weatherArray['wind']['speed']. "meter/sec<br>";
        $weather .="<b>Cloud : </b>" .$weatherArray['clouds']['all']." % <br>";
        date_default_timezone_set('UK/London');
        $sunrise = $weatherArray['sys']['sunrise'];
        $weather .="<b>Sunrise : </b>" .date("g:i a", $sunrise)."<br>";
        $weather .="<b>Current Time : </b>" .date("F j, Y, g:i a");     
        }
        else {
            $error = "Could not get data, your City name is not valid";
        }
    }
     

?>
