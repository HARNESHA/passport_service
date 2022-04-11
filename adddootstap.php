<?php
$address = $_POST["Address"];
$cid = '1';

$con = mysqli_connect("localhost", "root", "", "passport") or die("connection faild");

$query = "INSERT into doorstap(address,cid) VALUES ('{$address}','{$cid}')";

if (mysqli_query($con, $query)) {
    $to_email = "hirendengda000@gmail.com";
    $subject = "Doorstap Application";
    $body = "aadddd";
    $headers = "hirensariya1234@gmail.com";

    if (mail($to_email, $subject, $body, $headers)) {
        echo "Email successfully sent to $to_email...";
        header('Location: http://localhost/passport_service/');
    } else {
        echo "Email sending failed...";
        header('Location: http://localhost/passport_service/');
    }
} else {
    header('Location: http://localhost/passport_service/');
    echo "0";
}
