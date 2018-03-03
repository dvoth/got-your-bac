
var d = new Date();
var time = d.getHours();
if(time > 12){
     time = time - 12; 
     t = time;
}
var t;
var t1 = time +1;
var t2 = time +2;
var t3 = time +3;
var t4 = time +4;
var t5 = time +5;
var t6 = time +6;
var t7 = time +7;
var t8 = time +8;
var t9 = time +9;
var t10 = time +10;
var t11 = time +11;
var t12 = time +12;
var t13 = time +13;
var t14 = time +14;

if(t1 > 12){
     t1  = t1 - 12; 
}
 if(t2 > 12){
     t2  = t2 - 12; 
}
if(t3 > 12){
     t3  = t3 - 12; 
}
if(t4 > 12){
     t4  = t4 - 12;    
}
if(t5 > 12){
     t5  = t5 - 12;    
}

var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: [time, t1, t2, t3, t4, t5, t6, t7, t8, t9, t10, t11, t12],
        xAxisID: 'TIME', 
        yAxisID: 'BAC LEVEL',
        datasets: [{
            label: 'BAC Level over time',
            
            data: [0.18, 0.165,0.15, 0.135, 0.12, 0.105, 0.09, 0.075, 0.065, 0.032, 0.020, 0.010, 0.007],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)'
            ],
            borderWidth: 0.5,
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true,
                    min: 0,
                    max: 0.3
                },
                scaleLabel: {
                    display: true,
                    labelString: 'BAC Level'
                  }
            }],
            xAxes:[{
                scaleLabel: {
                    display: true,
                    labelString: 'TIME (hours)'
                  }
            }]
        }
    }
});

document.getElementById("myChart").innerHTML = myChart;
document.getElementById("myButton").onclick = function () {
    location.href = "../dist/index.php";
    };