<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Receipt</title>
        
        <!--Styling using both my own CSS and also W3 Schools CSS-->
        <link rel="stylesheet" href="/mystylesheet.css" type="text/css"
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href='https://fonts.googleapis.com/css?family=Cedarville Cursive' rel='stylesheet'>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
        <style>
        
          .content{
            margin-left:30%;
            margin-right:30%;
          }
          
          .menumargin{
              margin-left: 5%;
          }
          
        </style>
        
    </head>
    <body>
        
    <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none; z-index:10" id="mySidebar">
      <button class="w3-bar-item w3-button w3-large"
      onclick="w3_close()">Close &times;</button>
      <strong class="menumargin">Personal</strong>
      <a href="../homepage.html" class="w3-bar-item w3-button">Homepage</a>
      <a href="../cv/cv_page1.html" class="w3-bar-item w3-button">Curriculum Vitae</a>
      <strong class="menumargin">Interests</strong>
      <a href="../interests/sports.html" class="w3-bar-item w3-button">Sports</a>
      <a href="../interests/travel.html" class="w3-bar-item w3-button">Travel</a>
      <a href="../interests/cloud.html" class="w3-bar-item w3-button">Cloud</a>
      <strong class="menumargin">eBusiness</strong>
      <a href="../cloud_services.html" class="w3-bar-item w3-button">Cloud Services</a>
      <a href="../ebusiness/Ebus1.php" class="w3-bar-item w3-button">Products</a>
    </div>
        
    <div id="main">


    <div class="headerstyling">
      <button id="openNav" class="w3-button w3-orange w3-xlarge" onclick="w3_open()">&#9776;</button>
      <div class="w3-container">
        <img src=../media/larryscloudservices.png width=15% style="margin-left: auto; margin-right: auto; display: block">
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
        <h2 style="text-align:center;">Purchase Receipt</h2>
                
        <?php
            //echo session variables
            $_SESSION["name"] = $_POST["name"];
            $_SESSION["email"] = $_POST["email"];
        ?>
        <br/>
        <br/>
        
        <strong>Name: </strong>
        <?php
            //echo session variables that were set on previous page
            echo $_SESSION["name"];
        ?>
                    
        <br/>
        <br/>
        
        <strong>Email Address: </strong>            
        <?php
            //echo session variables that were set on previous page
            echo $_SESSION["email"];
        ?>
                    
        <br/>
        <br/>
        
        <strong>Total Price: </strong>          
        <?php
            //echo session variables that were set on previous page
            echo $_SESSION["total"];
        ?>
        
        <br/>
        <br/>
        <h3 style="font-family: 'Cedarville Cursive'; font-size: 80px; margin-left:15%;">Thank You!</h3>
        <h3 style="margin-left:30%;">for your business</h3>
        </div>
    </body>
</html>