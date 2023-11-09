/* Modais */
function setupModal(openBtns, closeBtns, modal, fade) {
    const toggleModal = () => {
        modal.forEach((el) => el.classList.toggle("hide"));
        fade.forEach((el) => el.classList.toggle("hide"));
    };

    openBtns.forEach((el) => {
        el.addEventListener("click", toggleModal);
    });

    closeBtns.forEach((el) => {
        el.addEventListener("click", toggleModal);
    });
}

// Isso Configura o Modal do Perfil do Pet
const openModal = document.querySelectorAll(".open-modal");
const closeModal = document.querySelectorAll(".close-modal");
const modal = document.querySelectorAll(".modal");
const fade = document.querySelectorAll(".fade");
setupModal(openModal, closeModal, modal, fade);

// Isso Configura o Modal do Perfil da Ong
const openModalOngPerfil = document.querySelectorAll(".open-modalOngPerfil");
const closeModalOngPerfil = document.querySelectorAll(".close-modalOngPerfil");
const modalOngPerfil = document.querySelectorAll(".modalOngPerfil");
const fadeOngPerfil = document.querySelectorAll(".fadeOngPerfil");
setupModal(openModalOngPerfil, closeModalOngPerfil, modalOngPerfil, fadeOngPerfil);

// Isso Configura o Modal da Tela de Adoção
const openModalAdocao = document.querySelectorAll(".open-modalAdocao");
const closeModalAdocao = document.querySelectorAll(".close-modalAdocao");
const modalAdocao = document.querySelectorAll(".tela-adocao");
const fadeAdocao = document.querySelectorAll(".fadeAdocao");
setupModal(openModalAdocao, closeModalAdocao, modalAdocao, fadeAdocao);

// Isso Configura o Modal da Tela de ONGs
const openModalOngs = document.querySelectorAll(".open-modalOngs");
const closeModalOngs = document.querySelectorAll(".close-modalOngs");
const modalOngs = document.querySelectorAll(".tela-ongs");
const fadeOngs = document.querySelectorAll(".fadeOngs");
setupModal(openModalOngs, closeModalOngs, modalOngs, fadeOngs);

// Isso Configura o Modal da Tela de Favoritos
const openModalFav = document.querySelectorAll(".open-modalFav");
const closeModalFav = document.querySelectorAll(".close-modalFav");
const modalFav = document.querySelectorAll(".tela-fav");
const fadeFav = document.querySelectorAll(".fadeFav");
setupModal(openModalFav, closeModalFav, modalFav, fadeFav);

// Isso Configura o Modal da Tela de Pets Adotados
const openModalAdot = document.querySelectorAll(".open-modalAdot");
const closeModalAdot = document.querySelectorAll(".close-modalAdot");
const modalAdot = document.querySelectorAll(".tela-adot");
const fadeAdot = document.querySelectorAll(".fadeAdot");
setupModal(openModalAdot, closeModalAdot, modalAdot, fadeAdot);

// Isso Configura o Modal da Tela de Seguindo ONGs
const openModalSegOng = document.querySelectorAll(".open-modalSegOng");
const closeModalSegOng = document.querySelectorAll(".close-modalSegOng");
const modalSegOng = document.querySelectorAll(".tela-segOng");
const fadeSegOng = document.querySelectorAll(".fadeSegOng");
setupModal(openModalSegOng, closeModalSegOng, modalSegOng, fadeSegOng);

// Isso Configura o Modal de Excluir Perfil
const openModalExc = document.querySelectorAll(".open-modalExc");
const closeModalExc = document.querySelectorAll(".close-modalExc");
const modalExc = document.querySelectorAll(".modalExc");
const fadeExc = document.querySelectorAll(".fadeExc");
setupModal(openModalExc, closeModalExc, modalExc, fadeExc);


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

