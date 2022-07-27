<?php
session_start();
if (!$_SESSION['isAdmin'] || !isset($_SESSION['isAdmin'])) {
    header("Location: login.html");
}

include_once 'connection.php';

$pid = $_GET['pid'];
$name = $_POST['name'];
$price = $_POST['price'];
$details = $_POST['details'];

if (!$_FILES['pdt_img']['error'] == 4) {
    date_default_timezone_set("Asia/Kolkata");
    $unique_file_name = '../agmegrade/img/' . date("Y_m_d_h_i_sa") . '.' . pathinfo($_FILES['pdt_img']['full_path'], PATHINFO_EXTENSION);
    move_uploaded_file($_FILES['pdt_img']['tmp_name'], $unique_file_name);
    echo $unique_file_name;
    $cmd = "update products set Pname='$name',Pprice=$price,Pdesc='$details',Pimg='$unique_file_name'  where PiD='$pid'";
} else {
    $cmd = "update products set Pname='$name',Pprice=$price,Pdesc='$details' where PiD='$pid'";
}

$sql_status = mysqli_query($conn, $cmd);

if ($sql_status) {
    echo "Product Updated Successfully";
    header('location:view_products.php');
} else {
    echo "Error in SQL Query";
}
