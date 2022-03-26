<?php
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"passport");
if ($conn){ 
    echo "<script>alert('connected.');</script>";
}
else{
  echo "<html><head>
  <script>
  alert('not connected.');
  </script>
  </head>
  </html>";
  
}

if (isset($_POST['submit'])) {
    echo "<script>alert('entered.');</script>";
  	$username = $_POST['username'];
  	$email = $_POST['email'];
  	$password = $_POST['password'];
    //$name=$_POST['name'];
    $phone_no=$_POST['mobileno'];
    //$address=$_POST['address'];

    
      $sql= "INSERT INTO person(name, password, email, phoneNumber) VALUES ('$username','$password','$email','$phone_no')";
      //echo $sql;
      $result= mysqli_query($conn,$sql);
       
 if($result){
    echo "<script>alert('done.');</script>";
  echo "<html>
  <head>
  <script>
  alert('Data Inserted Successfully.');
  location.replace('login.php');
  </script>
  </head>
  </html>";
  
 }
      exit();
  	}
  
?>






