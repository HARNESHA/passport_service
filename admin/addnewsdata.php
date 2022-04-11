<?php

$title = $_POST["newTitle"];
$data = $_POST["newdis"];

$con = mysqli_connect("localhost", "root", "", "passport") or die("connection faild");

$query    = "INSERT into news(news_title,news_data)
                    VALUES ('{$title}','{$data}')";

if (mysqli_query($con, $query)) {
    echo "1";
    header('Location: http://localhost/passport_service/admin/addnews.php');
} else {
    echo "0";
    header('Location: http://localhost/passport_service/admin/addnews.php');
}
