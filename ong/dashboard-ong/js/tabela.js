/* CARDS E TABELAS */
var areaTabela = document.querySelector('#area-tabela')
var areaCards = document.querySelector('#area-cards')
var iconTabela = document.querySelector('#icon-tabela i')
var iconCards = document.querySelector('#icon-cards i')

document.querySelector('#icon-cards')
    .addEventListener('click', () => {
        areaTabela.style.display = 'none'
        areaCards.style.display = 'flex'
        iconCards.style = 'background: #004FDA; color: #fff;'
        iconTabela.style = 'background: transparent; color: #004FDA;'
    })

document.querySelector('#icon-tabela')
    .addEventListener('click', () => {
        areaTabela.style.display = 'flex'
        areaCards.style.display = 'none'
        iconTabela.style = 'background: #004FDA; color: #fff;'
        iconCards.style = 'background: transparent; color: #004FDA;'
    })
