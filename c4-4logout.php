<?php
session_start();
session_unset(); 
session_destroy(); 

header("Location: c4-4login.php"); 
exit();
?>
