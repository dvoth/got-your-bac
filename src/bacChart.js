
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
}if(t6 > 12){
    t6  = t6 - 12;    
}
if(t7 > 12){
    t7  = t7 - 12;    
}if(t8 > 12){
    t8  = t8 - 12;    
}
if(t9 > 12){
    t9  = t9 - 12;    
}if(t10 > 12){
    t10  = t10 - 12;    
}
if(t11 > 12){
    t11  = t11 - 12;    
}if(t12 > 12){
    t12  = t12 - 12;    
}
if(t13 > 12){
    t13  = t13 - 12;    
}
if(t14 > 12){
    t14  = t14 - 12;    
}

var url = window.location.search;
console.log(url);
url = url.replace("?bac=", '');
console.log(url);
foundBac = Number(url);
console.log(foundBac);
var decrement = 0.015;
var ctx = document.getElementById("bacChart");
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: [time, t1, t2, t3, t4, t5, t6, t7, t8, t9, t10, t11, t12],
        xAxisID: 'TIME', 
        yAxisID: 'BAC LEVEL',
        datasets: [{
            label: 'BAC Level over time',
            
            data: [foundBac, (foundBac -decrement) ,(foundBac - (2*decrement)), (foundBac -(3*decrement)), (foundBac -(4*decrement)), (foundBac -(5*decrement)), (foundBac -(6*decrement)), (foundBac -(7*decrement), (foundBac -(8*decrement)), (foundBac - (9*decrement)), (foundBac - (10*decrement)), (foundBac - (11*decrement)), (foundBac - (12*decrement)))],
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
                    labelString: 'TIME'
                  }
            }]
        }
    }
}); 

