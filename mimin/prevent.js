//script dibawah ini digunakan untuk mengecek bahwa teks yang diisikan adalah ANGKA saja
function validAngka(a) {
if (!/^[0-9]+$/.test(a.value)) {
    a.value = a.value.substring(0, a.value.length - 1000);
}
}

//script dibawah ini digunakan untuk mengecek bahwa teks yang diisikan adalah HURUF dan SPASI saja
function validHuruf(b) {
if (!/^[a-zA-Z ]+$/.test(b.value)) {
    b.value = b.value.substring(0, b.value.length - 1000);
}
}

//script dibawah ini digunakan untuk mengecek bahwa teks yang diisikan adalah HURUF, SPASI, ANGKA saja
function validHurufAngka(c) {
if (!/^[a-zA-Z0-9 ]+$/.test(c.value)) {
    c.value = c.value.substring(0, c.value.length - 1000);
}
}

//Kode untuk mencegah shorcut keyboard, view source dll
window.addEventListener("keydown",function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){e.preventDefault()}});document.keypress=function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){}return false}

document.onkeydown=function(e){e=e||window.event;if(e.keyCode==123||e.keyCode==18){return false}}