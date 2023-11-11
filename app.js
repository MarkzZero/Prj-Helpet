/* Modal de Sucesso */
const formulario = document.querySelector('#form');

formulario.addEventListener('submit', function(e){
    e.preventDefault();
    e.stopPropagation()
    email();
});

function email(){
    const datos = new FormData(formulario);
    fetch('./forms/contato.php',{
        method:'POST',
        body: datos
    })
    .then(res=>res.json())
    .then(res=>{
        console.log(res);
        if('exito'){
            Swal.fire(
                'Sucesso!',
                'E-mail enviado com sucesso!',
                'success'
            )
            limparForm();
        }else{
            Swal.fire(
                'Erro!',
                'Falha ao enviar o e-mail!',
                'error'
            )
        }
    })
}

function limparForm(){
    document.getElementById('nome'). value = "";
    document.getElementById('email'). value = "";
    document.getElementById('exampleFormControlTextarea1'). value = "";
}