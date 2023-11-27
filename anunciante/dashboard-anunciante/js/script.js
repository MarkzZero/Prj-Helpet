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
const openModalAdd = document.querySelectorAll(".open-modalAdd");
const closeModalAdd = document.querySelectorAll(".close-modalAdd");
const modalAdd = document.querySelectorAll(".modalAdd");
const fadeAdd = document.querySelectorAll(".fadeAdd");
setupModal(openModalAdd, closeModalAdd, modalAdd, fadeAdd);

// Isso Configura o Modal do Perfil do Pet
const openModal = document.querySelectorAll(".open-modal");
const closeModal = document.querySelectorAll(".close-modal");
const modal = document.querySelectorAll(".modal");
const fade = document.querySelectorAll(".fade");
setupModal(openModal, closeModal, modal, fade);

// Isso Configura o Modal de Editar Perfil
const openModalEdit = document.querySelectorAll(".open-modalEdit");
const closeModalEdit = document.querySelectorAll(".close-modalEdit");
const modalEdit = document.querySelectorAll(".modalEdit");
const fadeEdit = document.querySelectorAll(".fadeEdit");
setupModal(openModalEdit, closeModalEdit, modalEdit, fadeEdit);

// Isso Configura o Modal de Excluir Perfil
const openModalExc = document.querySelectorAll(".open-modalExc");
const closeModalExc = document.querySelectorAll(".close-modalExc");
const modalExc = document.querySelectorAll(".modalExc");
const fadeExc = document.querySelectorAll(".fadeExc");
setupModal(openModalExc, closeModalExc, modalExc, fadeExc);





//Menu
let list = document.querySelectorAll('nav li');
function activeLink(){
    list.forEach((item) =>
    item.classList.remove('hovered'));
    this.classLis.add('hovered')
}
list.forEach((item) =>
item.addEventListener('mouseover', activeLink));

let toggle = document.querySelector('.toggle');
let navegation = document.querySelector('nav');
let main = document.querySelector('.main');

toggle.onclick = function(){
    navegation.classList.toggle('active');
    main.classList.toggle('active');
}