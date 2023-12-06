/* Descrição Ler Mais e Ler Menos */
document.querySelectorAll('.post-body').forEach(function (el) {
    var fullText = el.querySelector('.full-text');
    var shortText =  el.querySelector('.short-text');
    
    if (! shortText) return;
    
    el.querySelector('.read-more').addEventListener('click', function () {
       fullText.style.display = 'flex';
       shortText.style.display = 'none';
    })
    
    el.querySelector('.read-less').addEventListener('click', function () {
       fullText.style.display = 'none';
       shortText.style.display = 'flex';
    })
 })

 

/* ÁREA FOTO DE PERFIL  DO PET */
'use static'
let photo = document.getElementById('imgPhoto');
let file = document.getElementById('flImage');

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

'use static'
let photo2 = document.getElementById('imgPhoto2');
let file2 = document.getElementById('flImage2');

photo2.addEventListener("click", () => {
    file2.click();   
});

file2.addEventListener('change', (event) => {
    
   if(file2.files.length <= 0){
    return;
   }

    let reader2 = new FileReader()

    reader2.onload = () =>{
        photo2.src = reader2.result;
    }

    reader2.readAsDataURL(file2.files[0]);
});

let photoElements = document.querySelectorAll('.imgPhoto');
let fileElements = document.querySelectorAll('.flImage');

photoElements.forEach((photo, index) => {
    photo.addEventListener("click", () => {
        fileElements[index].click();
    });

    fileElements[index].addEventListener('change', (event) => {
        if (fileElements[index].files.length <= 0) {
            return;
        }

        let reader = new FileReader();

        reader.onload = () => {
            photo.src = reader.result;
        };

        reader.readAsDataURL(fileElements[index].files[0]);
    });
});



/* ADICIONAR VÁRIAS FOTOS */
function handleFileSelect(evt) {
    var files = evt.target.files; // Obtém a lista de arquivos selecionados
    var output = document.querySelector('.galeria'); // Obtém a div de saída

    for (var i = 0, f; f = files[i]; i++) {
        // Verifica se o arquivo é uma imagem
        if (!f.type.match('image.*')) {
            continue;
        }

        var reader = new FileReader();

        reader.onload = (function(theFile) {
            return function(e) {
                // Cria um elemento de imagem para exibir a imagem
                var img = document.createElement('img');
                img.src = e.target.result;
                img.style.maxWidth = '10vw'; // Ajusta o tamanho máximo da imagem

                // Adiciona a imagem à div de saída
                output.appendChild(img);
            };
        })(f);

        reader.readAsDataURL(f); // Lê o arquivo como uma URL de dados
    }
}

function limpa_formulário_cep() {
    //Limpa valores do formulário de cep.
    document.getElementById('rua').value=("");
    document.getElementById('bairro').value=("");
    document.getElementById('cidade').value=("");
    document.getElementById('uf').value=("");
  }
  
  function meu_callback(conteudo) {
  if (!("erro" in conteudo)) {
    //Atualiza os campos com os valores.
    document.getElementById('rua').value=(conteudo.logradouro);
    document.getElementById('bairro').value=(conteudo.bairro);
    document.getElementById('cidade').value=(conteudo.localidade);
    document.getElementById('uf').value=(conteudo.uf);
  } //end if.
  else {
    //CEP não Encontrado.
    limpa_formulário_cep();
    alert("CEP não encontrado.");
  }
  }

function pesquisacep(valor) {

    //Nova variável "cep" somente com dígitos.
    var cep = valor.replace(/\D/g, '');
    
    //Verifica se campo cep possui valor informado.
    if (cep != "") {
    
      //Expressão regular para validar o CEP.
      var validacep = /^[0-9]{8}$/;
    
      //Valida o formato do CEP.
      if(validacep.test(cep)) {
    
          //Preenche os campos com "..." enquanto consulta webservice.
          document.getElementById('rua').value="...";
          document.getElementById('bairro').value="...";
          document.getElementById('cidade').value="...";
          document.getElementById('uf').value="...";
    
          //Cria um elemento javascript.
          var script = document.createElement('script');
    
          //Sincroniza com o callback.
          script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';
    
          //Insere script no documento e carrega o conteúdo.
          document.body.appendChild(script);
    
      } //end if.
      else {
          //cep é inválido.
          limpa_formulário_cep();
          alert("Formato de CEP inválido.");
      }
    } //end if.
    else {
      //cep sem valor, limpa formulário.
      limpa_formulário_cep();
    }
    };
    
      //Formato CEP
    function formatCEP(input) {
      var cep = input.value.replace(/\D/g, '');
    
      if (cep.length > 5) {
          cep = cep.substr(0, 5) + '-' + cep.substr(5);
      }
    
      input.value = cep;
    }

    function formatTelefone(input) {
        var phoneNumber = input.value.replace(/\D/g, ''); // Remove todos os não dígitos
      
        if (phoneNumber.length === 11) {
            phoneNumber = phoneNumber.replace(/^(\d{2})(\d{5})(\d{4})$/, '($1) $2-$3');
        } else {
            // Mantém o número como está, caso não se encaixe no formato esperado
        }
      
        input.value = phoneNumber;
      }

      function onLoad() {
        var inputTelefone = document.getElementById('telefone');

        formatTelefone(inputTelefone);
    }
