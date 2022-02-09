/* submit the select when it changes */

let formActionAndSubmit = document.querySelector('.espace-pro-form-actions-n-filter');
let selectActionsAndSubmit = document.querySelector('.espace-pro-select-actions-n-filter');

function submitActionAndFilterForm(){
    if (this.value === 'import'){
        return false;
    }else{
        formActionAndSubmit.submit();
    }
    // Call submit() method on action form
}

for (let selectI = 0; selectI < selectActionsAndSubmit.length; selectI++){
        selectActionsAndSubmit[selectI].addEventListener('change', submitActionAndFilterForm);
}