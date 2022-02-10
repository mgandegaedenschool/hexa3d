/* submit the select when it changes */

let formActionAndSubmit = document.querySelector('.espace-pro-form-actions-n-filter');
let selectActionsAndSubmit = document.querySelectorAll('.espace-pro-select-actions-n-filter');

function submitActionAndFilterForm(){
    // Call submit() method on action form
    formActionAndSubmit.submit();
    
}

for (let selectI = 0; selectI < selectActionsAndSubmit.length; selectI++){
    selectActionsAndSubmit[selectI].addEventListener('change', submitActionAndFilterForm);
}
