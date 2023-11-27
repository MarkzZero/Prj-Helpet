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

    function verificarDoenca() {
        var doencaSelecionada = document.getElementById("doenca").value;

        // Verifique se a doença selecionada já existe na tabela tbdoenca
        $.ajax({
            url: 'verificar_doenca.php',
            type: 'POST',
            data: {doenca: doencaSelecionada},
            success: function(response) {
                if (response == 'false') {
                    // Se a doença não existir, crie um novo registro na tabela tbdoenca
                    $.ajax({
                        url: 'adicionar_doenca.php',
                        type: 'POST',
                        data: {doenca: doencaSelecionada},
                        success: function(response) {
                            if (response == 'true') {
                                alert('Doença adicionada com sucesso.');
                            } else {
                                alert('Erro ao adicionar doença.');
                            }
                        }
                    });
                }
            }
        });
    }

    
