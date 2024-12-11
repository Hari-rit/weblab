<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['submit'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO students (first_name, last_name, dob, email, gender, password) 
            VALUES ('$firstName', '$lastName', '$dob', '$email', '$gender', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
        
    } else {
        echo "Error: " . $conn->error;
        exit();
    }
   header("Location: c4-3login.php");
}
?>
<html>
<body>
    <h2 style="text-align:center">STUDENT REGISTRATION FORM</h2>
    <form action="c4-3reg.php" name="registrationForm" method="POST">
        <table align="center" border="1" cellpadding="8">
            <tr>
                <td>FIRST NAME</td>
                <td><input type="text" name="firstName" required maxlength="30"></td>
            </tr>
            <tr>
                <td>LAST NAME</td>
                <td><input type="text" name="lastName" required maxlength="30"></td>
            </tr>
            <tr>
                <td>DATE OF BIRTH</td>
                <td><input type="date" name="dob" required></td>
            </tr>
            <tr>
                <td>EMAIL-ID</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>GENDER</td>
                <td><input type="radio" name="gender" value="MALE" required> Male
                    <input type="radio" name="gender" value="FEMALE" required> Female
                </td>
            </tr>
            <tr>
                <td>PASSWORD</td>
                <td><input type="password" name="password" required maxlength="30"></td>
            </tr>
            <tr>
                <td colspan="2"><center><input type="submit" name="submit" value="SUBMIT">&nbsp;<input type="reset"></center></td>
            </tr>
        </table>
    </form>
</body>
</html>

