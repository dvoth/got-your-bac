<!DOCTYPE html>
<html>
    <header>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="../src/css/data.css">
        <link rel="stylesheet" href="../src/css/charts.css">
        
    </header>
    <body>

        <h1>Got Your BAC</h1>
        <div id="slider">
        <a href="#" class="control_next">>></a>
        <a href="#" class="control_prev"><</a>
        <ul>
            <li><canvas id="bacChart" class="w3-display-topmiddle"></canvas></li>
            <li> <canvas id="barGraph" class="w3-display-topmiddle"></canvas></li>
            <li>SLIDE 3</li>
        </ul>  
        </div>

       <!--  <div class="chartWrapper">
            <div class="chartAreaWrapper">
            <button id="homeButton" class="float-left submit-button" >Home</button>
               <script>
                    document.getElementById("homeButton").onclick = function () {
                    location.href = "../dist/index.php";
                    };
                </script>
                <button id="bacButton" class="float-left submit-button" >BAC Level</button>
                <button id="barButton" class="float-left submit-button" >Bar Graph</button>
                <canvas id="bacChart" class="w3-display-topmiddle"></canvas>
                <canvas id="barGraph" class="w3-display-topmiddle"></canvas>

            </div>
        </div> -->

    </body>

    <footer> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="../src/backend.js"> </script>
        <script src="../node_modules/chart.js/dist/Chart.bundle.min.js"></script>
        <script src="../src/charts.js"></script>
        <script src="../src/bacChart.js"></script>
        <script src="../src/barGraph.js"></script>
    </footer>
</html>