<?php
session_start();
if (!isset($_SESSION['isLoggedIn']) || !$_SESSION['isLoggedIn']) {
    header("Location: login.html");
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
    <script src="https://kit.fontawesome.com/ea7aa5008a.js" crossorigin="anonymous"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>

<body x-data="getData()">
    <?php

    include_once 'menu_user.html';
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
        $event = "$" . "event";
        echo " <div class='w-full h-80 md:w-1/4 lg:w-1/5 flex flex-col align-middle items-center justify-center gap-2 text-center font-medium p-4 bg-white rounded-md hover:shadow-lg'>
            <span> $name </span>
            <img class='rounded-lg shadow-lg object-cover h-52 w-full' src='$imname' alt='$name'>
            <div class='flex flex-row w-full justify-around gap-2' data-pid='$pid' data-price='$price'>
                <button type='button' class='bg-orange-400 px-4 py-2 rounded-lg pointer-events-none'>
                    <i class='fa-solid fa-indian-rupee-sign'></i>
                    <span> $price </span>
                </button>
                <button type='button' class='bg-gray-500 cursor-pointer hover:bg-black text-white font-semibold px-3 py-2 rounded-lg' data-price='$price' data-pid='$pid' @click='addToCart($event)' >
                            <i class='fa-solid fa-cart-plus' data-price='$price' data-pid='$pid'></i>
                            <span> Add to cart </span>
                </button>
            </div>
        </div>";
    }

    echo '</div>';

    include_once 'footer.html';

    ?>
    <script>
        console.info(JSON.parse(localStorage.getItem('pid')));

        function getData() {
            return {
                order: {
                    pid: [],
                    totalPrice: 0,
                },
                count: 0,
                openUser: false,
                openMobile: true,
                show: true,
                addToCart(event) {
                    if (!this.order.pid.includes(event.target.parentElement.dataset.pid)) {
                        this.order.pid.push(event.target.parentElement.dataset.pid);
                        this.order.totalPrice += parseInt(event.target.parentElement.dataset.price);
                        this.count++;
                        console.log(this.order);
                        localStorage.setItem('pid', JSON.stringify(this.order.pid));
                        localStorage.setItem('totalPrice', JSON.stringify(this.order.totalPrice));
                        localStorage.setItem('count', JSON.stringify(this.count));
                    }
                },
                init() {
                    if (localStorage.getItem('pid') != null) {
                        this.order.pid = JSON.parse(localStorage.getItem('pid'));
                        this.order.totalPrice = JSON.parse(localStorage.getItem('totalPrice'));
                        this.count = JSON.parse(localStorage.getItem('count'));
                    }
                },
                viewCart() {
                    axios.post('update_cart.php', {
                        pid: this.order.pid,
                        totalPrice: this.order.totalPrice,
                        count: this.count,
                    }).then(response => {
                        location.replace('view_cart.php');
                    });
                },
            }
        }
    </script>
</body>

</html>