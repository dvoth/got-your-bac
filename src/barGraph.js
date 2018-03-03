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

var ctx = document.getElementById("barGraph");
var bargraph = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [time, t1, t2, t3, t4, t5, t6],
        xAxisID: 'DAY', 
        yAxisID: 'NUM OF DRINKS',
        datasets: [{
            label: 'Number of Drinks Per Day',
            
            data: [1,2,3,4,5,6, 7],
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
                },
                scaleLabel: {
                    display: true,
                    labelString: 'Number of Drinks'
                  }
            }],
            xAxes:[{
                ticks: {
                    beginAtZero:true,
                    max:31
                },
                scaleLabel: {
                    display: true,
                    labelString: 'Day'
                  }
            }]
        }
    }
});
document.getElementById("barButton").onclick = function () {
    document.getElementById("barGraph").innerHTML = bargraph;
    };