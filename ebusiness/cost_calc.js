/* global $ */

function calcSub(){
    
    var argSubTotal;
    
    if(document.getElementById('salesforce').checked) {
      argSubTotal = 100;
    }
    
    else if(document.getElementById('cloud9').checked) {
      argSubTotal = 200;
    }
    
    else if(document.getElementById('aws').checked) {
      argSubTotal = 300;
    }
    
    else {
      argSubTotal = 400;
    }
    
    calcDisVatTotal(argSubTotal);
    
  }
  
function calcDisVatTotal(parmSubTotal){
  
  var discountAmt;
  var vatAmt;
  var totalPrice;
  
  discountAmt = parmSubTotal * 0.05
  vatAmt = (parmSubTotal - discountAmt) * 0.1
  totalPrice = parmSubTotal - discountAmt + vatAmt
  
  display(parmSubTotal, discountAmt, vatAmt, totalPrice)
  
}

function display(parm1, parm2, parm3, parm4){
    
  document.getElementById("subtotal").value = "$" + parm1;
  document.getElementById("discount").value = "$" + parm2;
  document.getElementById("vat").value = "$" + parm3;
  document.getElementById("total").value = "$" + parm4;
  
  enablebtnProceed();

}

function enablebtnProceed(){
  $('#btnProceed').prop('disabled', false);
}
  
function disablebtnProceed() {
  $('#btnProceed').prop('disabled', true);
}
  
function refresh() {
  location.reload(true);
}