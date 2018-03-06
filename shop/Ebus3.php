<?php
// Start the session
session_start()
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Receipt</title>
        <link rel="stylesheet" href="ebusiness.css" type="text/css"/>
    </head>
    <body>
        <h4 class="rheading">Receipt</h4>
        
        <?php  
        // putting in variables 
          $_SESSION["user_name"] = $_POST["user_name"];
          $_SESSION["user_email"] = $_POST["user_email"];
        ?>
        
        <p class="username">
            <?php
            // carrying over username
            echo "Name: " . $_SESSION["user_name"] . ".";
            ?>
        </p>
        
        <p class="email">
            <?php
            // carrying over email
            echo "Email: " . $_SESSION["user_email"] . ".";
            ?>
        </p>
        
        <p class="total">
            <?php
            // carrying over total
            echo "Total: " . $_SESSION["total"] . ".";
            ?>
        </p>
        </br>
        <p class="purchase">
            <strong>Your Purchase has gone true</strong>
        </p>
        </br>
        <p class="thankyou">
            Thank you for your order. Our development team continues to work hard producing high-quality innovative products that will help your company stay on the leading edge in a global market. This fall we look forward to rolling out a new and exciting product line that can further improve your company's productivity. We'll not only keep you apprised of our product launch through our quarterly newsletter and emails, but we can meet prior to the launch to go over specifications with you and your staff and answer any questions.
        </p>
        <div>
            <img src="https://www.brandignity.com/wp-content/uploads/2015/07/thank-you.jpg" height="400"/>
        </div>
        <div class="compphoto">
            <img src="https://fthmb.tqn.com/JABO8noy4VTH8CCLUMWhRI4MjBg=/768x0/filters:no_upscale()/sugarsync-logo-56a6fa113df78cf772913c20.png" height="150"/>
        </div>
        <a href="../menu.html" class="menubtn">Menu</a>
        
    </body>
</html>