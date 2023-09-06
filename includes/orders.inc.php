<?php
@include 'dbh.inc.php';
if(isset($_POST['submit'])){

   $SupplierNameo = mysqli_real_escape_string($conn, $_POST['SupplierNameo']);
   $Producto = mysqli_real_escape_string($conn, $_POST['Producto']);
   $OrderId = mysqli_real_escape_string($conn, $_POST['OrderId']);
   $Quantity  = mysqli_real_escape_string($conn, $_POST['Quantity']);


  
    $insert = "INSERT INTO orders(SupplierName, Product, OrderId, Quantity) VALUES('$SupplierNameo','$Producto','$OrderId','$Quantity')";
    mysqli_query($conn, $insert);
    header("location: ../orders.php?ordersubmitted");
    exit();
   };


?>