/* MODAL ALTERAR */
const openModalButton = document.querySelector(".open-modal");
const closemodalbutton = document.querySelector(".close-modal");
const modal = document.querySelector(".modal");
const fade = document.querySelector(".fade");

const toggleModal = () => {
    [modal, fade].forEach((el) => el.classList.toggle("hide"));
};

[openModalButton, closemodalbutton, fade].forEach((el) => {
    el.addEventListener("click", () => toggleModal());
});


/* MODAL EXCLUIR */
const openModalExcluir = document.querySelector(".open-modalExcluir");
const closeModalExcluir = document.querySelector(".close-modalExcluir");
const modalExcluir = document.querySelector(".modalExcluir");
const fadeExcluir = document.querySelector(".fadeExcluir");

const toggleModalExcluir = () => {
    [modalExcluir, fadeExcluir].forEach((el) => el.classList.toggle("hideExcluir"));
};

[openModalExcluir, closeModalExcluir, fadeExcluir].forEach((el) => {
    el.addEventListener("click", () => toggleModalExcluir());
});