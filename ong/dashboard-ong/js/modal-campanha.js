
    const toggleModal = (modal, fade) => {
        modal.classList.toggle("hide");
        fade.classList.toggle("hide");
    };

function setupModal(openButtons, closeButtons, modals, fade) {
    openButtons.forEach(function(openButton, index) {
        openButton.addEventListener("click", function() {
            toggleModal(modals[index], fade[index]);
        });
    });

    closeButtons.forEach(function(closeButton, index) {
        closeButton.addEventListener("click", function() {
            toggleModal(modals[index], fade[index]);
        });
    });
}

const openModalEdit = document.querySelectorAll(".open-modal");
const closeModalEdit = document.querySelectorAll(".modal .close-modal");
const modalEdit = document.querySelectorAll(".modal");
const fadeEdit = document.getElementById("fade");

const openModalVerCam = document.querySelectorAll(".open-modalCam");
const closeModalVerCam = document.querySelectorAll(".modalCam .close-modal");
const modalVerCam = document.querySelectorAll(".modalCam");
const fadeVerCam = document.getElementById("modal-fade");

const openModalExcluir = document.querySelectorAll(".open-modalExcluir");
const closeModalExcluir = document.querySelectorAll(".modalExcluir .close-modal");
const modalExcluir = document.querySelectorAll(".modalExcluir");
const fadeExcluir = document.querySelectorAll(".fadeExcluir");

setupModal(openModalEdit, closeModalEdit, modalEdit, fadeEdit);
setupModal(openModalVerCam, closeModalVerCam, modalVerCam, fadeVerCam);
setupModal(openModalExcluir, closeModalExcluir, modalExcluir, fadeExcluir);