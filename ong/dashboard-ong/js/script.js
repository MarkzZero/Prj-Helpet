

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

    let reader = new FileReader()

    reader.onload = () =>{
        photo2.src = reader.result;
    }

    reader.readAsDataURL(file2.files[0]);
});



/* ÁREA OUTRAS FOTOS DO PET */
'use static'
let photoAdd = document.getElementById('photos');
let fileAdd = document.getElementById('filesImgs');

photoAdd.addEventListener("click", () => {
    fileAdd.click();   
});

file.addEventListener('change', (event) => {
    
   if(fileAdd.filesAdd.length <= 0){
    return;
   }

    let reader = new FileReader()

    reader.onload = () =>{
        photoAdd.src = reader.result;
    }

    reader.readAsDataURL(fileAdd.filesAdd[0]);
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



/* TABELA RESPONSIVA */
const search = document.querySelector('.input-group input'),
    table_rows = document.querySelectorAll('tbody tr'),
    table_headings = document.querySelectorAll('thead th');

// 1. Searching for specific data of HTML table
search.addEventListener('input', searchTable);

function searchTable() {
    table_rows.forEach((row, i) => {
        let table_data = row.textContent.toLowerCase(),
            search_data = search.value.toLowerCase();

        row.classList.toggle('hide', table_data.indexOf(search_data) < 0);
        row.style.setProperty('--delay', i / 25 + 's');
    })

    document.querySelectorAll('tbody tr:not(.hide)').forEach((visible_row, i) => {
        visible_row.style.backgroundColor = (i % 2 == 0) ? 'transparent' : '#0000000b';
    });
}

// 2. Sorting | Ordering data of HTML table

table_headings.forEach((head, i) => {
    let sort_asc = true;
    head.onclick = () => {
        table_headings.forEach(head => head.classList.remove('active'));
        head.classList.add('active');

        document.querySelectorAll('td').forEach(td => td.classList.remove('active'));
        table_rows.forEach(row => {
            row.querySelectorAll('td')[i].classList.add('active');
        })

        head.classList.toggle('asc', sort_asc);
        sort_asc = head.classList.contains('asc') ? false : true;

        sortTable(i, sort_asc);
    }
})


function sortTable(column, sort_asc) {
    [...table_rows].sort((a, b) => {
        let first_row = a.querySelectorAll('td')[column].textContent.toLowerCase(),
            second_row = b.querySelectorAll('td')[column].textContent.toLowerCase();

        return sort_asc ? (first_row < second_row ? 1 : -1) : (first_row < second_row ? -1 : 1);
    })
        .map(sorted_row => document.querySelector('tbody').appendChild(sorted_row));
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