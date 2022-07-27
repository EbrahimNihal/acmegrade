<?php

include_once 'connection.php';

$raw_data = file_get_contents('php://input');
$decode = json_decode($raw_data);

$email = $decode->email;
$password = $decode->password;
$result = new stdClass();

$encrypted_password = hash('sha256', $password);
$cmd = "select * from users where Uemail='$email'";

session_start();

$sql_obj = mysqli_query($conn, $cmd);
if (mysqli_num_rows($sql_obj) > 0) {
    $row = mysqli_fetch_assoc($sql_obj);
    $passHash = $row['Upass'];
    if (password_verify($password, $passHash) == true) {
        http_response_code(200);
        header("Content-Type: application/json");
        $result->status = "success";
        $result->message = "Login Successful";
        $resultJSON = json_encode($result);
        echo "$resultJSON";
        $_SESSION['isLoggedIn'] = true;
        $_SESSION['isAdmin'] = $row['Uadmin'];
        $_SESSION['userId'] = $row['UiD'];
        $_SESSION['userName'] = $row['Ufirst'] . ' ' . $row['Ulast'];
        die;
    }
    if (password_verify($password, $passHash) == false) {
        http_response_code(404);
        header("Content-Type: application/json");
        $result->status = "Failed";
        $result->message = "Login Failed, Incorrect Password";
        $resultJSON = json_encode($result);
        echo "$resultJSON";

        $_SESSION['isLoggedIn'] = false;

        die;
    }
}

http_response_code(404);
header("Content-Type: application/json");
$result->status = "Failed";
$result->message = "Login Failed, Incorrect Email/Password";
$resultJSON = json_encode($result);
echo "$resultJSON";
$_SESSION['isLoggedIn'] = false;
die;
