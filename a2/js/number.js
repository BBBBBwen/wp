function add(id){
    console.log(id);
var qty = document.getElementById(id);
    qty.value=parseInt(qty.value) + 1;
}
function minu(id){
var qty = document.getElementById(id);
    if(qty.value <=0){
        qty.value=0;
    }else{
    qty.value=parseInt(qty.value) - 1;
    }
}
function display(){
   login = display;
}