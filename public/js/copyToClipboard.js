
let icon = document.querySelector('.input_copy .icon');
icon.addEventListener('click', copyToClipboard);

function copyToClipboard() {
    /* Get the text field */
    let inputContainer = document.querySelector('.input_copy');
    let copyText = document.getElementById("linkInput");
    console.log(copyText);
    /* Select the text field */
    copyText.select();
    copyText.setSelectionRange(0, 99999); /* For mobile devices */
    /* Copy the text inside the text field */
    navigator.clipboard.writeText(copyText.value);
    setTimeout(function () {
        inputContainer.classList.add('flashBG');
    });
    inputContainer.classList.remove('flashBG');

}