<?php

if(isset($_GET['mode'])) $mode=$_GET['mode'];
else return;

if ($mode=="on")
exec("python /var/www/html/smart/python/mk2on.py");
elseif($mode=="off")
exec("python /var/www/html/smart/python/mk2off.py");
elseif($mode=="check")
echo exec("python /var/www/html/smart/python/mk2check.py");


?>
