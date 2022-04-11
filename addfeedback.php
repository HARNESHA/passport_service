<?php
$cname = $_POST["cname"];
$phone = $_POST["phone"];
$cid = $_POST["cid"];
$city = $_POST["city"];
$feedback = $_POST["feedback"];

$con = mysqli_connect("localhost", "root", "", "passport") or die("connection faild");

$query = "INSERT into feedback(name,phone_no,city,clientid,feedback) VALUES ('{$cname}','{$phone}','{$city}','{$cid}','{$feedback}')";

if (mysqli_query($con, $query)) {
    echo "1";
    header('Location: http://localhost/passport_service/');
} else {
    echo "0";
}
