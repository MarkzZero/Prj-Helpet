//Mostrar senha
function mostrarSenha(){
    var inputPass = document.getElementById('senha')
    var btnShowPass = document.getElementById('btn-senha')

    if(inputPass.type == 'password'){
        inputPass.setAttribute('type', 'text')
        btnShowPass.classList.replace('bi-eye-fill', 'bi-eye-slash-fill')
    }else{
        inputPass.setAttribute('type', 'password')
        btnShowPass.classList.replace('bi-eye-slash-fill', 'bi-eye-fill')
    }
}

function mostrarSenha2(){
  var inputPass = document.getElementById('confir')
  var btnShowPass = document.getElementById('btn-senha2')

  if(inputPass.type == 'password'){
      inputPass.setAttribute('type', 'text')
      btnShowPass.classList.replace('bi-eye-fill', 'bi-eye-slash-fill')
  }else{
      inputPass.setAttribute('type', 'password')
      btnShowPass.classList.replace('bi-eye-slash-fill', 'bi-eye-fill')
  }
}


document.getElementById('submit').addEventListener('click', function() {
    document.getElementById('form-cad').submit(); // Submeter o primeiro formulário
    document.getElementById('form-end').submit(); // Submeter o segundo formulário
    document.getElementById('formPrefere').submit(); // Submeter o terceiro formulário
});

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
    };

    'use static'
    let photo = document.getElementById('imgPhoto-login');
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
  


