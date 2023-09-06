<?php
@include 'dbh.inc.php';
if(isset($_POST['submit'])){

   $SupplierName = mysqli_real_escape_string($conn, $_POST['SupplierName']);
   $Product = mysqli_real_escape_string($conn, $_POST['Product']);
   $Contact = mysqli_real_escape_string($conn, $_POST['Contact']);
   $Email  = mysqli_real_escape_string($conn, $_POST['Email']);


  
    $insert = "INSERT INTO suppliers(SupplierName, Product, SupplierContact, Email) VALUES('$SupplierName','$Product','$Contact','$Email')";
    mysqli_query($conn, $insert);
    header("location: ../suppliers.php?supplieradded");
    exit();
   };


?>