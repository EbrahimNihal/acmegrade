<?php

session_start();
if (!$_SESSION['isAdmin'] || !isset($_SESSION['isAdmin'])) {
    header("Location: login.html");
}

include_once 'connection.php';
$name = $_POST['name'];
$price = $_POST['price'];
$details = $_POST['details'];

date_default_timezone_set("Asia/Kolkata");
$unique_file_name = '../agmegrade/img/' . date("Y_m_d_h_i_sa") . '.png';
move_uploaded_file($_FILES['pdt_img']['tmp_name'], $unique_file_name);

$cmd = "insert into products(Pname,Pprice,Pdesc,Pimg) values('$name',$price,'$details','$unique_file_name')";
$sql_status = mysqli_query($conn, $cmd);

if ($sql_status) {
    echo "Product Uploaded Successfully";
    header('location:product_upload.php');
} else {
    echo "Error in SQL Query";
}
