<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['em'])) {
    $email = $_POST['em'];
    $username = '';
    $atPos = -1;

    for ($i = 0; $i < strlen($email); $i++) {
        if ($email[$i] == '@') {
            $atPos = $i;
            break;
        }
        $username .= $email[$i];
    }

    if ($atPos != -1) {
        echo "The username from the email $email is: $username";
    } else {
        echo "The provided email address is not valid";
    }
}else {
    echo "Please enter an email address";
}
?>

