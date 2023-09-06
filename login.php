<?php
include_once 'header.php'
?>
    <section>
    <h1>INSTITUTION INVENTORY MANAGEMENT SYSTEM.</h1>
    <br>
        <h4>Log in</h4>
        <form action="includes/login.inc.php" method="post"> 
        <br>
        <input type="text" name="uid" required placeholder="Username/E-mail..."><br>
        <br>
        <input type="password" name="pwd" required placeholder="Password..."><br>
        <br>
        <button type="submit" name="submit" >Login</button>
        </form>

        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
               echo "<p>Please fill out all the fields!</p>";
            }
            elseif ($_GET["error"] == "wrongusername") {
               echo "<p>Wrong Username!</p>";
            }
            elseif ($_GET["error"] == "wrongpassword") {
                echo "<p>Wrong Password!</p>";
             }
        }

        ?>
    </section>
    
    <?php
include_once 'footer.php'
?>