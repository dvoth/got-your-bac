<!DOCTYPE html>
<html>
    <header>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="../src/css/data.css">
        <link rel="stylesheet" href="../src/css/charts.css">
        <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    </header>
    <body class="w3-container">

        <button id="homebtn" class="w3-button w3-green w3-xlarge w3-display-topleft" onclick="return_home()">
            <i class="fas fa-home"></i>
        </button>

        <div class="w3-card-2 w3-light-green w3-topbar w3-bottombar w3-border-green" style="width: 40%; margin-left: 30%; margin-right: 30%; margin-top: 2%;">
            <h1>Got Your BAC</h1>
        </div>

        <!-- Copyright (c) 2018 by zuraiz (https://codepen.io/zuraizm/pen/vGDHl)

        Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

        The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

        THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE. -->
        
        <a href="#" class="control_next">></a>
        <div id="slider">
            <ul>
                <li style="position: relative; height:40vh; width:80vw"><canvas id="bacChart" class="w3-display-topmiddle" style="position: relative; height:40vh; width:80vw"></canvas></li>
                <li style="position: relative; height:40vh; width:80vw"> <canvas id="barGraph" class="w3-display-topmiddle" style="position: relative; height:40vh; width:80vw"></canvas></li>
                <li style="position: relative; height:40vh; width:80vw"><canvas id="drinkGraph" class="w3-display-topmiddle" style="position: relative; height:40vh; width:80vw"></canvas></li>
            </ul>  
        </div>
        <a href="#" class="control_prev"><</a>

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
        <script>
            function return_home(){
                location.href = "../dist/index.php";
            }
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="../src/backend.js"> </script>
        <script src="../node_modules/chart.js/dist/Chart.bundle.min.js"></script>
        <script src="../src/charts.js"></script>
        <script src="../src/NumOfDrinks.js"></script>
        <script src="../src/bacChart.js"></script>
        <script src="../src/barGraph.js"></script>
    </footer>
</html>