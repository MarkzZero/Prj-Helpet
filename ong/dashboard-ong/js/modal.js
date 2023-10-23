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

// Isso Configura o Modal Principal
const openModal = document.querySelectorAll(".open-modal");
const closeModal = document.querySelectorAll(".modal .close-modal");
const modal = document.querySelectorAll(".modal");
const fade = document.querySelectorAll(".fade");
setupModal(openModal, closeModal, modal, fade);

// Isso aqui Configura o Modal de Excluir
const openModalExcluir = document.querySelectorAll(".open-modalExcluir");
const closeModalExcluir = document.querySelectorAll(".modalExcluir .close-modal");
const modalExcluir = document.querySelectorAll(".modalExcluir");
const fadeExcluir = document.querySelectorAll(".fadeExcluir");
setupModal(openModalExcluir, closeModalExcluir, modalExcluir, fadeExcluir);

// E esse outro Configura o Modal "Ver Mais"
const openModalVer = document.querySelectorAll(".open-modalVer");
const closeModalVer = document.querySelectorAll(".modalVer .close-modal");
const modalVer = document.querySelectorAll(".modalVer");
const fadeVer = document.querySelectorAll(".fadeVer");
setupModal(openModalVer, closeModalVer, modalVer, fadeVer);