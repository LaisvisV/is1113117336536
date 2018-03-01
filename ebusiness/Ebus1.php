<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
        <!--Styling using both my own CSS and also W3 Schools CSS-->
        <link rel="stylesheet" href="/mystylesheet.css" type="text/css"
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
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
        <center><h1>eBusiness</h1></center>
      </div>
    </div>
        
    <script>
    function w3_open() {
      document.getElementById("main").style.marginLeft = "25%";
      document.getElementById("mySidebar").style.width = "25%";
      document.getElementById("mySidebar").style.display = "block";
      document.getElementById("openNav").style.display = 'none';
    }
    function w3_close() {
      document.getElementById("main").style.marginLeft = "0%";
      document.getElementById("mySidebar").style.display = "none";
      document.getElementById("openNav").style.display = "inline-block";
    }
    </script>
        <div class="content">
          
            <h2 style="text-align: center;">Select a Product</h2>
            
            <br/>

            <form method="POST" action="Ebus2.php">
              <div style="margin-left:25%">
              <table style="width:80%;">
                <tr>
                  <td>
              <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                <img src="https://upload.wikimedia.org/wikipedia/en/thumb/8/83/Salesforce_logo.svg/1200px-Salesforce_logo.svg.png" width=70%>
                <h6 style="text-align:bottom;">SalesForce @ $100</h6>
              </label>
                  </td>
                  <td>
              <label for="aws">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                <img src="https://a0.awsstatic.com/main/images/logos/aws_logo_smile_1200x630.png" width=70%>
                <h6 style="text-align:bottom;">Amazon Web Services @ $300</h6>
              </label>
                 </td>
              </tr>
              <tr>
                <td>
              <label for="cloud9">
                <input type="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/>
                <img src="https://static.c9.io/nc-3.1.4109-2ffb85e2-wf/static/plugins/c9.profile/static/images/cloud9-logo.svg" width=70%>
                <h6 style="text-align:bottom;">Cloud9 @ $200</h6>
              </label>
                </td>
                <td>
              <label for="gmail">
                <input type="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
                <img style="margin-left:5%" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/45/New_Logo_Gmail.svg/2000px-New_Logo_Gmail.svg.png" width=50%>
                <h6 style="text-align:bottom; margin-left:40px;">Gmail @ $400</h6>
              </label>
                </td>
              </table>
              </div>

              <br/>
              
              <label for="subtotal">
                Sub Total
                <input style="margin-left:50px" type="text" id="subtotal" value="$0.00" readonly/>
              </label>
              
              <br/>
              
              <label for="discount">
                Discount (5%)
                <input style="margin-left:11px" type="text" id="discount" value="$0.00" readonly/>
              </label>
              
              <br/>
              
              <label for="vat">
                VAT (10%)
                <input style="margin-left:38px" type="text" id="vat" value="$0.00" readonly/>
              </label>
              
              <br/>
              
              <label for="total">
                <strong>Total</strong>
                <input style="margin-left:78px" type="text" id="total" value="$0.00" readonly/>
              </label>
            
            <br/>
            <br/>
            <br/>

            
            <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
            </form>
            <button onClick="calcSub()">Calculate Cost</button>
            <button onClick="refresh()" style="float:right; position:relative;">Clear Choice</button>
      </div>
    </body>
</html>