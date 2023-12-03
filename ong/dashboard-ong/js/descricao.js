/* Descrição Ler Mais e Ler Menos */
document.querySelectorAll('.area-descricao').forEach(function (el) {
    var fullText = el.querySelector('.full-text');
    var shortText =  el.querySelector('.short-text');
    
    if (! shortText) return;
    
    el.querySelector('.read-more').addEventListener('click', function () {
       fullText.style.display = 'flex';
       shortText.style.display = 'none';
    })
    
    el.querySelector('.read-less').addEventListener('click', function () {
       fullText.style.display = 'none';
       shortText.style.display = 'flex';
    })
 })