<?php
include_once 'header.php'
?>
<section>
    <h1>RECEIVE SUPPLIES</h1>
    <br>
        <h4>FILL ALL FIELDS TO RECORD SUPPLIES DELIVERED </h4>
        <form action="includes/supplies.inc.php" method="post"> 
        <br>
        <input type="text" name="SupplyId" placeholder="Supply Id..."><br>
        <br>
        <input type="text" name="SupplierName" placeholder="Supplier Name..."><br>
        <br>
        <input type="text" name="Product" placeholder="Product Supplied..."><br>
        <br>
        <input type="text" name="Contact" placeholder="Supplier Contact..."><br>
        <br>
        <input type="text" name="OrderId" placeholder="Order Id..."><br>
        <br>
        <button type="submit" name="submit" >RECEIVE SUPPLIES</button>
        </form>
</section> 
<?php
include_once 'footer.php'
?>

