<?php
include_once 'connection.php';

$raw_data = file_get_contents('php://input');
$decode = json_decode($raw_data);
$password = $decode->password;
$email = $decode->email;
$firstName = $decode->firstname;
$lastName = $decode->lastname;
$phone = $decode->phoneNumber;
$result = new stdClass();

$encrypted_password = password_hash(
    "$password",
    PASSWORD_BCRYPT,
    array('cost' => 9)
);

$cmd = "insert into users(Ufirst,Ulast,Uemail,Upass,Uphone) values('$firstName','$lastName','$email','$encrypted_password','$phone')";

try {
    if (!mysqli_query($conn, $cmd)) {
        http_response_code(500);
        header("Content-Type: application/json");
        $result->status = "Failed";
        $result->message = "Internal Server Error";
        $result->err = mysqli_error($conn);
        $resultJSON = json_encode($result);
        echo "$resultJSON";
        die;
    }
} catch (Exception $e) {
    http_response_code(409);
    header("Content-Type: application/json");
    $result->status = "Failed";
    $result->message = "Email already exists";
    $resultJSON = json_encode($result);
    echo "$resultJSON";
    die;
}
http_response_code(201);
header("Content-Type: application/json");
$result->status = "success";
$result->message = "Account Created Successfully";
$resultJSON = json_encode($result);
echo "$resultJSON";
