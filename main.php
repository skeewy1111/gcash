<?php
require 'user-details.php';
$user_data = new UserDetails();
 //user IP address
 $ip = $user_data->get_ip();

 // user browser
 $browser = $user_data->get_browser();

 //user Operating system
 $os = $user_data->get_os();

 // user Device
 $device = $user_data->get_device();

 //user Device name
 $devicename = $user_data->get_device_name();

 //************** location *******************

 // user location details
 $location = $user_data->get_country();
 

 // country
 $country = $location['country'];

 // State
 $state = $location['state'];

 // City
 $city = $location['city'];

 // country code
 $country_code = $location['country_code'];

 // Continent name
 $continent = $location['continent'];

 // Continent code
 $cont_code = $location['continent_code'];

 $log_data = "[" . date('Y-m-d H:i:s') . "] IP: $ip, Browser: $browser, OS: $os, Device: $device, Device Name: $devicename, Country: $country, State: $state, City: $city, Country Code: $country_code, Continent: $continent, Continent Code: $cont_code\n";

 $log_file = 'user_logs.txt';
 file_put_contents($log_file, $log_data, FILE_APPEND);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
   
</body>
</html>