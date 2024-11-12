<?php
$num = (int)$_POST['num']; 
$originalNumber = $num; 
$sum = 0; 
$digits = strlen((string)$num);
while ($num > 0) {
    $digit = $num % 10; 
    $sum += pow($digit, $digits); 
    $num = (int)($num / 10); 
}
if ($sum === $originalNumber) {
    echo "$originalNumber is an Armstrong number.";
} else {
    echo "$originalNumber is not an Armstrong number.";
}
?>