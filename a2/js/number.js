function add(id) {
    var qty = document.getElementById(id);
    qty.value = parseInt(qty.value) + 1;
}

function minu(id) {
    var qty = document.getElementById(id);
    if (qty.value <= 0) {
        qty.value = 0;
    } else {
        qty.value = parseInt(qty.value) - 1;
    }
}
var sibtn = document.getElementById('sibtn');
var subtn = document.getElementById('subtn');
var bgd1 = document.getElementById('bgd1');
var bgd2 = document.getElementById('bgd2');
var close1 = document.getElementById('close1');
var close2 = document.getElementById('close2')
sibtn.onclick = function show() {
    bgd1.style.display = "block";
}
subtn.onclick = function show() {
    bgd2.style.display = "block";
}
close1.onclick = function close() {
    bgd1.style.display = "none";
}
close2.onclick = function close() {
    bgd2.style.display = "none";
}
window.onclick = function close(e) {
    if (e.target == bgd1) {
        bgd1.style.display = "none";
    }
}
window.onclick = function close(e) {
    if (e.target == bgd2) {
        bgd2.style.display = "none";
    }
}
var qty = document.getElementById('Chipsqty');

function check() {
    if (qty.value == 0) {
        qty.focus();
        qty.select();
        return false;
    }
    return true;
}
var cqty = document.getElementById('FishBurgerqty');
function check1() {
    if (cqty.value == 0) {
        cqty.focus();
        cqty.select();
        return false;
    }
    smt.style.color = 'black';
    return true;
}

var fcqty = document.getElementById('Chipsqty');
function check2() {
    if (fcqty.value == 0) {
        fcqty.focus();
        fcqty.select();
        return false;
    }
    smt.style.color = 'black';
    return true;
}