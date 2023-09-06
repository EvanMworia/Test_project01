
<?php
include_once 'header.php'
?>



              

<section class="main">

    <div class="main-top">
        <h1>DASHBOARD</h1>
        <i class="fas fa-user-cog"></i>
    </div>
    <div class="main-skills">
        <div class="card">
            <i class="fas fa-truck"></i>
            <h3>Suppliers</h3>
            <p>ENTER VALUE HERE</p>
            <button>See Suppliers</button>
        </div>
        <div class="card">
            <i class="fas fa-shopping-cart"></i>
            <h3>Orders</h3>
             <p>ENTER VALUE HERE</p>
           
            <button>Go To Orders</button>
          
        </div>
        <div class="card">
            <i class="fas fa-barcode"></i>
            <h3>Scan Barcode</h3>
             <p>ENTER VALUE HERE</p>
            <button>Barcodes data</button>
        </div>
        <div class="card">
            <i class="fas fa-tasks"></i>
            <h3>Asset Status</h3>
             <p>ENTER VALUE HERE</p>
            <button>See Status</button>
        </div>
    </div>
</section>

   
   

<?php
include_once 'footer.php'
?>
 <?php
    if (isset($_SESSION["useruid"])) {
    echo "Hello there USER: " .  $_SESSION["useruid"] .  " you are logged in" ;
    '<br>';
    
   } 
   ?>