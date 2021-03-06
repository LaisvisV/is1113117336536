<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="utf-8"/>
        <title>Select Product</title>
        
        <!--Styling using both my own CSS and also W3 Schools CSS-->
        <link rel="stylesheet" href="/mystylesheet.css" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="cost_calc.js"></script>
        
        <style>
          .content{
            margin-left:30%;
            margin-right:30%;
          }
          
          .menumargin{
            margin-left: 5%;
          }
          
          #btnProceed{
            background-color: rgb(76, 175, 80);
            color: white;
            border: 2px solid white;
            padding: 10px;
            border-radius: 8px;
          }
          
          #btnCalculate{
            background-color: rgb(253, 192, 47);
            color: white;
            border: 2px solid white;
            padding: 10px;
            border-radius: 8px;
          }
          
          #btnClear{
            background-color: white;
            color: rgb(255, 61, 64);
            border: 2px solid rgb(255, 61, 64);
            padding: 10px;
            border-radius: 8px;
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
        
    <div class="headerstyling">
      <button id="openNav" class="w3-button w3-orange w3-xlarge" onclick="w3_open()">&#9776;</button>
      <div class="w3-container">
        <img src=../media/larryscloudservices.png width=15% style="margin-left: auto; margin-right: auto; display: block" alt="Larry's Cloud Services">
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
          
            <h2 style="text-align: center;">Select a Product</h2>
            
            <br>

            <form method="POST" action="Ebus2.php">
              <div style="margin-left:25%">
              <table style="width:80%;">
                <tr>
                  <td>
              <label for="salesforce" style="text-align:center">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                <img src="https://upload.wikimedia.org/wikipedia/en/thumb/8/83/Salesforce_logo.svg/1200px-Salesforce_logo.svg.png" width=70% alt="Salesforce">
                SalesForce @ $100
              </label>
                  </td>
                  <td>
              <label for="aws" style="text-align:center">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                <img src="https://a0.awsstatic.com/main/images/logos/aws_logo_smile_1200x630.png" width=70% alt="Amazon Web Services">
                Amazon Web Services @ $300
              </label>
                 </td>
              </tr>
              <tr>
                <td>
              <label for="cloud9" style="text-align:center">
                <input type="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/>
                <img src="https://static.c9.io/nc-3.1.4109-2ffb85e2-wf/static/plugins/c9.profile/static/images/cloud9-logo.svg" width=70% alt="Cloud9">
                Cloud9 @ $200
              </label>
                </td>
                <td>
              <label for="gmail" style="text-align:center">
                <input type="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
                <img style="margin-left:5%" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/45/New_Logo_Gmail.svg/2000px-New_Logo_Gmail.svg.png" width=50% alt="Gmail">
                <br>
                Gmail @ $400
              </label>
                </td>
              </table>
              </div>

              <br>
              
              <label for="subtotal">
                Sub Total
                <input style="margin-left:50px" type="text" id="subtotal" value="$0.00" readonly/>
              </label>
              
              <br>
              
              <label for="discount">
                Discount (5%)
                <input style="margin-left:11px" type="text" id="discount" value="$0.00" readonly/>
              </label>
              
              <br>
              
              <label for="vat">
                VAT (10%)
                <input style="margin-left:38px" type="text" id="vat" value="$0.00" readonly/>
              </label>
              
              <br>
              
              <label for="total">
                <strong>Total</strong>
                <input style="margin-left:78px" type="text" id="total" name="total" value="$0.00" readonly/>
              </label>
            
            <br>
            <br>
            <br>

            <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
            </form>
            <button id="btnCalculate" onClick="calcSub()">Calculate Cost</button>
            <button id="btnClear" onClick="refresh()" style="float:right; position:relative;">Clear Choice</button>
      </div>
    </body>
</html>