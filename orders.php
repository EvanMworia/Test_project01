<?php
include_once 'header.php'
?>
<section>
    <h1>MAKE ORDERS</h1>
    <br>
        <h4>FILL ALL FIELDS TO MAKE AN ORDER</h4>
        <form action="includes/orders.inc.php" method="post"> 
        <br>
        <input type="text" name="SupplierNameo" placeholder="Supplier Name..."><br>
        <br>
        <input type="text" name="Producto" placeholder="Product Orderd..."><br>
        <br>
        <input type="text" name="OrderId" placeholder="OrderId..."><br>
        <br>
        <input type="text" name="Quantity" placeholder="Quantity..."><br>
        <br>
        <button type="submit" name="submit" >SUBMIT ORDER</button>
        </form>

        <?php
    if (isset($_GET["error"])) {
       if ($_GET["error"]==false) {
        # code...
       }
    }

        ?>
</section> 
<?php
include_once 'footer.php'
?>