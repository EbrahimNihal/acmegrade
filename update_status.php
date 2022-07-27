<?php
session_start();
$raw_data = file_get_contents('php://input');
$decode = json_decode($raw_data);

include_once 'connection.php';
$cmd = "update orders set Ostatus='$decode->status' where Oindex='$decode->index'";

mysqli_query($conn, $cmd);
