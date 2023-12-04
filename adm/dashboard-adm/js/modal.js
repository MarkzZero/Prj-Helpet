/* Modais */
function setupModal(openBtns, closeBtns, modals, fade) {
    const toggleModal = (index) => {
        modals.forEach((el, i) => {
            if (i === index) {
                el.classList.toggle("hide");
                fade[i].classList.toggle("hide");
            } else {
                el.classList.add("hide");
                fade[i].classList.add("hide");
            }
        });
    };

    openBtns.forEach((el, index) => {
        el.addEventListener("click", () => toggleModal(index));
    });

    closeBtns.forEach((el, index) => {
        el.addEventListener("click", () => toggleModal(index));
    });
}


// Isso Configura o Modal de Ver Mais ONG
const openModal = document.querySelectorAll(".open-modal");
const closeModal = document.querySelectorAll(".close-modal");
const modal = document.querySelectorAll(".modal");
const fade = document.querySelectorAll(".fade");
setupModal(openModal, closeModal, modal, fade);

// Isso Configura o Modal de Excluir ONG
const openModalExcluir = document.querySelector(".open-modalExcluir");
const closeModalExcluir = document.querySelector(".close-modalExcluir");
const modalExcluir = document.querySelector(".modalExcluir");
const fadeExcluir = document.querySelector(".fadeExcluir");
setupModal(openModalExcluir, closeModalExcluir, modalExcluir, fadeExcluir);


// Isso Configura o Modal de Ver Mais Usuário
const openModalUser = document.querySelectorAll(".open-modalUser");
const closeModalUser = document.querySelectorAll(".close-modalUser");
const modalUser = document.querySelectorAll(".modalUser");
const fadeUser = document.querySelectorAll(".fadeUser");
setupModal(openModalUser, closeModalUser, modalUser, fadeUser);

// Isso Configura o Modal de Excluir Usuário
const openModalExcUser = document.querySelector(".open-modalExcUser");
const closeModalExcUser = document.querySelector(".close-modalExcUser");
const modalExcUser = document.querySelector(".modalExcUser");
const fadeExcUser = document.querySelector(".fadeExcUser");
setupModal(openModalExcUser, closeModalExcUser, modalExcUser, fadeExcUser);


// Isso Configura o Modal de Ver Mais Anunciante
const openModalAnun = document.querySelectorAll(".open-modalAnun");
const closeModalAnun = document.querySelectorAll(".close-modalAnun");
const modalAnun = document.querySelectorAll(".modalAnun");
const fadeAnun = document.querySelectorAll(".fadeAnun");
setupModal(openModalAnun, closeModalAnun, modalAnun, fadeAnun);

// Isso Configura o Modal de Excluir Anunciante
const openModalExcAnun = document.querySelector(".open-modalExcAnun");
const closeModalExcAnun = document.querySelector(".close-modalExcAnun");
const modalExcAnun = document.querySelector(".modalExcAnun");
const fadeExcAnun = document.querySelector(".fadeExcAnun");
setupModal(openModalExcAnun, closeModalExcAnun, modalExcAnun, fadeExcAnun);
