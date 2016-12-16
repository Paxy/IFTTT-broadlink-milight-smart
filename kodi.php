<?php

if(isset($_GET['mode'])) $mode=$_GET['mode'];
else return;

if($mode=="radio")
exec('curl -u xbmc:password -d \'{ "jsonrpc": "2.0", "method": "Player.Open", "params": { "item": { "file": "/home/osmc/Music/Naxi.m3u" }}, "id": 1 }\' -H \'Content-type:application/json\' -X POST \'http://127.0.0.1:8080/jsonrpc\'');
elseif($mode=="next")
exec('curl -u xbmc:password -d \'{"jsonrpc": "2.0", "method": "Player.GoTo", "params": { "playerid": 1, "to":"next" }, "id": 1}\' -H \'Content-type:application/json\' -X POST \'http://127.0.0.1:8080/jsonrpc\'');




?>
