function setupModal(openBtns, closeBtns, modals, fades) {
    const toggleModal = (modalIndex) => {
        modals.forEach((modal, index) => {
            if (index === modalIndex) {
                modal.classList.toggle("hide");
                fades[index].classList.toggle("hide");
            } else {
                modal.classList.add("hide");
                fades[index].classList.add("hide");
            }
        });
    };

    openBtns.forEach((el, index) => {
        el.addEventListener("click", () => {
            toggleModal(index);
        });
    });

    closeBtns.forEach((el, index) => {
        el.addEventListener("click", () => {
            toggleModal(index);
        });
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