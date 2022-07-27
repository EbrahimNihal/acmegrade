<?php
session_start();
if (!isset($_SESSION['isAdmin']) || !$_SESSION['isAdmin']) {
    header("Location: login.html");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Upload</title>
    <link rel="stylesheet" href="index.css">
    <script src="https://kit.fontawesome.com/ea7aa5008a.js" crossorigin="anonymous"></script>
</head>

<body>

    <?php

include 'menu.html';
include_once 'connection.php';

$sql_obj = mysqli_query($conn, 'select * from products where PiD=' . $_GET['pid']);

$row = mysqli_fetch_assoc($sql_obj);

$pid = $row['PiD'];
$name = $row['Pname'];
$price = $row['Pprice'];
$details = $row['Pdesc'];
$imname = $row['Pimg'];

echo "<div class='flex items-center justify-center h-screen bg-gray-300 '>
        <form class='mt-8 w-96' action='edit_product_handler.php?pid=$pid' method='POST' enctype='multipart/form-data'>
            <h2 class='text-black font-bold text-4xl mb-4'>Update $name (ProductId-$pid)</h2>
            <div class='mx-auto max-w-lg'>
                <div class='py-1'>
                    <span class='px-1  text-black font-medium'>Product Name</span>
                    <input placeholder='' type='textarea' class='text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none' name='name' value='$name'>
                </div>
                <div class='py-1'>
                    <span class='px-1  text-black font-medium'>Product Price</span>
                    <input placeholder='' type='number' class='text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md appearance-none focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none' name='price' value='$price'>
                </div>
                <div class='py-1'>
                    <span class='px-1  text-black font-medium'>Producrt Description</span>
                    <textarea class='text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none' rows='4' name='details'>$details</textarea>
                </div>

                <div class='py-1'>
                    <span class='px-1  text-black font-medium'>Producrt Image</span>
                    <div class='bg-white flex items-center gap-2 rounded-lg p-4'>
                        <div class='shrink-0'>
                            <img class='h-16 w-16 object-cover rounded-full' src='$imname' alt='image in database' />
                         </div>
                        <input type='file' class='block w-full text-sm text-black file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-violet-50 file:text-violet-700 hover:file:bg-violet-100' name='pdt_img' accept='image/*' value='$imname' />
                    </div>
                </div>

                <button class='mt-3 text-lg font-semibold bg-gray-800 w-full text-white rounded-lg px-6 py-3 block shadow-xl hover:text-white hover:bg-black' type='submit'><i class='fa-solid fa-upload'></i>
                    Update
                </button>

            </div>
        </form>
    </div>";
?>
    <?php
include 'footer.html';
?>
</body>

</html>