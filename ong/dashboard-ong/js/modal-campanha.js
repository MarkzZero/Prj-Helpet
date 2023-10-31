/* MODAL ALTERAR CAMPANHA */
document.addEventListener('DOMContentLoaded', function() {
    const openModalEdits = document.querySelectorAll(".open-modalEdit");

    openModalEdits.forEach(button => {
        button.addEventListener('click', function() {
            const IdEdit = this.dataset.idEdit;
            const modal = document.querySelector(`#modalEdit-${IdEdit}`);
            const fade = document.querySelector(`#fadeEdit-${IdEdit}`);
            modal.classList.remove('hide');
            fade.classList.remove('hide');
        });

    });

    const closeModalCam = document.querySelectorAll(".modalEdit .close-modal");

    closeModalCam.forEach(button => {
        button.addEventListener('click', function() {
            const modal = this.closest('.modalEdit');
            const fade = document.querySelector(`#fadeEdit-${modal.idEdit.split('-')[1]}`);
            modal.classList.add('hide');
            fade.classList.add('hide');
        });
    });
});




/* MODAL VER MAIS CAMPANHA */

document.addEventListener('DOMContentLoaded', function() {
    const openModalCam = document.querySelectorAll(".open-modalCam");

    openModalCam.forEach(button => {
        button.addEventListener('click', function() {
            const Id = this.dataset.id;
            const modal = document.querySelector(`#modalCam-${Id}`);
            const fade = document.querySelector(`#fadeCam-${Id}`);
            modal.classList.remove('hide');
            fade.classList.remove('hide');
        });
    });

    const closeModalCam = document.querySelectorAll(".modalCam .close-modal");

    closeModalCam.forEach(button => {
        button.addEventListener('click', function() {
            const modal = this.closest('.modalCam');
            const fade = document.querySelector(`#fadeCam-${modal.id.split('-')[1]}`);
            modal.classList.add('hide');
            fade.classList.add('hide');
        });
    });
});
