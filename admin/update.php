<?php
$con = mysqli_connect("localhost", "root", "", "passport") or die("connection faild");

$Id = $_GET["id"];
$reply = $_POST["reply"];



$query = "UPDATE feedback set reply = '{$reply}', replied = TRUE where id =$Id";

if (mysqli_query($con, $query)) {
    ?>
    <script>
    alert("updated successfully");
    window.location.href = "ajax-load.php";
    </script>
    <?php

} else {
    ?>
    <script>
    alert("something went wrong");
    </script>
    <?php

}
?>
