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

var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        testdata = this.responseText;
                        console.log(testdata);
                        JSON.stringify(testdata);
                        JSON.parse(testdata);
                        console.log(testdata.replace('"y"', 'y'));
                        JSON.parse(testdata);
                    }
                };
                xmlhttp.open("GET", "api/drinksPerUnit.php?timeframe=month&id=1", true);
                xmlhttp.send();
                
var ctx = document.getElementById("barGraph");
var bargraph = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [time, t1, t2, t3, t4, t5, t6],
        xAxisID: 'DAY', 
        yAxisID: 'NUM OF DRINKS',
        datasets: [{
            label: 'Number of Drinks Per Day',
            
            data: testdata,
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