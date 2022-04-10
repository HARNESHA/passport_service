<?php
session_start();
// include 'c.php'; 
$applying_for = $_POST['applying-for'];
$type_of_application = $_POST['type-of-application'];
$type_of_passport_booklet = $_POST['type-of-passport-booklet'];
$applicant_name = $_POST['applicant-name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$age = $_POST['age'];



$_SESSION["applying_for"] = $applying_for;
$_SESSION["type_of_application"] = $type_of_application;
$_SESSION["type_of_passport_booklet"] = $type_of_passport_booklet;

$_SESSION["applicant_name"] = $applicant_name;
$_SESSION["phone"] = $phone;
$_SESSION["email"] = $email;
$_SESSION["age"] = $age;


// $inster = "insert into service(applying_for,type_of_application, type_of_passport_booklet, passport_reason, date_of_expiry, has_passport_expired, passport_appearance,passport_signature, passport_given_name, passport_surname, passport_dof, passport_spouse_name, passport_address, passport_delete_ecr, passport_other, applicant_name, phone,email,age,code) VALUES ('$applying_for', '$type_of_application', '$type_of_passport_booklet', '$passport_reason', '$date_of_expiry', '$has_passport_expired', '$passport_appearance', '$passport_signature','$passport_given_name', '$passport_surname', '$passport_dof', '$passport_spouse_name', '$passport_address', '$passport_delete_ecr', '$passport_other', '$applicant_name', '$phone','$email','$age','$promo');";
// $res = mysqli_query($con, $inster);


include './instamojo/Instamojo.php';
$api = new Instamojo\Instamojo('test_18f6f4b4529dfb7275bac26e0c4', 'test_690b258946179d2fc31826ae442', 'https://test.instamojo.com/api/1.1/');
try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => "passport",
        "amount" => "2500",
        "send_email" => true,
        "email" => "thummarsagar910@gmail.com",
        "buyer_name" => $applicant_name,
        "phone" => $phone,
        "send_sms" => true,
        "allow_repeated_payments" => false,
        "redirect_url" => "http://localhost/passport_service/thank.php"
    ));

    print_r($response);
    $pay_url = $response['longurl'];
    header("location:$pay_url");
} catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}
session_destroy();
