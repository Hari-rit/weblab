<?php
$number=(float)$_POST['number']; 
$n=(float)$_POST['n'];
$rem=$number%$n;
if ($rem==0){
    echo "$number is divisible by $n";
}
else{
    echo "$number is not divisible by $n";
}
?>