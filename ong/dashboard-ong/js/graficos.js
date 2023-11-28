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

/* Gráficos */
const ctx2 = document.getElementById('myChart');

Chart.defaults.font.size = 16;

new Chart(ctx2, {
  type: 'pie',
  data: {
    labels: [
        'Adoções',
        'Apadrinhamentos',
      ],
      datasets: [{
        label: 'Quantidade',
        data: [100, 70],
        backgroundColor: [
          '#FFBD49',
          '#FF8903',
        ],
        hoverOffset: 4
      }]
  },
  options: {
    indexAxis: 'x',

    plugins: {
        legend: {
            labels: {
                font: {
                    size: 16,
                }
            }
        }
    },
  }
});


const ctx = document.getElementById('myChart2');

Chart.defaults.font.size = 16;

new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: [
        'Gatos',
        'Cachorros',
      ],
      datasets: [{
        label: 'Quantidade',
        data: [150, 80],
        backgroundColor: [
          '#72B0FF',
          '#377DE2',
        ],
        hoverOffset: 4
      }]
  },
  options: {
    indexAxis: 'x',

    plugins: {
        legend: {
            labels: {
                font: {
                    size: 16,
                }
            }
        }
    },
  }
});
