/* global $ */

function validateDetails(){
    
var pin;
    
    pin = document.getElementById("user_pin").value;
    
    if (pin == ""){
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

var email;
    
    email = document.getElementById("user_email").value;
    
    if (email == ""){
        alert("Please enter your Email ID");
    }
    else if (validateEmail(email) == false){
        alert("Please enter a valid Email ID");
    }
    else{
        enablebtnPurchase();
    }

    function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
    }
    function enablebtnPurchase(){
    $('#btnPurchase').prop('disabled', false);
    }

    function disablebtnPurchase() {
    $('#btnPurchase').prop('disabled', true);
    }

var name;
    
    name= document.getElementById("user_name").value;
    
    if (name == ""){
        alert("Please enter your name");
    }
    else if (String(name).length > 16){
        alert("Please make sure your name is accurte");
    }
    else{
        enablebtnPurchase();
    }
    function enablebtnPurchase(){
    $('#btnPurchase').prop('disabled', false);
    }

    function disablebtnPurchase() {
    $('#btnPurchase').prop('disabled', true);
    }