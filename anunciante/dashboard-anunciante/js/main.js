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