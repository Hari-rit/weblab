<?php
session_start();
if(!isset($_SESSION['semail'])){
    header("Location:logtest.php");
    exit();
}
if (!isset($_COOKIE['cname'])) {
   header("Location: logtest.php");
   exit();
}
    $email=$_COOKIE['cname'];
    $name=$_SESSION['sname'];
    echo "<br>email is: ".$email;
    echo "<br> Name is: ".$name;
?>
<html>
   <br><a href="logout.php">LOGOUT</a>
</html>