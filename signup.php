<?php
include_once 'header.php'
?>
    <section>
      <h1>INSTITUTION INVENTORY MANAGEMENT SYSTEM.</h1>
      <br>
        <h4>Signup Form</h4>
        <form action="includes/signup.inc.php" method="post"> 
        <br>
        <input type="text" name="name" placeholder="Full name..."><br>
        <br>
        <input type="text" name="email" placeholder="E-mail..."><br>
        <br>
        <input type="text" name="uid" placeholder="Username..."><br>
        <br>
        <input type="password" name="pwd" placeholder="Password..."><br>
        <br>
        <input type="password" name="pwd2" placeholder="Repeat password..."><br>
        <br>
        <button type="submit" name="submit">signup</button>
        </form>
        
       
        <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
           echo "<p class='errormsg'>Please fill out all the fields!</p>";
        }
        elseif ($_GET["error"] == "invaliduid") {
           echo "<p>Invalid Username!</p>";
        }
        elseif ($_GET["error"] == "invalidemail") {
            echo "<p>Invalid Email Address!</p>";
         }
         elseif ($_GET["error"] == "passwordsdontmatch") {
            echo "<p>Passwords do not match! </p>";
         }
         elseif ($_GET["error"] == "usernametaken") {
            echo "<p>That username has already been taken! </p>";
         }
         elseif ($_GET["error"] == "emailexists") {
            echo "<p>That email already exists in our databases! </p>";
         }
         elseif ($_GET["error"] == "stmtfailed") {
            echo "<p>Something went wrong, Please try again! </p>";
         }
         elseif ($_GET["error"] == "none") {
            echo "<p>You have successfully signed up! </p>";
         }
    }

    ?>


    </section>

 
    
    <?php
include_once 'footer.php'
?>