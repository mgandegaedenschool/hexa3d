
/**** Ouvrir le form d'invitation après l'importation ****/


let buttonImportInvite = document.querySelector(".button-import-invite");
/* let noimportInvite = document.querySelector(".import-noinvit-close"); */



buttonImportInvite.addEventListener('click', function(){
    displayForm('import-invit');
})

/* noimportInvite.addEventListener('click', function(){
    displayForm('import-invit');
}) */

/**** DRAG AND DROP ****/


//selecting all required elements
const dropArea = document.querySelector(".drag-area"),
    dragText = dropArea.querySelector("header"),
    button = dropArea.querySelector("button"),
    span = dropArea.querySelector("span"),
    input = dropArea.querySelector("#modalFileBrowser");
    // submit = dropArea.querySelector("#modalFileSubmit");
    submit = dropArea.querySelector("#modalFileSubmit");
let file; //this is a global variable and we'll use it inside multiple functions
button.onclick = ()=>{
    event.preventDefault();
    input.click(); //if user click on the button then the input also clicked
}
input.addEventListener("change", function(){

    //getting user select file and [0] this means if user select multiple files then we'll select only the first one
    file = this.files[0];
    dropArea.classList.add("active");
    showFile(file); //calling function
});
//If user Drag File Over DropArea
dropArea.addEventListener("dragover", (event)=>{
    event.preventDefault(); //preventing from default behaviour
    dropArea.classList.add("active");
    dragText.textContent = "Relachez";
});
//If user leave dragged File from DropArea
dropArea.addEventListener("dragleave", (event)=>{
    event.preventDefault();
    dropArea.classList.remove("active");
    dragText.textContent = "Déposez vos fichiers pour les téléverser";
});
//If user drop File on DropArea
dropArea.addEventListener("drop", (event)=>{
    event.preventDefault(); //preventing from default behaviour
    //getting user select file and [0] this means if user select multiple files then we'll select only the first one
    file = event.dataTransfer.files[0];

    showFile(file); //calling function
});
function showFile(file){
    submit.style.display = 'block';
    dragText.style.display = 'none';
    button.style.display = 'none';
    input.style.display = 'none';
    span.style.display = 'none';
   
    dropArea.style.flexDirection = "column-reverse";
    let fileType = file.type; //getting selected file type
    console.log(file.name);
    let validExtensions = ["text/csv"]; //adding some valid csv extensions in array
    if(validExtensions.includes(fileType)){ //if user selected file is a csv file
        let csvName = '<p>' + file.name + '</p>';
        // getElementById("modalFileBrowser").style.display= csvName;
        getElementById("modalFileBrowser").value = file;
        dropArea.innerHTML += csvName;

    }else{
        alert("Ce n'est pas un fichier csv.");
        dropArea.classList.remove("active");
        dragText.textContent = "Déposez vos fichiers pour les téléverser";
    }
}


/**** INVITATION après importation ****/

