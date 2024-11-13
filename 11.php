<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['array'])) {
    $inputArray = $_POST['array'];
    $array = explode(',', $inputArray);
    for ($i = 0; $i < count($array); $i++) {
        $array[$i] = trim($array[$i]);  
        $array[$i] = (int) $array[$i];  
    }
    rsort($array);
    echo "sorted array: ".implode(', ', $array);
} else {
    echo "<p>No array input provided.</p>";
}
?>

