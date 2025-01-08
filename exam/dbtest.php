<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="test";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    echo "connection error";
}
else{
    echo "connection successful";
}
?>