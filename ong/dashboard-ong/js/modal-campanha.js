/* MODAL ALTERAR CAMPANHA */
const openModalEdit = document.querySelector(".open-modalEdit");
const closeModalEdit = document.querySelector(".modalEdit .close-modal");
const closeBtnEdit = document.querySelector(".modalEdit .closeBtnModal");
const modalEdit = document.querySelector(".modalEdit");
const fadeEdit = document.querySelector(".fadeEdit");

const toggleModalEdit = () => {
    [modalEdit, fadeEdit].forEach((el) => el.classList.toggle("hide"));
};

[openModalEdit, closeModalEdit, closeBtnEdit, fadeEdit].forEach((el) => {
    el.addEventListener("click", () => toggleModalEdit());
});



/* MODAL EXCLUIR CAMPANHA */
const openModalExcCam = document.querySelector(".open-modalExcCam");
const closeModalExcCam = document.querySelector(".modalExcCam .close-modal");
const closeBtnExcCam = document.querySelector(".modalExcCam .closeBtnModal");
const modalExcCam = document.querySelector(".modalExcCam");
const fadeExcCam = document.querySelector(".fadeExcCam");

const toggleModalExcCam = () => {
    [modalExcCam, fadeExcCam].forEach((el) => el.classList.toggle("hide"));
};

[openModalExcCam, closeModalExcCam, closeBtnExcCam, fadeExcCam].forEach((el) => {
    el.addEventListener("click", () => toggleModalExcCam());
});



/* MODAL VER MAIS CAMPANHA */
const openModalCam = document.querySelector(".open-modalCam");
const closeModalCam = document.querySelector(".modalCam .close-modal");
const closeBtnCam = document.querySelector(".modalCam .closeBtnModal");
const modalCam = document.querySelector(".modalCam");
const fadeCam = document.querySelector(".fadeCam");

const toggleModalCam = () => {
    [modalCam, fadeCam].forEach((el) => el.classList.toggle("hide"));
};

[openModalCam, closeModalCam, closeBtnCam, fadeCam].forEach((el) => {
    el.addEventListener("click", () => toggleModalCam());
});