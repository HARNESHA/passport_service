<?php

$email = $_POST["email"];
$password = $_POST["password"];

$con = mysqli_connect("localhost", "root", "", "passport") or die("connection faild");

$sql = "SELECT * from person where email='{$email}' and password='{$password}';";

$result = $con->query($sql);
if ($result->num_rows > 0) {
    session_start();
    $_SESSION['logged_in'] = "true";
    echo "1";
} else {
    echo "0";
}
?>