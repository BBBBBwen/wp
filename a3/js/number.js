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

function add(id) {
    var qty = document.getElementById(id);
    qty.value = parseInt(qty.value) + 1;
    qty.focus();
}

function minu(id) {
    var qty = document.getElementById(id);
    if (qty.value <= 0) {
        qty.value = 0;
    } else {
        qty.value = parseInt(qty.value) - 1;
    }
    qty.focus();
}
var qty = document.getElementsByName('qty');
var smt = document.getElementsByClassName('btn1');
for (i = 0; i < smt.length; i++) {
    smt[i].disabled = true;
}
qty[0].onchange = function () {
    if (qty[0].value > 0) {
        for (i = 0; i < smt.length; i++) {
            smt[i].style.color = "black";
            smt[i].disabled = false;
        }
    } else if (qty[0].value <= 0 || isNaN(parseInt(qty))) {
        for (i = 0; i < smt.length; i++) {
            smt[i].style.color = "grey";
            smt[i].disabled = true;
        }
    }
}
qty[0].onfocus = function () {
    if (qty[0].value > 0) {
        for (i = 0; i < smt.length; i++) {
            smt[i].style.color = "black";
            smt[i].disabled = false;
        }
    } else if (qty[0].value <= 0 || isNaN(parseInt(qty))) {
        for (i = 0; i < smt.length; i++) {
            smt[i].style.color = "grey";
            smt[i].disabled = true;
        }
    }
}

function check() {
    var qty = document.getElementsByName('qty');
    var qtyv = parseInt(qty.value);
    alert(isNaN(qtyv));
    if (isNaN(qtyv) || qtyv <= 0) {
        qty[0].focus();
        qty[0].select();
        return false;
    }
    return true;
}
var loged = document.getElementById('logIn');
function loged(){
    sibtn.style.display = 'none';
    loged.style.display = 'none';
    subtn.style.display = 'none';
}