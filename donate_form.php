<?php
@include 'dbh.inc.php';
if(isset($_POST['submit'])){

   $SupplierName = mysqli_real_escape_string($conn, $_POST['SupplierName']);
   $Product = mysqli_real_escape_string($conn, $_POST['Product']);
   $Contact = mysqli_real_escape_string($conn, $_POST['Contact']);
   $Email  = mysqli_real_escape_string($conn, $_POST['Email']);


  
    $insert = "INSERT INTO suppliers(SupplierName, Product, SupplierContact, Email) VALUES('$SupplierName','$Product','$Contact','$Email')";
    mysqli_query($conn, $insert);
    header("location: ../suppliers.php?error=stmtfailed");
    exit();
   };


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Donate</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style4.css">
   <style>
  <?php include "style4.css" ?>
  </style>


</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>Donate</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
            
         };
         
      };
      ?>
      <input type="text" name="name" required placeholder="enter your name">
      <input type="email" name="email" required placeholder="enter your email">
      <input type="contact" name="contact" required placeholder="enter your contact">
      <input type="Amount" name="Amount" required placeholder="Please enter the Amount you would like to Donate">
      <input type="submit" name="submit" value="DONATE" class="form-btn">
      <p>Thank You, we are commited to ensuring you donation is utelised propery <a href="index.php">Home</a></p>
   </form>

</div>

</body>

</html>