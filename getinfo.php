<?php
$f = fopen("/sys/class/thermal/thermal_zone0/temp","r");
$temp = fgets($f);
fclose($f);
$acttemp = round($temp/1000);

echo($acttemp);
?>
