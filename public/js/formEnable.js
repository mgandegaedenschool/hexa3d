/*
let radioSal = document.querySelectorAll(".radioSal");
let radioSch = document.querySelectorAll(".radioSch");

function displayForm(param) {
    let elements = document.querySelectorAll(".disabled-element-"+param);
    for (let i = 0; i < elements.length; i++) {
        elements[i].classList.toggle("hidden");
    }
}
for (let j = 0; j < radioSal.length; j++) {
    radioSal[j].addEventListener('change', function (){
        displayForm('sal');
    });
}
for (let j = 0; j < radioSch.length; j++) {
    radioSch[j].addEventListener('change', function (){
        displayForm('sch');
    });
}
*/
let hiddenSco = document.querySelectorAll('.hidden-select-container');
let hiddenSal = document.querySelectorAll('.hidden-select-container');

let selectSal = document.getElementById('salarized');
let selectSco = document.getElementById('scolarized');
selectSco.addEventListener('change', function(){
        for (let i = 0; i < hiddenSco.length; i++){
            hiddenSco[i].classList.toggle('hidden-sco');
        }
});
selectSal.addEventListener('change', function(){
    for (let j = 0; j < hiddenSal.length; j++){
        hiddenSal[j].classList.toggle('hidden-sal');
    }
});

let linkEye = document.querySelector(".fa-eye");

linkEye.addEventListener('click', function (){
    let element = document.querySelector(".disabled-element-eye");
    element.classList.toggle("height-none");
    element.classList.toggle("height-yes");
    linkEye.classList.toggle("far");
    linkEye.classList.toggle("fas");
    linkEye.classList.toggle("fa-times");
    linkEye.classList.toggle("fa-eye");
});
