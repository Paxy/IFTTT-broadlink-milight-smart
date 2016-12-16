<?php

$part=scheme(44.771577, 20.411455);
echo $part;

if ($part=="night")
{
$_GET['mode']="all_on";
include("light.php");
}






function scheme($latitude,$longitude) { 
        $sunrise = date_sunrise(time(), SUNFUNCS_RET_DOUBLE, $latitude, $longitude, 96, 0); 
        $sunset = date_sunset(time(), SUNFUNCS_RET_DOUBLE, $latitude, $longitude, 96, 0); 
        $now = date("H") + date("i") / 60 + date("s") / 3600; 

        if ($sunrise < $sunset) 
                if (($now > $sunrise) && ($now < $sunset)) return "day"; 
                else return "night"; 
        else 
                if (($now > $sunrise) || ($now < $sunset)) return "day"; 
                else return "night"; 
} 


?>