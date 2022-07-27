<?php
session_start();
$raw_data = file_get_contents('php://input');
$decode = json_decode($raw_data);
$_SESSION['cart'] = $decode;
