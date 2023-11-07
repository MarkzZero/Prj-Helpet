

// Select button
var button2 = document.getElementById('read_button2');

// Click Event
button2.addEventListener('click', function() {
    // Select card
    var card2 = document.querySelector('#card-azul');


    // Add/Remove Class Active
    card2.classList.toggle('active');


    if (card2.classList.contains('active')) {
        // Change button text if has class active
        //return button.textContent = 'Ler menos';
    }
    
    // Change button text if hasn't class active
    //button.textContent = 'Ler mais';
});


/* Menu */
var ul = document.querySelector('nav ul');
var menuBtn = document.querySelector('.menu-btn i');

function menuShow() {
    if (ul.classList.contains('open')) {
        ul.classList.remove('open');
    }else{
        ul.classList.add('open');
    }
}
