/* Ícone Favoritos */
const heartIcons = document.querySelectorAll(".icon");

heartIcons.forEach(function(heartIcon) {
    heartIcon.addEventListener("click", function() {
        // Verifica qual classe está definida no ícone
        if (heartIcon.classList.contains("fi-rr-heart")) {
            // Se a classe atual for fi-rr-heart, substitui pela classe fi-sr-heart
            heartIcon.classList.remove("fi-rr-heart");
            heartIcon.classList.add("fi-sr-heart");
        } else {
            // Se a classe atual for fi-sr-heart, substitui pela classe fi-rr-heart
            heartIcon.classList.remove("fi-sr-heart");
            heartIcon.classList.add("fi-rr-heart");
        }
    });
});

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


/* Cod Para a Foto */
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

function formatTelefone(input) {
    var phoneNumber = input.value.replace(/\D/g, ''); 

    if (phoneNumber.length === 11) {
        phoneNumber = phoneNumber.replace(/^(\d{2})(\d{5})(\d{4})$/, '($1) $2-$3');
    } else {
        // Mantém o número como está, caso não se encaixe no formato esperado
    }

    input.value = phoneNumber;
}

$(document).ready(function() {
    $(".favorito").click(function() {
        var animalId = $(this).data("animal-id");

        // Desabilita o botão imediatamente após o clique
        $(this).prop('disabled', true);

        $.ajax({
            url: "index.php", // Substitua pelo nome do seu arquivo PHP
            method: "POST",
            data: {
                animal_id: animalId
            },
            success: function(response) {
                console.log(response);
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            },
            complete: function() {
                // Reabilita o botão após a conclusão da requisição, mesmo em caso de erro
                $(".favorito").prop('disabled', false);
            }
        });
    });
});

$(document).ready(function() {
    $(".favoritar").click(function() {
        var campanhaId = $(this).data("campanha-id");

        // Desabilita o botão imediatamente após o clique
        $(this).prop('disabled', true);

        $.ajax({
            url: "index.php", // Substitua pelo nome do seu arquivo PHP
            method: "POST",
            data: {
                campanha_id: campanhaId
            },
            success: function(response) {
                console.log(response);
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            },
            complete: function() {
                // Reabilita o botão após a conclusão da requisição, mesmo em caso de erro
                $(".favoritar").prop('disabled', false);
            }
        });
    });
});

function search_animal() {
    let input = document.getElementById('searchbar').value
    input=input.toLowerCase();
    let x = document.getElementsByClassName('card');
      
    for (i = 0; i < x.length; i++) { 
        if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display="none";
        }
        else {
            x[i].style.display="list-item";  
        }
    }
}
