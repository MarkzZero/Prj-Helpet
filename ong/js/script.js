/* Cadastro com duas telas */

var formDados = document.querySelector('#area-dados')
var formEndereco = document.querySelector('#area-endereco')


document.querySelector('.btn-avancar')
    .addEventListener('click', () => {
        formDados.style.display = 'none'
        formEndereco.style.display = "flex"
        //btnColor.style.left = "0px"
    })

document.querySelector('.btn-voltar')
    .addEventListener('click', () => {
        formDados.style.display = 'flex'
        formEndereco.style.display = 'none'
        //btnColor.style.left = "0px"
    });

    
