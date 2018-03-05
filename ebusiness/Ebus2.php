<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Payment Details</title>
        
        <!--Styling using both my own CSS and also W3 Schools CSS-->
        <link rel="stylesheet" href="/mystylesheet.css" type="text/css"
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus2_validator.js"></script>
        
        <style>
        
          .content{
            margin-left:30%;
            margin-right:30%;
          }
          
        </style>
        
    </head>
    <body>
        
    <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
      <button class="w3-bar-item w3-button w3-large"
      onclick="w3_close()">Close &times;</button>
      <a href="../homepage.html" class="w3-bar-item w3-button">Homepage</a>
      <a href="../cv/cv_page1.html" class="w3-bar-item w3-button">Curriculum Vitae</a>
      <a href="../interests/sports.html" class="w3-bar-item w3-button">Sports</a>
      <a href="../interests/travel.html" class="w3-bar-item w3-button">Travel</a>
      <a href="../interests/cloud.html" class="w3-bar-item w3-button">Cloud Interests</a>
      <a href="../cloud_services.html" class="w3-bar-item w3-button">Cloud Services</a>
      <a href="../ebusiness/Ebus1.php" class="w3-bar-item w3-button">eBusiness</a>
    </div>
        
    <div id="main">

    <div class="headerstyling">
      <button id="openNav" class="w3-button w3-orange w3-xlarge" onclick="w3_open()">&#9776;</button>
      <div class="w3-container">
        <center><h1>Payment Details</h1></center>
      </div>
    </div>
        
    <script>
      function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
      }
      function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
      }
    </script>
        
        <div class="content">
            <br/>
            <h3 style="text-align:center;">Please enter your payment details</h3>
            <br/>
            
            <form action="Ebus3.php" method="POST">
                <label for="name">Name</label>
                <input style="margin-left:20px" type="text" name="name" placeholder="Name">
                <br/>
                <br/>    
                <label for="email">Email</label>
                <input style="margin-left:22px" type="email" name="email" placeholder="Email address">
                <br/>
                <br/>
                <label for="user_pin">PIN</label>
                <input style="margin-left:37px" type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
                <br/>
                <br/>
                <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
              
            </form>
            
            <br/>
            <button onClick="validateDetails()">Validate</button>
        </div>
        
        <?php
          // set session variables
          $_SESSION["name"] = $_POST["name"];
          $_SESSION["email"] = $_POST["email"];
          $_SESSION["total"] = $_POST["total"];
        ?>
        
    </body>
</html>