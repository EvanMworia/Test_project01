<?php
include_once 'header.php'
?>
<section>
    <h1>ADD NEW SUPPLIER</h1>
    <br>
        <h4>FILL ALL FIELDS TO ADD NEW SUPPIER</h4>
        <form action="includes/suppliers.inc.php" method="post"> 
        <br>
        <input type="text" name="SupplierName" placeholder="Supplier Name..."><br>
        <br>
        <input type="text" name="Product" placeholder="Product Supplied..."><br>
        <br>
        <input type="text" name="Contact" placeholder="Supplier Contact..."><br>
        <br>
        <input type="text" name="Email" placeholder="Supplier Email..."><br>
        <br>
        <button type="submit" name="submit" >ADD SUPPLIER</button>
        </form>
</section> 
<?php
include_once 'footer.php'
?>

