<?php

$name = $_POST["name"];
$email = $_POST["email"];
$phoneNumber = $_POST["phoneNumber"];
$password = $_POST["password"];


$con = mysqli_connect("localhost", "root", "", "passport") or die("connection faild");
$sql = "SELECT email from person where email='{$email}';";

$result = $con->query($sql);
if ($result->num_rows > 0) {
    echo "2";
} else {

$query    = "INSERT into person(name, email, phoneNumber, password) VALUES ('{$name}','{$email}','{$phoneNumber}','{$password}')";

if (mysqli_query($con, $query)) {
    echo "1";
} else {
    echo "0";
}
}
?>