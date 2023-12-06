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

    // VALIDAÇÃO CNPJ
    function formatCNPJ(input) {
      var cnpj = input.value.replace(/\D/g, '');
  
      if (cnpj.length > 2) {
          cnpj = cnpj.substr(0, 2) + '.' + cnpj.substr(2);
      }
      if (cnpj.length > 6) {
          cnpj = cnpj.substr(0, 6) + '.' + cnpj.substr(6);
      }
      if (cnpj.length > 10) {
          cnpj = cnpj.substr(0, 10) + '/' + cnpj.substr(10);
      }
      if (cnpj.length > 15) {
          cnpj = cnpj.substr(0, 15) + '-' + cnpj.substr(15);
      }
  
      input.value = cnpj;
  }

  // FORMATAÇÃO TELEFONE
  function formatTelefone(input) {
    var phoneNumber = input.value.replace(/\D/g, ''); // Remove todos os não dígitos
  
    if (phoneNumber.length === 11) {
        phoneNumber = phoneNumber.replace(/^(\d{2})(\d{5})(\d{4})$/, '($1) $2-$3');
    } else {
        // Mantém o número como está, caso não se encaixe no formato esperado
    }
  
    input.value = phoneNumber;
  }