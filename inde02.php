<?php
echo date_default_timezone_get(); //xem timezone

echo "<hr>";
date_default_timezone_set('Asia/Ho_Chi_Minh'); //cai dat timezone

echo date_default_timezone_get(); 
echo "<=======================>";

echo date("Y-m-d h:i:s a",time());
//http://php.net/manual/en/function.date.php


?>