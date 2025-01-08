<?php
session_start();
setcookie('cname', '', time() - 3600, "/");
session_unset();
session_destroy();
header("Location:logtest.php");
exit();  
?>
