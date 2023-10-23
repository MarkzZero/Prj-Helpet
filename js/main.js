/* BOTÕES CARDS BENEFÍCIOS */

// Select button Card Laranja
var buttonLaranja = document.querySelector('#card-laranja .read_button');

// Click Event
buttonLaranja.addEventListener('click', function() {
    // Select card
    var card = document.querySelector('#card-laranja');

    // Add/Remove Class Active
    card.classList.toggle('active');
});

// Select button Card Azul
var buttonAzul = document.querySelector('#card-azul .read_button');

// Click Event
buttonAzul.addEventListener('click', function() {
    // Select card
    var card = document.querySelector('#card-azul');

    // Add/Remove Class Active
    card.classList.toggle('active');
});



/* MENU */
var ul = document.querySelector('nav .area-links');
var menuBtn = document.querySelector('.menu-btn i');

function menuShow() {
    if (ul.classList.contains('open')) {
        ul.classList.remove('open');
        menuBtn.classList.replace('fi-br-cross-small', 'fi-br-menu-burger')
    }else{
        ul.classList.add('open');
        menuBtn.classList.replace('fi-br-menu-burger', 'fi-br-cross-small')
    }
}