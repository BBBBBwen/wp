function Cadd(){
var price = document.getElementById("Cprice");
    price.value=parseInt(price.value) + 1;
}
function Cminu(){
var price = document.getElementById("Cprice");
    if(price.value <=0){
        price.value=0;
    }else{
    price.value=parseInt(price.value) - 1;
    }
}
function FCadd(){
var price = document.getElementById("FCprice");
    price.value=parseInt(price.value) + 1;
}
function FCminu(){
var price = document.getElementById("FCprice");
    if(price.value <=0){
        price.value=0;
    }else{
    price.value=parseInt(price.value) - 1;
    }
}
function FBadd(){
var price = document.getElementById("FBprice");
    price.value=parseInt(price.value) + 1;
}
function FBminu(){
var price = document.getElementById("FBprice");
    if(price.value <=0){
        price.value=0;
    }else{
    price.value=parseInt(price.value) - 1;
    }
}
