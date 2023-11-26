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
const openModal = document.querySelectorAll(".open-modal");
const closeModal = document.querySelectorAll(".close-modal");
const modal = document.querySelectorAll(".modal");
const fade = document.querySelectorAll(".fade");
setupModal(openModal, closeModal, modal, fade);

// Isso Configura o Modal do Perfil da Campanha
const openModalPerfilCamp = document.querySelectorAll(".open-modalPerfilCamp");
const closeModalPerfilCamp = document.querySelectorAll(".close-modalPerfilCamp");
const modalPerfilCamp = document.querySelectorAll(".modalPerfilCamp");
const fadePerfilCamp = document.querySelectorAll(".fadePerfilCamp");
setupModal(openModalPerfilCamp, closeModalPerfilCamp, modalPerfilCamp, fadePerfilCamp);

// Isso Configura o Modal da Perfil do Anunciante
const openModalPerfilAnunciante = document.querySelectorAll(".open-modalPerfilAnunciante");
const closeModalPerfilAnunciante = document.querySelectorAll(".close-modalPerfilAnunciante");
const modalPerfilAnunciante = document.querySelectorAll(".modalPerfilAnunciante");
const fadePerfilAnunciante = document.querySelectorAll(".fadePerfilAnunciante");
setupModal(openModalPerfilAnunciante, closeModalPerfilAnunciante, modalPerfilAnunciante, fadePerfilAnunciante);

// Isso Configura o Modal do Perfil do Anúncio
const openModalPerfilAnuncio = document.querySelectorAll(".open-modalPerfilAnuncio");
const closeModalPerfilAnuncio = document.querySelectorAll(".close-modalPerfilAnuncio");
const modalPerfilAnuncio = document.querySelectorAll(".modalPerfilAnuncio");
const fadePerfilAnuncio = document.querySelectorAll(".fadePerfilAnuncio");
setupModal(openModalPerfilAnuncio, closeModalPerfilAnuncio, modalPerfilAnuncio, fadePerfilAnuncio);

// Isso Configura o Modal do Perfil da Ong
const openModalOngPerfil = document.querySelectorAll(".open-modalOngPerfil");
const closeModalOngPerfil = document.querySelectorAll(".close-modalOngPerfil");
const modalOngPerfil = document.querySelectorAll(".modalOngPerfil");
const fadeOngPerfil = document.querySelectorAll(".fadeOngPerfil");
setupModal(openModalOngPerfil, closeModalOngPerfil, modalOngPerfil, fadeOngPerfil);

// Isso Configura o Modal da Tela de Adoção
const openModalAdocao = document.querySelectorAll(".open-modalAdocao");
const closeModalAdocao = document.querySelectorAll(".close-modalAdocao");
const modalAdocao = document.querySelectorAll(".tela-adocao");
const fadeAdocao = document.querySelectorAll(".fadeAdocao");
setupModal(openModalAdocao, closeModalAdocao, modalAdocao, fadeAdocao);

// Isso Configura o Modal da Tela de ONGs
const openModalOngs = document.querySelectorAll(".open-modalOngs");
const closeModalOngs = document.querySelectorAll(".close-modalOngs");
const modalOngs = document.querySelectorAll(".tela-ongs");
const fadeOngs = document.querySelectorAll(".fadeOngs");
setupModal(openModalOngs, closeModalOngs, modalOngs, fadeOngs);

// Isso Configura o Modal da Tela de Campanhas
const openModalCampanhas = document.querySelectorAll(".open-modalCampanhas");
const closeModalCampanhas = document.querySelectorAll(".close-modalCampanhas");
const modalCampanhas = document.querySelectorAll(".tela-campanhas");
const fadeCampanhas = document.querySelectorAll(".fadeCampanhas");
setupModal(openModalCampanhas, closeModalCampanhas, modalCampanhas, fadeCampanhas);

// Isso Configura o Modal da Tela de Anunciantes
const openModalAnunciantes = document.querySelectorAll(".open-modalAnunciantes");
const closeModalAnunciantes = document.querySelectorAll(".close-modalAnunciantes");
const modalAnunciantes = document.querySelectorAll(".tela-anunciantes");
const fadeAnunciantes = document.querySelectorAll(".fadeAnunciantes");
setupModal(openModalAnunciantes, closeModalAnunciantes, modalAnunciantes, fadeAnunciantes);

// Isso Configura o Modal da Tela de Anúncios
const openModalAnuncios = document.querySelectorAll(".open-modalAnuncios");
const closeModalAnuncios = document.querySelectorAll(".close-modalAnuncios");
const modalAnuncios = document.querySelectorAll(".tela-anuncios");
const fadeAnuncios = document.querySelectorAll(".fadeAnuncios");
setupModal(openModalAnuncios, closeModalAnuncios, modalAnuncios, fadeAnuncios);

// Isso Configura o Modal da Tela de Pets Favoritos
const openModalFav = document.querySelectorAll(".open-modalFav");
const closeModalFav = document.querySelectorAll(".close-modalFav");
const modalFav = document.querySelectorAll(".tela-fav");
const fadeFav = document.querySelectorAll(".fadeFav");
setupModal(openModalFav, closeModalFav, modalFav, fadeFav);

// Isso Configura o Modal da Tela de Pets Adotados
const openModalAdot = document.querySelectorAll(".open-modalAdot");
const closeModalAdot = document.querySelectorAll(".close-modalAdot");
const modalAdot = document.querySelectorAll(".tela-adot");
const fadeAdot = document.querySelectorAll(".fadeAdot");
setupModal(openModalAdot, closeModalAdot, modalAdot, fadeAdot);

// Isso Configura o Modal da Tela de Anúncios Favoritos
const openModalFavAnuncios = document.querySelectorAll(".open-modalFavAnuncios");
const closeModalFavAnuncios = document.querySelectorAll(".close-modalFavAnuncios");
const modalFavAnuncios= document.querySelectorAll(".tela-favAnuncios");
const fadeFavAnuncios = document.querySelectorAll(".fadeFavAnuncios");
setupModal(openModalFavAnuncios, closeModalFavAnuncios, modalFavAnuncios, fadeFavAnuncios);

// Isso Configura o Modal da Tela de Campanhas Favoritas
const openModalFavCamp = document.querySelectorAll(".open-modalFavCamp");
const closeModalFavCamp = document.querySelectorAll(".close-modalFavCamp");
const modalFavCamp = document.querySelectorAll(".tela-favCamp");
const fadeFavCamp = document.querySelectorAll(".fadeFavCamp");
setupModal(openModalFavCamp, closeModalFavCamp, modalFavCamp, fadeFavCamp);

// Isso Configura o Modal da Tela de Seguindo ONGs
const openModalSegOng = document.querySelectorAll(".open-modalSegOng");
const closeModalSegOng = document.querySelectorAll(".close-modalSegOng");
const modalSegOng = document.querySelectorAll(".tela-segOng");
const fadeSegOng = document.querySelectorAll(".fadeSegOng");
setupModal(openModalSegOng, closeModalSegOng, modalSegOng, fadeSegOng);

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