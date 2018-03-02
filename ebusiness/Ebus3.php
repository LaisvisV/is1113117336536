<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Receipt</title>
    </head>
    <body>
        <h4>Receipt</h4>
                
                <?php
            //echo session variables
            $_SESSION["name"] = $_POST["name"];
            $_SESSION["email"] = $_POST["email"];
            ?>
            
                    <?php
                     //echo session variables that were set on previous page
                    echo "Name: " . $_SESSION["name"];
                    ?>
                    
                    <br/>
                    <br/>
                    
                    <?php
                    //echo session variables that were set on previous page
                    echo "Email: " . $_SESSION["email"];
                    ?>
                    
                    <br/>
                    <br/>
                    
                    <?php
                    //echo session variables that were set on previous page
                    echo "Total Price: " . $_SESSION["total"];
                    ?>
    </body>
</html>