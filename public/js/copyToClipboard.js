let icons = document.querySelectorAll('.input_copy .icon');

for (let iconI = 0; iconI < icons.length; iconI++){
    icons[iconI].addEventListener('click', function(){
        /* Get the text field */
        let inputContainers = document.querySelectorAll('.input_copy');
        let inputContainer = inputContainers[iconI];
        let copyTexts = document.querySelectorAll('.linkInput');
        let copyText = copyTexts[iconI];
        /* Select the text field */
        copyText.select();
        copyText.setSelectionRange(0, 99999); /* For mobile devices */
        /* Copy the text inside the text field */
        navigator.clipboard.writeText(copyText.value);
        setTimeout(function () {
            inputContainer.classList.add('flashBG');
        });
        inputContainer.classList.remove('flashBG');
    });
}



