//NOTIFICAÇÕES
var button = document.getElementById('read_button');

// Click Event
button.addEventListener('click', function() {
    // Select card
    var card = document.querySelector('.not');


    // Add/Remove Class Active
    card.classList.toggle('active');


    if (card.classList.contains('active')) {
        // Change button text if has class active
        //return button.textContent = 'Ler menos';
    }
    
    // Change button text if hasn't class active
    //button.textContent = 'Ler mais';
});