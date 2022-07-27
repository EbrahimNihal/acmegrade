<?php
include_once 'connection.php';
session_start();
header('Content-Type: application/json');

$raw_data = file_get_contents('php://input');
$decode = json_decode($raw_data);

$UiD = $_SESSION['userId'];
$orderId = time() . "-" . random_int(12345678, 87654321) . '-' . mt_rand(123, 54321);

$cmd = "insert into ordersdetails (OiD, UiD, orderName,phoneNumber,addressLane1,addressLane2,city,landmark,state,pincode,totalPrice) values ('$orderId', '$UiD', '$decode->name', '$decode->phoneNumber', '$decode->addressLane1', '$decode->addressLane2', '$decode->city', '$decode->landmark', '$decode->state', '$decode->pincode','$decode->totalPrice')";
mysqli_query($conn, $cmd);

foreach ($decode->pid as $pid) {
    $qnt = $decode->qnt->$pid;
    $cmd = "insert into orders (OiD, PiD, Oquantity, Ostatus) values ('$orderId', '$pid','$qnt','Pending')";
    mysqli_query($conn, $cmd);
}

$decode->orderId = $orderId;
$decode->userId = $UiD;
$decode->data = "success";

echo json_encode($decode);
