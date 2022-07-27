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
  <title>View Cart</title>
  <link rel="stylesheet" rel="preload" href="index.css">
  <script src="https://kit.fontawesome.com/ea7aa5008a.js" crossorigin="anonymous"></script>
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>

<body x-data="getData()">
  <?php

  include_once 'menu_user.html';
  if (!isset($_SESSION['cart']) || empty($_SESSION['cart']->pid)) {
    echo "<div class='h-screen bg-gray-300'>
    <div class='p-12 h-auto md:h-[calc(100vh-50px)]'>
    <div class='flex items-center'>
            <a href='../agmegrade/user_view_products.php' class='text-md  font-medium'><i class='fa fa-arrow-left pr-2'></i></a>
        </div>
      <div class='max-w-lg mx-auto bg-gray-100 shadow-lg rounded-lg h-full p-6 md:max-w-5xl'>
        <?xml version='1.0' encoding='UTF-8'?>
  <svg class='h-full w-full' viewBox='0 0 1047.7 747.97' data-name='Layer 1' version='1.1'
    xmlns='http://www.w3.org/2000/svg' xmlns:cc='http://creativecommons.org/ns#'
    xmlns:dc='http://purl.org/dc/elements/1.1/' xmlns:rdf='http://www.w3.org/1999/02/22-rdf-syntax-ns#'>
    <title>empty_cart</title>

    <path
      d='m115.2 523.05c-67.31-68.722-153.82-194.75-96.473-271.98 71.756-96.645 240.87 28.427 360.71 17.109 217.29-20.522 514.84-334.02 636.66-152.92 134.81 200.42-191.14 518.94-422.36 588.81-163.25 49.332-359.2-59.174-478.54-181.01z'
      fill='#6c63ff' />
    <path
      d='m55.367 712.74c12.428 23.049 38.806 32.944 38.806 32.944s6.2271-27.475-6.2013-50.524c-12.428-23.049-38.806-32.944-38.806-32.944s-6.2271 27.475 6.2013 50.524z'
      fill='#2f2e41' />
    <path
      d='m63.917 705.16c22.438 13.5 31.08 40.314 31.08 40.314s-27.738 4.9268-50.177-8.5729-31.08-40.314-31.08-40.314 27.738-4.9268 50.177 8.5729z'
      fill='#6c63ff' />
    <g transform='translate(13.737 -.00012893)' fill='#f2f2f2'>
      <rect x='583.25' y='113.91' width='2' height='18.5' />
      <rect x='670.25' y='176.91' width='140' height='2' />
      <rect x='708.25' y='158.91' width='2' height='18.5' />
      <rect x='769.25' y='158.91' width='2' height='18.5' />
      <rect x='656.25' y='640.91' width='140' height='2' />
      <rect x='694.25' y='622.91' width='2' height='18.5' />
      <rect x='461.25' y='560.91' width='140' height='2' />
      <rect x='499.25' y='542.91' width='2' height='18.5' />
      <rect x='560.25' y='542.91' width='2' height='18.5' />
      <rect x='723.25' y='469.91' width='2' height='18.5' />
    </g>
    <polygon transform='translate(13.737 -.00012893)'
      points='125.27 700.48 360.36 700.48 360.36 617.86 145.18 617.86 134.73 596.08 136.26 595.35 146.25 616.16 362.06 616.16 362.06 702.18 125.27 702.18'
      fill='#2f2e41' />
    <g transform='translate(13.737 -.00012893)' fill='#3f3d56'>
      <circle cx='156.79' cy='726.03' r='17.887' />
      <circle cx='333.1' cy='726.03' r='17.887' />
      <circle cx='540.93' cy='346.15' r='11.073' />
    </g>
    <path d='m401.13 589.76h-266.15l-57.588-188.24h383.04l-0.34852 1.1075zm-264.89-1.7035h263.64l58.234-184.83h-378.42z'
      fill='#2f2e41' />
    <polygon transform='translate(13.737 -.00012893)'
      points='82.26 413.02 418.7 413.02 418.4 414 366.61 579.96 132.84 579.96' fill='#f2f2f2' />
    <g transform='translate(13.737 -.00012893)' fill='#2f2e41'>
      <polygon points='461.06 341.89 526.45 341.89 526.45 343.6 462.37 343.6 451.46 384.7 449.82 384.26' />
      <rect x='82.258' y='458.58' width='345.29' height='1.7035' />
      <rect x='101.46' y='521.34' width='306.32' height='1.7035' />
      <rect x='254.31' y='402.37' width='1.7035' height='186.53' />
      <rect transform='rotate(-86.249 362.44 614.79)' x='385.56' y='570.8' width='186.93' height='1.7038' />
      <rect transform='rotate(-3.729 -908.23 2868.3)' x='334.46' y='478.18' width='1.7038' height='186.93' />
    </g>
    <path
      d='m609.15 61.876s14.618 41.606 5.6225 48.007 30.361 58.675 30.361 58.675l47.229-12.802-25.863-43.74s-3.3735-43.74-3.3735-50.141-53.976 3e-5 -53.976 3e-5z'
      fill='#a0616a' />
    <path
      d='m609.15 61.876s14.618 41.606 5.6225 48.007 30.361 58.675 30.361 58.675l47.229-12.802-25.863-43.74s-3.3735-43.74-3.3735-50.141-53.976 3e-5 -53.976 3e-5z'
      opacity='.1' />
    <g transform='translate(13.737 -.00012893)' fill='#2f2e41'>
      <path transform='translate(-152,-76.014)'
        d='m722.87 434.47s-4.2673 53.341 0 81.079 10.668 104.55 10.668 104.55 0 145.09 23.47 147.22 40.539 4.2673 42.673-4.2673-10.668-12.802-4.2673-17.069 8.5346-19.203 0-36.272 0-189.9 0-189.9l40.539 108.82s4.2673 89.614 8.5346 102.42-4.2673 36.272 10.668 38.406 32.005-10.668 40.539-14.936-12.802-4.2673-8.5346-6.401 17.069-8.5346 12.802-10.668-8.5346-104.55-8.5346-104.55-11.735-218.7-26.671-227.23-24.537 6.1658-24.537 6.1658z' />
      <path transform='translate(-152,-76.014)'
        d='m761.28 758.78v17.069s-19.203 46.399 0 46.399 34.138 4.8083 34.138-1.5927v-57.609z' />
      <path transform='translate(-152,-76.014)'
        d='m887.17 758.75v17.069s19.203 46.399 0 46.399-34.138 4.8083-34.138-1.5927v-57.609z' />
    </g>
    <circle cx='639.02' cy='54.408' r='38.406' fill='#a0616a' />
    <path
      d='m627.29 125.89s10.668 32.005 27.738 25.604l17.069-6.401 29.871 204.83s-23.47 34.138-57.609 12.802-17.069-236.84-17.069-236.84z'
      fill='#6c63ff' />
    <path
      d='m657.16 119.49 9.6014-20.27s56.542 26.671 65.076 35.205 8.5346 21.337 8.5346 21.337l-14.936 53.341s4.2673 117.35 4.2673 121.62 14.936 27.738 4.2673 19.203-12.802-17.069-21.337-4.2673-27.738 27.738-27.738 27.738z'
      fill='#3f3d56' />
    <path
      d='m731.84 273.11-6.401 59.742s-38.406 34.138-29.871 36.272 12.802-6.401 12.802-6.401 14.936 14.936 23.47 6.401 29.871-89.614 29.871-89.614z'
      fill='#a0616a' />
    <path
      d='m639.84 0.12987c-8.5141-0.30437-17.625-0.45493-24.804 4.1332a36.313 36.313 0 0 0-8.5723 8.3915c-6.9915 8.8385-13.033 19.959-10.436 30.925l3.0163-1.1764a19.751 19.751 0 0 1-1.9052 8.4626c0.42475-1.2351 1.8472 0.76151 1.4664 2.0108l-3.3227 10.901c5.4621-2.0024 12.257 2.0519 13.088 7.8097 0.37974-12.661 1.6932-27.18 11.964-34.593 5.1795-3.7387 11.735-4.88 18.042-5.8935 5.8183-0.935 11.918-1.8266 17.491 0.0889 5.573 1.9155 10.319 7.615 9.0553 13.371 2.5696-0.88518 5.4436 0.90566 6.7135 3.3086s1.3366 5.2375 1.3748 7.9551c2.7391 1.9358 5.8563-1.9082 6.9726-5.0711 2.6203-7.4243 4.9494-15.327 3.5378-23.073s-7.7232-15.148-15.596-15.174a5.4668 5.4668 0 0 0 1.4218-3.8487l-6.4893-0.5483a7.1723 7.1723 0 0 0 4.2858-2.2595c-2.6054 2.8669-23.09-5.5688-27.304-5.7194z'
      fill='#2f2e41' />
    <path
      d='m637.96 113.09s-17.369-17.021-23.62-15.978-14.786 15.978-14.786 15.978-51.208 17.069-49.074 34.138 25.604 100.28 25.604 100.28 19.203 100.28 2.1337 110.95 81.079 38.406 83.213 25.604 6.401-140.82 0-160.02-23.47-110.95-23.47-110.95z'
      fill='#3f3d56' />
    <path d='m712.63 147.23h26.383s18.424 81.079 20.558 89.614 6.401 49.074 4.2673 49.074-44.807-8.5346-44.807-2.1336z'
      fill='#3f3d56' />
    <path d='m711.74 348h-101c-9.8561-45.34-10.68-89.146 0-131h101c-16.299 41.101-17.318 84.607 0 131z'
      fill='#f2f2f2' />
    <path d='m569.68 292.31 29.871 12.802s57.609 8.5346 57.609-14.936-57.609-10.668-57.609-10.668l-19.204-6.1401z'
      fill='#a0616a' />
    <path
      d='m576.08 134.42-25.604 6.401-19.203 113.08s-6.401 29.871 4.2673 32.005 40.539 19.203 40.539 19.203 4.2673-32.005 12.802-32.005l-21.337-17.069 12.802-74.678z'
      fill='#3f3d56' />
  </svg>
  </div>
  </div>
  </div>";
    include_once 'footer.html';
    printf("
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
        removeFromCart(event) {
          if (this.order.pid.includes(event.target.parentElement.dataset.pid)) {
            this.order.pid.splice(this.order.pid.indexOf(event.target.parentElement.dataset.pid), 1);
            this.order.totalPrice -= parseInt(event.target.parentElement.dataset.price);
            this.count--;
            document.getElementById(event.target.parentElement.dataset.pid).remove();
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
          axios.post('test.php', {
            pid: this.order.pid,
            totalPrice: this.order.totalPrice,
            count: this.count,
          }).then(response => {
            console.trace(response.data);
            this.show = false;
          });
        },

      }
    }
  </script>
</body>

</html>");
    die;
  }
  ?>
  <div class="h-screen bg-gray-300 overflow-y-scroll md:overflow-y-clip">
    <div class="py-10">
      <div class="max-w-lg mx-auto bg-gray-100 shadow-lg rounded-lg  md:max-w-5xl">
        <div class="md:flex ">
          <div class="w-full px-5 py-5">
            <div class="md:grid md:grid-cols-3 gap-2 ">
              <div class="col-span-2 p-5">
                <h1 class="text-xl font-medium ">Shopping Cart</h1>
                <?php
                include_once 'connection.php';
                foreach ($_SESSION['cart']->pid as $pid) {
                  $cmd = "select * from products where PiD='$pid'";
                  $sql_obj = mysqli_query($conn, $cmd);
                  $row = mysqli_fetch_assoc($sql_obj);
                  $pid = $row['PiD'];
                  $name = ucfirst($row['Pname']);
                  $price = $row['Pprice'];
                  $details = $row['Pdesc'];
                  $imname = $row['Pimg'];
                  $event = "$" . "event";
                  $target = "input-" . "$pid";
                  echo "<div class='flex justify-between items-center mt-6 pt-6'  data-price='$price' data-pid='$pid' id='$pid'>
                                            <div class='flex  items-center'>
                                                <img src='$imname' width='60' alt='$pid' class='rounded-lg h-auto'>
                                                <div class='flex flex-col ml-3'>
                                                    <span class='md:text-md font-medium'>$name</span>
                                                </div>
                                            </div>
                                            <div class='flex justify-center items-center'  data-price='$price' data-pid='$pid'>
                                                <div class='pr-8 flex' data-price='$price' data-pid='$pid'>
                                                    <span class='font-semibold select-none cursor-pointer' data-type='decrement' @click='priceUpdateMinus($event)' >-</span>
                                                    <label for='$target' class='sr-only'>quantity</label>
                                                    <input type='text' id='$target' class='focus:outline-none bg-gray-100 border h-6 w-8 rounded text-sm px-2 mx-2' disabled value='1'>
                                                    <span class='font-semibold select-none cursor-pointer' data-type='increment' @click='priceUpdatePlus($event)' >+</span>
                                                </div>
                                                <div class='pr-8 '>
                                                    <span class='text-xs font-medium'>₹ $price</span>
                                                </div>
                                                <div  data-price='$price' data-pid='$pid' @click='removeFromCart($event)' >
                                                    <i class='fa fa-close text-xs font-medium cursor-pointer'  data-price='$price' data-pid='$pid'></i>
                                                </div>
                                            </div>
                                        </div>";
                }
                ?>
                <div class="flex justify-between items-center mt-6 pt-6 border-t">
                  <div class="flex items-center">
                    <i class="fa fa-arrow-left text-sm pr-2"></i>
                    <a href="../agmegrade/user_view_products.php" class="text-md  font-medium text-blue-500">Continue
                      Shopping</a>
                  </div>
                  <div class="flex justify-center items-center">
                    <span class="text-sm font-medium text-gray-500 mr-1">Subtotal:</span>
                    <span class="text-lg font-bold text-gray-800 " x-text="'₹'.concat(' ',order.totalPrice)"> ₹ 0</span>
                  </div>
                </div>
              </div>
              <div class=" p-5 bg-gray-800 rounded overflow-visible">
                <span class="text-xl font-medium text-gray-100 block pb-3">Address Details</span>

                <div class="flex justify-center flex-col pt-3">
                  <label class="text-xs text-gray-200 ">Full Name</label>
                  <?php if ($_SESSION["userName"] != null) $Uname = $_SESSION["userName"];
                  echo
                  "<input type='text' class='focus:outline-none w-full h-6 bg-gray-800 text-white placeholder-gray-300 text-sm border-b border-gray-600 py-4' x-model='formData.name' placeholder='$Uname'>"; ?>
                </div>
                <div class="flex justify-center flex-col pt-3">
                  <label class="text-xs text-gray-200 ">Mobile Number</label>
                  <input type="tel" pattern="[0-9]{10}" class="focus:outline-none w-full h-6 bg-gray-800 text-white placeholder-gray-300 text-sm border-b border-gray-600 py-4" x-model="formData.phoneNumber">
                </div>
                <div class="flex justify-center flex-col pt-3">
                  <label class="text-xs text-gray-200 ">Address lane 1</label>
                  <input type="text" class="focus:outline-none w-full h-6 bg-gray-800 text-white placeholder-gray-300 text-sm border-b border-gray-600 py-4" placeholder="Flat, House no., Building, Company, Apartment" x-model="formData.addressLane1">
                </div>
                <div class="flex justify-center flex-col pt-3">
                  <label class="text-xs text-gray-200 ">Address lane 2</label>
                  <input type="text" class="focus:outline-none w-full h-6 bg-gray-800 text-white placeholder-gray-300 text-sm border-b border-gray-600 py-4" placeholder="Area, Street, Sector, Village" x-model="formData.addressLane2">
                </div>
                <div class="flex justify-center flex-col pt-3">
                  <label class="text-xs text-gray-200 ">City</label>
                  <input type="text" class="focus:outline-none w-full h-6 bg-gray-800 text-white placeholder-gray-300 text-sm border-b border-gray-600 py-4" placeholder="City" x-model="formData.city">
                </div>
                <div class="flex justify-center flex-col pt-3">
                  <label class="text-xs text-gray-200 ">Landmark</label>
                  <input type="text" class="focus:outline-none w-full h-6 bg-gray-800 text-white placeholder-gray-300 text-sm border-b border-gray-600 py-4" placeholder="Eg: near apollo hospital" x-model="formData.landmark">
                </div>
                <div class="grid grid-cols-2 gap-2 pt-2 mb-3">
                  <div class="flex justify-center flex-col pt-3">
                    <label class="text-xs text-gray-200 ">State</label>
                    <select name="state" id="state" class="bg-gray-800 text-white" x-model="formData.state">
                      <option value="Andhra Pradesh">Andhra Pradesh</option>
                      <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                      <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                      <option value="Assam">Assam</option>
                      <option value="Bihar">Bihar</option>
                      <option value="Chandigarh">Chandigarh</option>
                      <option value="Chhattisgarh">Chhattisgarh</option>
                      <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                      <option value="Daman and Diu">Daman and Diu</option>
                      <option value="Delhi">Delhi</option>
                      <option value="Lakshadweep">Lakshadweep</option>
                      <option value="Puducherry">Puducherry</option>
                      <option value="Goa">Goa</option>
                      <option value="Gujarat">Gujarat</option>
                      <option value="Haryana">Haryana</option>
                      <option value="Himachal Pradesh">Himachal Pradesh</option>
                      <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                      <option value="Jharkhand">Jharkhand</option>
                      <option value="Karnataka">Karnataka</option>
                      <option value="Kerala">Kerala</option>
                      <option value="Madhya Pradesh">Madhya Pradesh</option>
                      <option value="Maharashtra">Maharashtra</option>
                      <option value="Manipur">Manipur</option>
                      <option value="Meghalaya">Meghalaya</option>
                      <option value="Mizoram">Mizoram</option>
                      <option value="Nagaland">Nagaland</option>
                      <option value="Odisha">Odisha</option>
                      <option value="Punjab">Punjab</option>
                      <option value="Rajasthan">Rajasthan</option>
                      <option value="Sikkim">Sikkim</option>
                      <option value="Tamil Nadu">Tamil Nadu</option>
                      <option value="Telangana">Telangana</option>
                      <option value="Tripura">Tripura</option>
                      <option value="Uttar Pradesh">Uttar Pradesh</option>
                      <option value="Uttarakhand">Uttarakhand</option>
                      <option value="West Bengal">West Bengal</option>
                    </select>
                  </div>
                  <div class="flex justify-center flex-col pt-3">
                    <label class="text-xs text-gray-200">PinCode</label>
                    <input type="text" pattern="^[1-9]{1}[0-9]{2}\s{0,1}[0-9]{3}$" maxlength="7" class="focus:outline-none w-full h-6 bg-gray-800 text-white placeholder-gray-300 text-sm border-b border-gray-600 py-4" x-model="formData.pincode" placeholder="6 Digit PinCode">
                  </div>
                </div>
                <button class="h-12 w-full bg-blue-500 rounded focus:outline-none text-white hover:bg-blue-600" @click="checkout($event)">Check
                  Out</button>

              </div>
            </div>
          </div>
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
        formData: {
          name: "",
          phoneNumber: "",
          addressLane1: "",
          addressLane2: "",
          city: "",
          landmark: "",
          state: "",
          pincode: ""
        },
        order: {
          pid: [],
          qnt: {},
          totalPrice: 0,
        },
        count: 0,
        openUser: false,
        openMobile: true,
        show: true,
        init() {
          if (localStorage.getItem('pid') != null) {
            this.order.pid = JSON.parse(localStorage.getItem('pid'));
            this.order.totalPrice = JSON.parse(localStorage.getItem('totalPrice'));
            this.count = JSON.parse(localStorage.getItem('count'));
            this.order.pid.forEach(element => {
              this.order.qnt[element] = 1;
            });
          }
        },
        isPhoneNumber(phoneNumber) {
          var re = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/;
          return re.test(phoneNumber);
        },
        isPinCode(pinCode) {
          var re = /^[1-9]{1}[0-9]{2}\s{0,1}[0-9]{3}$/;
          console.log(pinCode);
          console.log(re.test(pinCode));
          return re.test(pinCode);
        },
        updateCart() {
          axios.post('update_cart.php', {
            pid: this.order.pid,
            totalPrice: this.order.totalPrice,
            count: this.count,
          });
        },
        removeFromCart(event) {
          if (this.order.pid.includes(event.target.parentElement.dataset.pid)) {
            pid = event.target.parentElement.dataset.pid;
            this.order.pid.splice(this.order.pid.indexOf(event.target.parentElement.dataset.pid), 1);
            this.order.totalPrice -= parseInt(event.target.parentElement.dataset.price) * document.getElementById(`input-${event.target.parentElement.dataset.pid}`).value;
            delete this.order.qnt[event.target.parentElement.dataset.pid];
            this.count--;
            document.getElementById(event.target.parentElement.dataset.pid).remove();
            localStorage.setItem('pid', JSON.stringify(this.order.pid));
            localStorage.setItem('totalPrice', JSON.stringify(this.order.totalPrice));
            localStorage.setItem('count', JSON.stringify(this.count));
            this.updateCart();
          }
        },
        viewCart() {
          this.updateCart();
          location.replace('view_cart.php');
        },
        checkout() {
          if (
            !this.formData.name.length ||
            !this.formData.addressLane1.length ||
            !this.formData.addressLane2.length ||
            !this.formData.city.length ||
            !this.formData.landmark.length ||
            !this.formData.phoneNumber.length ||
            !this.formData.pincode.length
          ) {
            alert("Please fill out all required field and try again!");
            return false;
          }
          if (!this.isPhoneNumber(this.formData.phoneNumber)) {
            alert("Please enter Correct Phone Number !");
            return false;
          }
          if (!this.isPinCode(this.formData.pincode)) {
            alert("Please enter correct PinCode !");
            return false;
          }
          this.updateCart();
          axios.post('checkout.php', {
            pid: this.order.pid,
            totalPrice: this.order.totalPrice,
            count: this.count,
            qnt: this.order.qnt,
            name: this.formData.name,
            phoneNumber: this.formData.phoneNumber,
            addressLane1: this.formData.addressLane1,
            addressLane2: this.formData.addressLane2,
            city: this.formData.city,
            landmark: this.formData.landmark,
            state: this.formData.state,
            pincode: this.formData.pincode,
          }).then(Response => {
            console.log(Response.data);
            if (Response.data == "success") {
              location.replace('user_orders.php');
            }
          });
        },
        priceUpdatePlus(event) {
          if (document.getElementById(`input-${event.target.parentElement.dataset.pid}`).value < 5) {
            this.order.totalPrice += parseInt(event.target.parentElement.dataset.price);
            document.getElementById(`input-${event.target.parentElement.dataset.pid}`).value++;
            ++this.order.qnt[event.target.parentElement.dataset.pid];
            this.updateCart();
            return;
          }
        },
        priceUpdateMinus(event) {
          if (document.getElementById(`input-${event.target.parentElement.dataset.pid}`).value != 1) {
            this.order.totalPrice -= parseInt(event.target.parentElement.dataset.price);
            document.getElementById(`input-${event.target.parentElement.dataset.pid}`).value--;
            --this.order.qnt[event.target.parentElement.dataset.pid];
            this.updateCart();
            return;
          }
        },
      }
    }
  </script>
</body>

</html>