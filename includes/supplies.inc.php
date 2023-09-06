<?php
@include 'dbh.inc.php';
if(isset($_POST['submit'])){

   $SupplyId = mysqli_real_escape_string($conn, $_POST['SupplyId']);
   $SupplierName = mysqli_real_escape_string($conn, $_POST['SupplierName']);
   $Product = mysqli_real_escape_string($conn, $_POST['Product']);
   $Contact  = mysqli_real_escape_string($conn, $_POST['Contact']);
   $OrderId  = mysqli_real_escape_string($conn, $_POST['OrderId']);



  
    $insert = "INSERT INTO supplies(SupplyId, SupplierName, Product, SupplierContact, OrderId) 
    VALUES('$SupplyId','$SupplierName','$Product','$Contact', '$OrderId')";
    mysqli_query($conn, $insert);
    header("location: ../supplies.php?suppliesrecorded");
    exit();
   };


?>
