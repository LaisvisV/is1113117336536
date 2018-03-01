/* global $ */

function validateDetails(){
    
    var name;
    var email;
    var pin;
    
    name = document.getElementById("name").value;
    email = document.getElementById("email").value;
    pin = document.getElementById("user_pin").value;
    
    if (name == ""){
        alert("Please enter your name")
    }
    else if (String(pin).length < 2){
        alert("Please enter a valid name")
    }
    else if (email == ""){
        alert("Please enter your Email address")
    }
    else if (pin == ""){
        alert("Please enter your PIN");
    }
    else if (String(pin).length < 4){
        alert("Please make sure your PIN is accurate");
    }
    else{
        enablebtnPurchase();
    }
    
}

function enablebtnPurchase(){
    $('#btnPurchase').prop('disabled', false);
}

function disablebtnPurchase() {
    $('#btnPurchase').prop('disabled', true);
}