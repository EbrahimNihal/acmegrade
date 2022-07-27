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
    <title>Orders</title>
    <link rel="stylesheet" rel="preload" href="index.css">
    <script src="https://kit.fontawesome.com/ea7aa5008a.js" crossorigin="anonymous"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>

<body x-data="getData()">
    <?php include 'menu.html'; ?>
    <div class="h-screen bg-gray-300 overflow-y-scroll md:overflow-y-clip">
        <div class="py-10">
            <div class="max-w-lg mx-auto bg-gray-100 shadow-lg rounded-lg max-h-[calc(100vh-20vh)] overflow-auto md:max-w-7xl">
                <div class="md:flex ">
                    <div class="w-full px-5 py-5">
                        <div class="relative overflow-auto max-h- md:max-w-7xl shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            Index
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Order Id
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Product Id
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Quantity
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Address
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Status
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Status DropDown
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <span class="sr-only">Status Update</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include_once 'connection.php';
                                    $cmd = "select * from orders";
                                    $sql_status = mysqli_query($conn, $cmd);
                                    $total_rows = mysqli_num_rows($sql_status);

                                    for ($i = 0; $i < $total_rows; $i++) {
                                        $row = mysqli_fetch_assoc($sql_status);
                                        $order_id = $row['OiD'];
                                        $product_id = $row['PiD'];
                                        $quantity = $row['Oquantity'];
                                        $status = $row['Ostatus'];
                                        $index = $i + 1;
                                        $Oindex = $row['Oindex'];
                                        $event = '$' . 'event';
                                        $cmd2 = "select * from ordersdetails where OiD='$order_id'";
                                        $sql_address = mysqli_query($conn, $cmd2);
                                        $row_address = mysqli_fetch_assoc($sql_address);
                                        $addressLane1 = $row_address['addressLane1'];
                                        $addressLane2 = $row_address['addressLane2'];
                                        $addressCity = $row_address['city'];
                                        $addressState = $row_address['state'];
                                        $addressZip = $row_address['pincode'];
                                        $address = $addressLane1 . "," . $addressLane2 . "," . $addressCity . "," . $addressState . "-" . $addressZip;
                                        echo "<tr class='border-b dark:bg-gray-800 dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700'>
                                        <td scope='row' class='px-6 py-4'>$index</td>
                                        <th scope='row' class='px-6 py-4 font-medium text-gray-900 whitespace-nowrap'>$order_id</th>
                                        <td scope='row' class='px-6 py-4'>$product_id</td>
                                        <td scope='row' class='px-6 py-4'>$quantity</td>
                                        <td scope='row' class='px-6 py-4'>$address</td>
                                        <td scope='row' class='px-6 py-4'>$status</td>
                                        <td scope='row' class='px-6 py-4'>
                                        <select name='OrderStatus' id='$Oindex'>
                                            <option value='Pending'>Pending</option>
                                            <option value='Packed'>Packed</option>
                                            <option value='Shipped'>Shipped</option>
                                            <option value='delivered'>delivered</option>
                                        </select>
                                        </td>
                                        <td scope='row' class='px-6 py-4'>
                                            <button class='bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full' data-index='$Oindex' @click='statusUpdate($event)' >
                                            Update
                                            </button>
                                        </td>";
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include_once 'footer.html';
    ?>
    <script>
        function getData() {
            return {
                count: 0,
                openUser: false,
                openMobile: true,
                show: true,

                statusUpdate(event) {
                    const status = document.getElementById(event.target.dataset.index).value;
                    axios.post('update_status.php', {
                        status: status,
                        index: event.target.dataset.index
                    }).then(res => {
                        location.reload();
                    });
                }
            }
        }
    </script>
</body>

</html>