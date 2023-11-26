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
