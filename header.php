<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INVENTORY|MANAGEMENT|SYSTEM</title>
    <link rel="stylesheet" href="firstttrial.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <div class="container">
        <nav>
            <ul>

            <?php
              if (isset($_SESSION["useruid"])) {
                echo "  <li>
                <a href='#' class='logo'>
                    <img src='/css/logo2.png' alt='My Logo'>
                    <span class='nav-item'>Inventory</span>
                </a>
            </li> ";
                echo " <li>
                <a href='home.php'>
                    <i class='fas fa-home'></i>
                    <span class='nav-item'>Home</span>
                </a>
            </li> ";
                echo "  <li>
                <a href='suppliers.php'>
                    <i class='fas fa-truck'></i>
                    <span class='nav-item'>Suppliers</span></a>
            </li>";
            echo "  <li>
            <a href='supplies.php'>
                <i class='fas fa-shopping-basket'></i>
                <span class='nav-item'>Supplies</span></a>
        </li>";

                echo " <li>
                <a href='orders.php'>
                    <i class='fas fa-shopping-cart'></i>
                    <span class='nav-item'>Orders</span></a>
            </li>";
                echo "<li>
                <a href=''>
                    <i class='fas fa-barcode'></i>
                    <span class='nav-item'>Scan Barcode</span></a>
            </li> ";
                echo " <li>
                <a href=''>
                    <i class='fas fa-tasks'></i>
                    <span class='nav-item'>Asset Status</span></a>
            </li>";
                echo " <li>
                <a href='donations.php'>
                    <i class='fas fa-file'></i>
                    <span class='nav-item'>Reports</span></a>
            </li>";
                echo " <li>
                <a href='donate_form.php'>
                    <i class='fas fa-cog'></i>
                    <span class='nav-item'>Settings</span></a>
            </li>";
                echo "  <li>
                <a href=''>
                    <i class='fas fa-question-circle'></i>
                    <span class='nav-item'>Help</span></a>
            </li>";
            
                echo "<li>
                <a href='includes/logout.inc.php' class='logout'>
                    <i class='fas fa-sign-out-alt'></i>
                    <span class='nav-item'>Logout</span></a>
            </li>";
              } else {
                echo " <li>
                <a href='signup.php'>
                    <i class='fas fa-user-plus'></i>
                    <span class='nav-item'>Sign Up</span></a>
            </li>";
                echo "<li>
                <a href='login.php'>
                    <i class='fas fa-sign-in-alt'></i>
                    <span class='nav-item'>Login</span></a>
            </li>";
              }
   
          ?>
            
        </ul>
  </nav>
   
  