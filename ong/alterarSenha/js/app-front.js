const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});


// Olhinho de mostrar a senha
// function mostrarSenha(){
//   var inputPass = document.getElementById('senha')
//   var btnShowPass = document.getElementById('botao-senha')

//   if(inputPass.type == 'password'){
//       inputPass.setAttribute('type', 'text')
//       btnShowPass.classList.replace('bi-eye', 'bi-eye-slash-fill')
//   }else{
//       inputPass.setAttribute('type', 'password')
//       btnShowPass.classList.replace('bi-eye-slash-fill', 'bi-eye')
//   }
// }


// COD IMAGE DE PERFIL
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