<?php

$email = $_POST["email"];
$password = $_POST["password"];

if ($email=="sagar@gmail.com" && $password=="1234") {
    session_start();
    $_SESSION['logged_in'] = "true";
    echo "1";
} else {
    echo "0";
}
