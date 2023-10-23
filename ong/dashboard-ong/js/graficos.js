//Menu
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


//GRAFICO
const ctx = document.getElementById('myChart');

Chart.defaults.font.size = 16;

new Chart(ctx, {
  type: 'line',
  data: {
    labels: ['Jan', 'Fev', 'Mar', 'Mai', 'Abr'],
    datasets: [
        {
            label: 'Cachorros',
            data: [3, 1, 3, 5, 2, 3],
            backgroundColor: "#0d8af2",
            borderColor: "#0d8af2",
            borderWidth: 4,
        },
        {
            label: 'Gatos',
            data: [3, 7, 1, 4, 9, 8],
            backgroundColor: "#ffac33",
            borderColor: "#ffac33",
            borderWidth: 4,
        }
    ],
  },
  options: {
    indexAxis: 'x',

    plugins: {
        legend: {
            labels: {
                font: {
                    size: 14
                }
            }
        }
    },
  }
});