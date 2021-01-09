<?php
session_start();
include('database.inc.php');
include('function.inc.php');
include('constant.inc.php');
$totalPrice = 0;
$cartArr = getUserFullCart();
$totalCartDish = count($cartArr);
foreach ($cartArr as $list) {
    $totalPrice = $totalPrice + ($list['qty'] * $list['price']);
}

// prx($cartArr);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- google fonts -->
    <link rel="stylesheet" href="assets/fonts/font.css">
    <!-- Fontawesome js -->
    <link rel="stylesheet" href="assets/font-awesome/all.css">
    <!-- custom style css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <header>
        <nav class="navbar fxd-navbar" id="navbar">
            <div class="container">
                <div class="brand-and-toggler">
                    <a href="index.html" class="navbar-brand">
                        <img src="assets/images/logo.jpeg" alt="logo">

                    </a>
                    <button type="button" id="navbar-toggler">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
                <div class="navbar-collapse">
                    <ul class="navbar-nav1">
                        <li>
                            <a href="index.php">home</a>
                        </li>

                        <li>
                            <a href="index.php#contact">Contact Us</a>
                        </li>
                        <li>
                            <a href="menu.php">menu</a>
                        </li>
                        <?php
                        if (isset($_SESSION['FOOD_USER_NAME'])) {
                        ?>

                            <li><a href="logout.php">Logout</a></li>
                        <?php } ?>
                        <div>
                            <?php
                            if (!isset($_SESSION['FOOD_USER_NAME'])) {
                            ?>

                                <li>
                                    <a href="cart.php">cart</a>
                                </li>
                                <li>
                                    <a href="login.php">Login/Register</a>
                                </li>
                            <?php
                            }
                            ?>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
        <?php
        if (isset($_SESSION['FOOD_USER_NAME'])) {
        ?>
            <nav class="navbar navbar-user">
                <div class="container">

                    <div class="navbar-expanded">
                        <ul class="navbar-nav usernav">
                            <div class="welcomeuser" >
                            <li class="welcomeuser"><?php echo "Welcome " . $_SESSION['FOOD_USER_NAME'] . "!"; ?>
                            </div>
                            <li><i class="fa fa-user" aria-hidden="true"></i> <a href="<">Profile </a></li>
                            <li><a href="order_history.php">Order History</a></li>
                            <li>
                                <a href="cart.php">My cart (<span id="mycart"><?php echo $totalCartDish ?></span>)</a> <br>

                                <div class="price-display">Total: <span id="totalPrice"><?php echo $totalPrice . "/-" ?> </span></div>
                                </li>
                           </li>
                        </ul>
                    </div>
                </div>
            </nav>
        <?php } ?>
        <!-- end of navbar -->
    </header>
    <!-- end of header -->
