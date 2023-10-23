const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});

//Mostrar botão senha 1
function mostrarSenha(){
  var inputPass = document.getElementById('senha')
  var btnShowPass = document.getElementById('btn-senha')

  if(inputPass.type == 'password'){
      inputPass.setAttribute('type', 'text')
      btnShowPass.classList.replace('fi-ss-eye', 'fi-ss-eye-crossed')
  }else{
      inputPass.setAttribute('type', 'password')
      btnShowPass.classList.replace('fi-ss-eye-crossed', 'fi-ss-eye')
  }
}

//Mostrar botão senha 2
function mostrarSenha2(){
  var inputPass = document.getElementById('senha2')
  var btnShowPass = document.getElementById('btn-senha2')

  if(inputPass.type == 'password'){
      inputPass.setAttribute('type', 'text')
      btnShowPass.classList.replace('fi-ss-eye', 'fi-ss-eye-crossed')
  }else{
      inputPass.setAttribute('type', 'password')
      btnShowPass.classList.replace('fi-ss-eye-crossed', 'fi-ss-eye')
  }
}

//Mostrar botão senha 3
function mostrarSenha3(){
  var inputPass = document.getElementById('senha_confirma')
  var btnShowPass = document.getElementById('btn-senha3')

  if(inputPass.type == 'password'){
      inputPass.setAttribute('type', 'text')
      btnShowPass.classList.replace('fi-ss-eye', 'fi-ss-eye-crossed')
  }else{
      inputPass.setAttribute('type', 'password')
      btnShowPass.classList.replace('fi-ss-eye-crossed', 'fi-ss-eye')
  }
}

// CEP
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

  //Formato CNPJ
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

function formatTelefone(input) {
  var phoneNumber = input.value.replace(/\D/g, ''); // Remove todos os não dígitos

  if (phoneNumber.length === 11) {
      phoneNumber = phoneNumber.replace(/^(\d{2})(\d{5})(\d{4})$/, '($1) $2-$3');
  } else {
      // Mantém o número como está, caso não se encaixe no formato esperado
  }

  input.value = phoneNumber;
}
