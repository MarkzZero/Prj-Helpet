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
document.addEventListener('DOMContentLoaded', function() {
    const openModalVer = document.querySelectorAll(".open-modal");
    const closeModalVer = document.querySelectorAll(".modal .close-modal");
    const modalVer = document.querySelectorAll(".modal");
    const modalFade = document.getElementById("fade");

    openModalVer.forEach(button => {
        button.addEventListener('click', function() {
            const Idanimal = this.dataset.idanimal;
            const modal = document.querySelector(`#modalEdit-${Idanimal}`);
            modal.classList.remove('hide');
            modalFade.classList.remove('hide');
        });
    });

    closeModalVer.forEach(button => {
        button.addEventListener('click', function() {
            const modal = this.closest('.modal');
            modal.classList.add('hide');
            modalFade.classList.add('hide');
        });
    });
});

// Isso aqui Configura o Modal de Excluir
const openModalExcluir = document.querySelectorAll(".open-modalExcluir");
const closeModalExcluir = document.querySelectorAll(".close-modalExcluir");
const modalExcluir = document.querySelectorAll(".modalExcluir");
const fadeExcluir = document.querySelectorAll(".fadeExcluir");
setupModal(openModalExcluir, closeModalExcluir, modalExcluir, fadeExcluir);

// E esse outro Configura o Modal "Ver Mais"
document.addEventListener('DOMContentLoaded', function() {
    const openModalVer = document.querySelectorAll(".open-modalVer");
    const closeModalVer = document.querySelectorAll(".modalVer .close-modal");
    const modalVer = document.querySelectorAll(".modalVer");
    const modalFade = document.getElementById("modal-fade");

    openModalVer.forEach(button => {
        button.addEventListener('click', function() {
            const animalId = this.dataset.animalid;
            const modal = document.querySelector(`#modal-${animalId}`);
            modal.classList.remove('hide');
            modalFade.classList.remove('hide');
        });
    });

    closeModalVer.forEach(button => {
        button.addEventListener('click', function() {
            const modal = this.closest('.modalVer');
            modal.classList.add('hide');
            modalFade.classList.add('hide');
        });
    });
});
// modal campanha





// Isso Configura o Modal de Excluir Perfil
const openModalExc = document.querySelectorAll(".open-modalExc");
const closeModalExc = document.querySelectorAll(".close-modalExc");
const modalExc = document.querySelectorAll(".modalExc");
const fadeExc = document.querySelectorAll(".fadeExc");
setupModal(openModalExc, closeModalExc, modalExc, fadeExc);
