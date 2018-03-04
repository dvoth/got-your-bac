var d = new Date();
var time = d.getDay();
if(time > 31){
     time = time - 12; 
}

var t1 = time +1;
var t2 = time +2;
var t3 = time +3;
var t4 = time +4;
var t5 = time +5;
var t6 = time +6;

var testdata;

$.ajax({
    async: false,
    url:'api/drinksByDayOfWeek.php',
    type:'get',
    success:function(data){
        testdata = JSON.parse(data)
    }
});

console.log(testdata);
                
var ctx = document.getElementById("drinkGraph");
var drinkgraph = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [time, t1, t2, t3, t4, t5, t6],
        xAxisID: 'DAY', 
        yAxisID: 'Number of Drinks',
        datasets: [{
            label: 'Number of Drinks Per Day From the Last Week',
            
            data: testdata,
            backgroundColor: [
                'rgba(139,195,74, 0.2)'
            ],
            borderColor: [
                'rgba(139,195,74,1)'
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
