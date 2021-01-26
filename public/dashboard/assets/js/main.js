// shipment activities
$(function() {
        $('.chart').easyPieChart({
        size: 50,
        barColor: '#007BFF',
        scaleColor: false,
        lineWidth: 5,
        trackColor: '#ebeff0',
        lineCap: 'circle'

    });
});

// shipment list
$(function() {
        $('.chart2').easyPieChart({
        size: 55,
        barColor: '#007BFF',
        scaleColor: false,
        lineWidth: 5,
        trackColor: '#ebeff0',
        lineCap: 'circle'

    });
});

// order categories
let labels1 = ['YES', 'YES BUT IN GREEN'];
let data1 = [69, 31];
let colors1 = ['#01a8ec', '#36CAAB'];

let myDoughnutChart = document.getElementById("myChart").getContext('2d');

let chart1 = new Chart(myDoughnutChart, {
    type: 'doughnut',
    data: {
        labels: ['YES', 'YES BUT IN GREEN'],
        datasets: [ {
            data: [69, 31],
            backgroundColor: ['#49A9EA', '#36CAAB']
        }]
    },
    options: {
        title: {
            display: true
        }
    }
});

// deliveries
let labels2 = ['Jan', 'Feb', 'Mar', 'Apr'];
let data2 = [199.6, 130.3, 126.3, 130];
let colors2 = ['#49A9EA', '#36CAAB', '#34495E', '#B370CF'];

let myChart2 = document.getElementById("myChart2").getContext('2d');

let chart2 = new Chart(myChart2, {
    type: 'bar',
    data: {
        labels: labels2,
        datasets: [ {
            data: data2,
            backgroundColor: colors2
        }]
    },
    options: {
        title: {
            display: true
        },
        legend: {
          display: false
        }
    }
});

// sale forcast
let labels3 = ['Sat', 'Sun', 'Mon', 'Tue', 'Wed', 'Thus', 'Fri'];
let data3 = [199.6, 130.3, 126.3, 93, 130, 100, 110];
let colors3 = ['#49A9EA', '#36CAAB', '#34495E', '#B370CF'];

let myChart3 = document.getElementById("saleForcast").getContext('2d');

let chart3 = new Chart(myChart3, {
    type: 'bar',
    data: {
        labels: labels3,
        datasets: [ {
            data: data3,
            backgroundColor: colors3
        }]
    },
    options: {
        title: {
            display: true
        },
        legend: {
          display: false
        }
    }
});


