'use static'
let photo = document.getElementById('imgPhoto-login');
let file = document.getElementById('flImage-login');

photo.addEventListener("click", () => {
    file.click();   
});

file.addEventListener('change', (event) => {
    
   if(file.files.length <= 0){
    return;
   }

    let reader = new FileReader()

    reader.onload = () =>{
        photo.src = reader.result;
    }

    reader.readAsDataURL(file.files[0]);
});

//Mostrar senha
function mostrarSenha(){
    var inputPass = document.getElementById('senha')
    var btnShowPass = document.getElementById('btn-senha')

    if(inputPass.type == 'password'){
        inputPass.setAttribute('type', 'text')
        btnShowPass.classList.replace('fi-rr-eye', 'fi-rr-eye-crossed')
    }else{
        inputPass.setAttribute('type', 'password')
        btnShowPass.classList.replace('fi-rr-eye-crossed', 'fi-rr-eye')
    }
}

function mostrarConfSenha(){
    var inputPass = document.getElementById('conf-senha')
    var btnShowPass = document.getElementById('btn-conf-senha')

    if(inputPass.type == 'password'){
        inputPass.setAttribute('type', 'text')
        btnShowPass.classList.replace('fi-rr-eye', 'fi-rr-eye-crossed')
    }else{
        inputPass.setAttribute('type', 'password')
        btnShowPass.classList.replace('fi-rr-eye-crossed', 'fi-rr-eye')
    }
}
