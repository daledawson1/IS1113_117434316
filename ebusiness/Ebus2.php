<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus2_validator.js"></script>
    </head>
    <body>
        <h4>Please enter your payment details</h4>
        
        
            <form action="Ebus3.php" method="POST">
                    <label for="user_name">Name:</label>
                    <input type="name" id="user_name" placeholder="user name" max length="16"> 
                    <br/>
                    <label for="user_email">Email:</label>
                    <input type="email" id="user_email" placeholder= "user email">
                    <br/>
                    <label for="user_pin">Pin:</label>
                    <input type="password" id="user_pin" placeholder="Card Pin" max lenght="4">
                    <br/>
                    <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
              
            </form>
            
            <br/>
            <button onClick="validateDetails()">Validate</button>
            
        <?php
            // Set session variables
            $_SESSION["total"] = $_POST["total"];
            ?>
    </body>
</html>