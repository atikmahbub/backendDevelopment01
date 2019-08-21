<?php

date_default_timezone_set("Asia/Dhaka");

$expr= date('2018-07-01');
$now = date('Y-m-d');



$diff=strtotime($now)-strtotime($expr);
$x=floor($diff/(60*60*24));

echo $x;

?>