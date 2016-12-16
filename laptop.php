<?php

if(isset($_GET['mode'])) $mode=$_GET['mode'];
else return;

if($mode=="poweroff")
echo exec("sudo ssh paxy@172.16.1.1 'sudo poweroff'");
elseif($mode=="win")
exec("sudo ssh paxy@172.16.1.1 'sudo /home/paxy/win'");



?>
