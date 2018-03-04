<?php
include('config.php');

?>
<html>

    <head>
        <!-- BootStrap Library
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
        <!-- w3 CSS -->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="../src/css/fill_chart.css">
        <!-- Font Awesome CDN -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

        <title>Got Your Bac</title>
        <meta charset="utf-8">

    </head>

    <body>
 
        <!-- https://codepen.io/junebug12851/pen/mJZNqN -->
            <!--
            Inspired by Code Pen User
            Jamie Dixon, with this pen
            https://codepen.io/JamieDixon/pen/Pqrjvv

            I cleaned up a lot of errors and redundant stuff
            then made it more awesome and customizeable
            -->

        <div class="wrapper w3-display-container w3-display-middle">
                
                <div class="green">
                <div class="progress">
                    <div class="inner">
                    <div class="percent"><span>.00</span></div>
                    <div class="water"></div>
                    <div class="glare"></div>
                    </div>
                </div>
                </div>
                
                <span>Current BAC: <input type="text" placeholder="0" id="percent-box"></span><br>
                
                <div class="w3-display-container w3-display-topmiddle" style="width: 80%">
                    
                    <div id="twentyfivewarn" class="hidden informational w3-panel w3-pale-red w3-card-4 w3-round w3-leftbar w3-rightbar w3-topbar w3-bottombar w3-border w3-border-red">
                        <p>
                            Being this drunk means that you run the risk of vomiting in your sleep. It's definitely time to stop. 
                        </p>
                    </div>

                    <div id="twentywarn" class="hidden informational w3-panel w3-pale-red w3-card-4 w3-round w3-leftbar w3-rightbar w3-topbar w3-bottombar w3-border w3-border-red">
                        <p>
                            You should be careful - this drunk, you're prone to blackouts. 
                        </p>
                    </div>

                    <div id="sixteenwarn" class="hidden informational w3-panel w3-pale-red w3-card-4 w3-round w3-leftbar w3-rightbar w3-topbar w3-bottombar w3-border w3-border-red">
                        <p> 
                            Not trying to be your mother, but soon you're gonna be a sloppy joe.
                            <br>
                            Cut the liquor and stick to some water.
                        </p>
                    </div><br><br>

                    <div id="thirteenwarn" class="hidden informational w3-panel w3-orange w3-card-4 w3-round w3-round w3-leftbar w3-rightbar w3-topbar w3-bottombar w3-border w3-border-amber">
                        <p> 
                            Things are probably getting a little fuzzy now. Take a thirty minute water break?
                        </p>
                    </div><br><br><br><br>

                    <div id="eightwarn" class="hidden informational w3-panel w3-orange w3-card-4 w3-round w3-round w3-leftbar w3-rightbar w3-topbar w3-bottombar w3-border w3-border-amber">
                        <p> 
                            <header>
                                Currently, you cannot drive. If you need to leave, call a ride. Here are some options: 
                            </header>
                        </p>
                        <div><br>
                            <a href ="https://www.uber.com"><img src="../src/images/Uber.png" id="ublogo" alt="uber"></a>
                            <a href = "https://www.lyft.com"><img src="../src/images/lyft-logo.png" id="lylogo" alt="lyft" ></a>
                            <a href = "https://google.com"><img src="../src/images/phoneicon.jpg" id="phonelogo" alt="phone" ></a>
                        </div>
                    </div><br>
                    
                    <div id="sixwarn" class="hidden informational w3-panel w3-light-green w3-card-4 w3-round w3-leftbar w3-rightbar w3-topbar w3-bottombar w3-border w3-border-green">
                    </div>

                    <div id="greeting" class="hidden informational w3-panel w3-light-gray w3-card-4 w3-round w3-leftbar w3-rightbar w3-topbar w3-bottombar w3-border w3-border-gray">
                    </div>

                </div>

                <section id="copyright">
                <div>(c) 2015 John Mothershed - <a href="https://opensource.org/licenses/MIT">License MIT</a> </div>
                
                <div>Work is modified and inspired from <a href="https://codepen.io/JamieDixon/pen/Pqrjvv">Jamie Dixon's pen</a></div>
                </section>
            </div>
            <button onClick="updateBac(.4)">Update</button>
            <button onClick="drinksPerUnit('month', 1)">Timeframe</button>
      
        <!-- Form for user input. -->

        <div id="register" class="w3-sidebar w3-bar-block w3-display-container w3-display-topleft w3-animate-left" style="display:none">
            <button onclick="w3_close()" class="w3-bar-item w3-button w3-large" class="closeButton">
                <i class="fas fa-times"></i>
            </button>
            <div id="registration" class="w3-container">
                <div>
                    <label for="usernameInput">Username: </label>
                    <input id="usernameInput" type="text" class="required w3-input" style="width: 30%">
                    <br>
                    <label for="passwordInput">Password: </label>
                    <input id="passwordInput" type="password" class="required w3-input" style="width: 30%">
                    <br>
                    <label for="nameInput">Name: </label>       
                    <input id = "nameInput" type="text" class="required w3-input" style="width: 30%">
                    <br>   
                    <label for="weightInput" style="float: left">Weight: </label>
                    <input id = "weightInput" type="text" class="required w3-input">
                    <br>
                    <label for="ageInput">Age: </label>
                    <input id = "ageInput" type="text" class="required w3-input" style="width: 30%">
                    <br>
                    <label for="genderInput">Gender (M or F): </label>
                    <br>
                    <label for="m">M: &nbsp;</label>
                    <input class ="genderInput w3-radio" id="m" type="radio" name="gender" value="male"> 
                    <br>
                    <label for="f">F: &ensp;&nbsp;</label>  
                    <input class ="genderInput w3-radio" id="f" type="radio" name="gender" value="female">
                    <br><br>
                    <button id="submit" class="w3-button w3-black w3-hover-green">Submit</button>
                </div>
            </div>
        </div>
        <button class="w3-button w3-green w3-xlarge" onclick="w3_open()">
            <i class="fas fa-user-plus"></i>
        </button>

        <div id="login" class="w3-sidebar w3-bar-block w3-display-container w3-display-topleft w3-animate-left" style="display:none">
            <button onclick="w3_close_login()" class="w3-bar-item w3-button w3-large">
                <i class="fas fa-times"></i>
            </button>
            <div id="login" class="w3-container">
                <div>
                    <label for="userLogin">Username: </label>
                    <input class="w3-input" type="text">
                    <br>
                    <label for="userPass">Password: </label>
                    <input class="w3-input" type="password">
                    <br>
                    <button id="login" class="w3-button w3-black w3-hover-green">Login</button>
                </div>
            </div>
        </div>
        <button class="w3-button w3-green w3-xlarge" onclick="w3_open_login()">
            <i class="fas fa-sign-in-alt"></i>
        </button>
                   
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <!-- JS file for the fill bubble -->
        <script src="../src/fill_chart.js"></script>
        <!-- Backend JS for BAC calculation -->
        <script src="../src/backend.js"></script>
        <script>
            function w3_open() {
                document.getElementById("register").style.width = "40%";
                document.getElementById("register").style.height = "90%";
                document.getElementById("register").style.display = "block";
            }
            function w3_close() {
                document.getElementById("register").style.display = "none";
            }
            function w3_open_login() {
                document.getElementById("login").style.width = "40%";
                document.getElementById("login").style.height = "40%";
                document.getElementById("login").style.display = "block";
            }
            function w3_close_login() {
                document.getElementById("login").style.display = "none";
            }
        </script>

        <script>
            function updateBac() {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        $("#percent-box").val(this.responseText);
                    }
                };
                xmlhttp.open("GET", "api/addDrink.php?bac=.04&id=1", true);
                xmlhttp.send();
            }

            function drinksPerUnit(timeframe, userId) {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        alert(this.responseText);
                    }
                };
                xmlhttp.open("GET", "api/drinksPerUnit.php?timeframe=" + timeframe + "&id=" + userId, true);
                xmlhttp.send();
            }
        </script>
    </body>

</html>

<?php

?>