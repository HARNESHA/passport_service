<?php
$Id = $_POST["id"];
$con = mysqli_connect("localhost", "root", "", "passport") or die("connection faild");

$b = "DELETE FROM company where id ='$Id' ";

if (mysqli_query($con, $b)) {
    echo "1";
} else {
    echo "0";
}
?>