<!DOCTYPE html>
<html>
<body>

<p>Click the button to display the hour of the time right now.</p>

<button onclick="myFunction()">Try it</button>

<p id="demo"></p>

<canvas id="myChart" width="400" height="400"></canvas>
<script>
var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});

var myLineChart = new Chart(ctx, {
    type: 'line',
    data: data,
    options: options
});
document.getElementById("mychart").innerHTML = myLineChart;
</script>

<script>

function myFunction() {
    var d = new Date();
    var n = d.getHours();
    document.getElementById("demo").innerHTML = n;
}
</script>

</body>

<footer> <script src="../node_modules/chart.js/dist/Chart.bundle.min.js"></script></footer>
</html>