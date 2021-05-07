/*=========================================================
MENU BURGER
==========================================================*/

let buttonElt = document.getElementById('icone-burger');
let iconElt = document.getElementById('icon');

buttonElt.addEventListener('click', function() {
    buttonElt.classList.toggle("open");
    document.querySelector("#h-mobile").classList.toggle("open");
    iconElt.classList.toggle("fa-bars");
    iconElt.classList.toggle("fa-times");
});
