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