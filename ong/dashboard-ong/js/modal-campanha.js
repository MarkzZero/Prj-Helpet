function setupModal(openBtns, closeBtns, modal, fade) {
    const toggleModal = (modal, fade) => {
        modal.classList.toggle("hide");
        fade.classList.toggle("hide");
    };

    openBtns.forEach((el, index) => {
        el.addEventListener("click", () => {
            toggleModal(modal[index], fade[index]);
        });
    });

    closeBtns.forEach((el, index) => {
        el.addEventListener("click", () => {
            toggleModal(modal[index], fade[index]);
        });
    });
}

// Configuração do Modal "Alterar Campanha"
const openModalEdit = document.querySelectorAll(".open-modal");
const closeModalEdit = document.querySelectorAll(".modal .close-modal");
const modalEdit = document.querySelectorAll(".modal");
const fadeEdit = document.getElementById("fade");

// Configuração do Modal "Ver Mais Campanha"
const openModalVerCam = document.querySelectorAll(".open-modalCam");
const closeModalVerCam = document.querySelectorAll(".modalCam .close-modal");
const modalVerCam = document.querySelectorAll(".modalCam");
const fadeVerCam = document.getElementById("modal-fade");

// Configuração de outros modais, como Excluir, se necessário
const openModalExcluir = document.querySelectorAll(".open-modalExcluir");
const closeModalExcluir = document.querySelectorAll(".modalExcluir .close-modal");
const modalExcluir = document.querySelectorAll(".modalExcluir");
const fadeExcluir = document.querySelectorAll(".fadeExcluir");

setupModal(openModalEdit, closeModalEdit, modalEdit, fadeEdit);
setupModal(openModalVerCam, closeModalVerCam, modalVerCam, fadeVerCam);
setupModal(openModalExcluir, closeModalExcluir, modalExcluir, fadeExcluir);