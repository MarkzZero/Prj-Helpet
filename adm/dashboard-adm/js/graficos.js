
const ctx = document.getElementById('myChart');

Chart.defaults.font.size = 16;

new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: [
        'Usuários',
        'ONGs',
        'Anunciantes'
      ],
      datasets: [{
        label: 'Quantidade',
        data: [150, 50, 70],
        backgroundColor: [
          '#72B0FF',
          '#377DE2',
          '#054bc5'
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


const ctx2 = document.getElementById('myChart2');

Chart.defaults.font.size = 16;

new Chart(ctx2, {
  type: 'pie',
  data: {
    labels: [
        'Gatos',
        'Cachorros',
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
