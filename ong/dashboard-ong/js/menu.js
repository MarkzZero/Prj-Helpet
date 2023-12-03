/* Menu */
let list = document.querySelectorAll('.navegation li');
function activeLink(){
    list.forEach((item) =>
    item.classList.remove('hovered'));
    this.classLis.add('hovered')
}
list.forEach((item) =>
item.addEventListener('mouseover', activeLink));

let toggle = document.querySelector('.toggle');
let navegation = document.querySelector('.navegation');
let main = document.querySelector('.main');

toggle.onclick = function(){
    navegation.classList.toggle('active');
    main.classList.toggle('active');
}