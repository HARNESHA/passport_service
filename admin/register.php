<?php

$cname = $_POST["cname"];
$website = $_POST["website"];
$phone_no = $_POST["phone_no"];
$address = $_POST["address"];
$city = $_POST["city"];
$state = $_POST["state"];
$country = $_POST["country"];
$industry = $_POST["industry"];

$con = mysqli_connect("localhost", "root", "", "passport") or die("connection faild");

$query    = "INSERT into company(cname, website, phone_no, address, city, state, country, industry)
                    VALUES ('{$cname}','{$website}','{$phone_no}','{$address}','{$city}','{$state}','{$country}','{$industry}')";

if (mysqli_query($con, $query)) {
    echo "1";
} else {
    echo "0";
}
?>