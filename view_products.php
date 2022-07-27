<?php
session_start();
if (!isset($_SESSION['isAdmin']) || !$_SESSION['isAdmin']) {
    header("Location: user_view_products.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Product</title>
    <link rel="stylesheet" rel="preload" href="index.css">
    <script src="https://kit.fontawesome.com/ea7aa5008a.js" crossorigin="anonymous" defer></script>
</head>

<body>
    <?php include 'menu.html';?>
</body>

</html>


<?php

include_once 'connection.php';

$sql_obj = mysqli_query($conn, 'select * from products');

$total_rows = mysqli_num_rows($sql_obj);

echo '<div class="flex lg:flex-row items-start gap-4 h-screen flex-wrap bg-gray-300 p-3">';

for ($i = 0; $i < $total_rows; $i++) {
    $row = mysqli_fetch_assoc($sql_obj);

    $pid = $row['PiD'];
    $name = ucfirst($row['Pname']);
    $price = $row['Pprice'];
    $details = $row['Pdesc'];
    $imname = $row['Pimg'];

    echo " <div class='w-full h-80 md:w-1/4 lg:w-1/5 flex flex-col align-middle items-center justify-center gap-2 text-center font-medium p-4 bg-white rounded-md hover:shadow-lg'>
            <span> $name </span>
            <img class='rounded-lg shadow-lg object-cover h-52 w-full' src='$imname' alt='$name'>
            <div class='flex flex-row w-full justify-around'>
                <div class='bg-orange-400 px-4 py-2 rounded-lg'>
                    <a href='edit_product.php?pid=$pid'>
                        <i class='fa-regular fa-pen-to-square fa-sm'></i>
                        <span> Edit </span>
                    </a>
                </div>
                <div class='bg-red-400 px-3 py-2 rounded-lg'>
                    <a href='delete_product.php?pid=$pid'>
                        <i class='fa-regular fa-square-minus fa-sm'></i>
                        <span> Delete </span>
                    </a>
                </div>
            </div>
        </div>";
}

echo '</div>';

include_once 'footer.html';

?>