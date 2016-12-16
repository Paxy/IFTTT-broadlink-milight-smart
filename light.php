<?php

require 'Milight.php';

$milight = new Milight('172.16.1.172');



if(!isset($_GET['mode'])) return;
$mode=$_GET['mode'];


try {

if(isset($_GET['g'])) 
{
	$g=intval($_GET['g']);
	$milight->setRgbwActiveGroup($g);
}

if(isset($_GET['a'])) $a=strtolower($_GET['a']);

if($mode=="lights_on")
	call($milight,"rgbwGroup#On",$g);
elseif($mode=="lights_off")
	call($milight,"rgbwGroup#Off",$g);
elseif($mode=="set_brightness")
	$milight->rgbwBrightnessPercent($a);
elseif($mode=="set_color")
{
	if($a=='red') $color='FF0000';
	elseif($a=='green') $color='00FF00';
	elseif($a=='blue') $color='0000FF';
	elseif($a=='yellow') $color='FFFF00';
	elseif($a=='pink') $color='FF00FF';
	elseif($a=='orange') $color='FF8D00';
	elseif($a=='purple') $color='BC00FF';
	else {
		call($milight,"rgbwGroup#SetToWhite",$g);
		return;
	     }
	$milight->rgbwSetColorHexString($color);
}
elseif($mode=="full_light")
	$milight->rgbwBrightnessMax();
elseif($mode=="night_light")
	$milight->rgbwBrightnessMin();
elseif($mode=="all_off")
	$milight->rgbwAllOff();
elseif($mode=="all_on")
	$milight->rgbwAllOn();


} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}



function call($milight,$func,$g){
if($g=='0')$g='All';
$func=str_replace("#", $g, $func);	
$milight->$func();
}



?>
