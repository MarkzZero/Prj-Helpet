/* Mostrar senha */
function mostrarSenha(){
    var inputPass = document.getElementById('senha')
    var btnShowPass = document.getElementById('btn-senha')

    if(inputPass.type == 'password'){
        inputPass.setAttribute('type', 'text')
        btnShowPass.classList.replace('fi-bs-eye', 'fi-bs-eye-crossed')
    }else{
        inputPass.setAttribute('type', 'password')
        btnShowPass.classList.replace('fi-bs-eye-crossed', 'fi-bs-eye')
    }
}