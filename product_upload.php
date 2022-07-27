<?php
session_start();
if (!$_SESSION['isAdmin'] || !isset($_SESSION['isAdmin'])) {
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

    ?>

    <div class="flex items-center justify-center h-screen bg-gray-300 ">
        <form class="mt-8 w-96" action="product_upload_handler.php" method="POST" enctype="multipart/form-data">
            <h2 class="text-black font-bold text-4xl mb-4">Admin Upload</h2>
            <div class="mx-auto max-w-lg">
                <div class="py-1">
                    <span class="px-1  text-black font-medium">Product Name</span>
                    <input placeholder="" type="textarea" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" name="name">
                </div>
                <div class="py-1">
                    <span class="px-1  text-black font-medium">Product Price</span>
                    <input placeholder="" type="number" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md appearance-none focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" name="price">
                </div>
                <div class="py-1">
                    <span class="px-1  text-black font-medium">Producrt Description</span>
                    <textarea class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" rows="4" name="details"> </textarea>
                </div>

                <div class="py-1">
                    <span class="px-1  text-black font-medium">Producrt Image</span>
                    <div class="bg-white rounded-lg p-4"><input type="file" class="block w-full text-sm text-black file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-violet-50 file:text-violet-700 hover:file:bg-violet-100" name="pdt_img" accept="image/*" /></div>
                </div>

                <button class="mt-3 text-lg font-semibold bg-gray-800 w-full text-white rounded-lg px-6 py-3 block shadow-xl hover:text-white hover:bg-black" type="submit"><i class="fa-solid fa-upload"></i>
                    Upload
                </button>
            </div>
        </form>
    </div>
    <?php
    include 'footer.html';
    ?>
</body>

</html>