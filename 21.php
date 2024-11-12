<?php
$base=(float)$_POST['base']; 
$height=(float)$_POST['height'];
$area=0.5*$base*$height;
echo "Area of triangle is:$area";
?>