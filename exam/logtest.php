<html>
    <form action="logtest.php" method="post">
        Email:&nbsp;<input type="text" name="email"><br><br>
        Password:&nbsp;<input type="password" name="pass"><br><br>
        <input type="submit" value="Login">
    </form>

    <?php
        session_start();
        include("dbtest.php");

        if(isset($_SESSION['semail'])){
            header("Location:testdash.php");
            exit();
        }

        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $lemail = $_POST['email'];
            $lpassword = $_POST['pass'];

            $sql2 = "SELECT * FROM test WHERE email='$lemail'";
            $result2 = $conn->query($sql2);

            if($result2->num_rows > 0){
                $row2 = $result2->fetch_assoc();

                if($lpassword == $row2['password']){
                    $_SESSION['semail'] = $row2['email'];
                    $_SESSION['sname'] = $row2['name'];

                    setcookie('cname', $row2['email'], time() + (86400 * 30), '/');

                    header("Location:testdash.php");
                    exit();
                } else {
                    echo "<br>Invalid password.";
                }
            } else {
                echo "<br>USER NOT FOUND.";
            }
        }
    ?>
</html>
