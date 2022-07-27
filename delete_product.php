<?php

session_start();
if (!isset($_SESSION['isAdmin']) || !$_SESSION['isAdmin']) {
    header("Location: login.html");
}


include_once 'connection.php';


$pid = $_GET['pid'];

$cmd = "delete from products where PiD='$pid'";
if (mysqli_query($conn, $cmd)) {
    header('location: view_products.php');
    die;
} else {
    http_response_code(500);
    echo "Error in SQL Query";
}
