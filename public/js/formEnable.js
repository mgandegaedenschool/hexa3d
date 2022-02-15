

/* display others inputs when select changes */
let hidden = document.querySelectorAll('.hidden-select-container');
let select = document.querySelectorAll('.dynamic-select');

for (let k = 0; k < select.length; k++) {
    select[k].addEventListener('change', function(){
        for (let i = 0; i < hidden.length; i++){
            hidden[i].classList.toggle('hidden');
        }
    });
}

/* display the users info when the eye is clicked and hide it when the cross is clicked */
let linkEye = document.querySelector(".icon-eye-view");

linkEye.addEventListener('click', function (){
    let element = document.querySelector(".disabled-element-eye");
    element.classList.toggle("height-none");
    element.classList.toggle("height-yes");
    linkEye.classList.toggle("far");
    linkEye.classList.toggle("fas");
    linkEye.classList.toggle("fa-times");
    linkEye.classList.toggle("fa-eye");
});




