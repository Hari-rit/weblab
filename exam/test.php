<?php
session_start();
include 'dbtest.php';
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name=$_POST['NAME'];
    $email=$_POST['email'];
    $gender=$_POST['gen'];
    $hobby=$_POST['hobby'];
    $password=$_POST['pass'];
    $sql = "insert into test (name,email,password,gender,hobbies) values ('$name','$email','$password','$gender','$hobby')";
    $result=$conn->query($sql);
    if($result){
        echo"<br><br>Registration succesful";
        header("Location:logtest.php");
    }
}
?>