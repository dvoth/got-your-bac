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
        <link rel="stylesheet" href="../src/css/drinks.css">

        <title>Got Your Bac</title>
        <meta charset="utf-8">

    </head>

    <body class="w3-display-container">
 
        <!-- https://codepen.io/junebug12851/pen/mJZNqN -->
            <!--
            Inspired by Code Pen User
            Jamie Dixon, with this pen
            https://codepen.io/JamieDixon/pen/Pqrjvv

            I cleaned up a lot of errors and redundant stuff
            then made it more awesome and customizeable
            -->

        <!--
        Copyright (c) 2018 by June Hanabi (https://codepen.io/junebug12851/pen/mJZNqN)

        Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
        -->
        <div class="wrapper w3-display-container w3-display-middle">
                <br><br><br>
                <div class="green">
                <div class="progress">
                    <div class="inner">
                    <div class="percent"><span>.00</span></div>
                    <div class="water"></div>
                    <div class="glare"></div>
                    </div>
                </div>
                </div>
                
                <span>Standard Drinks: <input type="text" placeholder="0" id="percent-box" readonly></span><br>
                
                <div class="w3-display-container w3-display-topmiddle" style="width: 80%">
                    
                    <div id="twentyfivewarn" class="hidden informational w3-panel w3-pale-red w3-card-4 w3-round w3-leftbar w3-rightbar w3-topbar w3-bottombar w3-border w3-border-red w3-top">
                        <p>
                            Being this drunk means that you run the risk of vomiting in your sleep. It's definitely time to stop. 
                        </p>
                    </div>

                    <div id="twentywarn" class="hidden informational w3-panel w3-pale-red w3-card-4 w3-round w3-leftbar w3-rightbar w3-topbar w3-bottombar w3-border w3-border-red w3-top">
                        <p>
                            You should be careful - this drunk, you're prone to blackouts. 
                        </p>
                    </div>

                    <div id="sixteenwarn" class="hidden informational w3-panel w3-pale-red w3-card-4 w3-round w3-leftbar w3-rightbar w3-topbar w3-bottombar w3-border w3-border-red w3-top">
                        <p> 
                            Not trying to be your mother, but soon you're gonna be a sloppy joe.
                            <br>
                            Cut the liquor, you'll sober  quicker.
                        </p>
                    </div><br><br>

                    <div id="thirteenwarn" class="hidden informational w3-panel w3-orange w3-card-4 w3-round w3-round w3-leftbar w3-rightbar w3-topbar w3-bottombar w3-border w3-border-amber w3-top">
                        <p> 
                            Things are probably getting a little fuzzy now. Take a thirty minute water break?
                        </p>
                    </div><br><br><br><br>

                    <div id="eightwarn" class="hidden informational w3-panel w3-orange w3-card-4 w3-round w3-round w3-leftbar w3-rightbar w3-topbar w3-bottombar w3-border w3-border-amber w3-top">
                        <p> 
                            
                                You cannot drive. If you need to leave, call a ride. Here's some options: 
                           
                        
                        <div>
                            <a href ="https://www.uber.com"><img src="../src/images/Uber.png" id="ublogo" alt="uber"></a>
                            <a href = "https://www.lyft.com"><img src="../src/images/lyft-logo.png" id="lylogo" alt="lyft" ></a>
                            <a href = "https://google.com"><img src="../src/images/phoneicon.jpg" id="phonelogo" alt="phone" ></a>
                        </div>
                    </p>
                    </div><br>
                    
                    <div id="sixwarn" class="hidden informational w3-panel w3-light-green w3-card-4 w3-round w3-leftbar w3-rightbar w3-topbar w3-bottombar w3-border w3-border-green w3-top">
                    <p>You're probably feeling pretty good right now! Make sure you don't over do it!</p>
                    </div>

                    <div id="greeting" class="wrapper informational w3-panel w3-light-gray w3-card-4 w3-round w3-leftbar w3-rightbar w3-topbar w3-bottombar w3-border w3-border-gray w3-top">
                         <p>
                            Here, we got your bac... literally.<br> This app is design to make drinkers aware of how much they've consumed 
                            and what level their blood alcohol content is at. Please make sure you log in so you can start tracking your
                            drinks!
                        </p>
                    </div>

                </div>
                <footer>

                DISCLAIMER: Got Your BAC is merely an estimate to help you gauge your Blood Alcohol Content
                We are not responsible for an accidents or liable for any misconduct that happens while using 
                the app. If you have even a SINGLE DRINK we do not encourage driving. We encourage you to have 
                someone who actually has your actual back, while we try to have your BAC.<br>

                Work is modified and inspired from <a href="https://codepen.io/JamieDixon/pen/Pqrjvv">Jamie Dixon's pen</a> <br>
                
                (c) 2015 John Mothershed - <a href="https://opensource.org/licenses/MIT">License MIT</a> 
                
                </footer>
            </div>
      
        <!-- Form for user input. -->

        <div id="register" class="w3-sidebar w3-bar-block w3-display-container w3-display-topleft w3-animate-left sidebaropen" style="display:none">
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
                    <button onclick=" w3_close()" id="submit" class="w3-button w3-black w3-hover-green sidebarbtn">Submit</button>
                </div>
            </div>
        </div>
        <button id="registrationbtn" class="w3-button w3-green w3-xlarge" onclick="w3_open()">
            <i class="fas fa-user-plus"></i>
        </button>

        <div id="login" class="w3-sidebar w3-bar-block w3-display-container w3-display-topleft w3-animate-left sidebaropen" style="display:none">
            <button onclick="w3_close_login()" class="w3-bar-item w3-button w3-large">
                <i class="fas fa-times"></i>
            </button>
            <div id="login" class="w3-container">
                <div>
                    <label for="userLogin">Username: </label>
                    <input class="w3-input" type="text" style="width: 30%">
                    <br>
                    <label for="userPass">Password: </label>
                    <input class="w3-input" type="password" style="width: 30%">
                    <br>
                    <button id="login" class="w3-button w3-black w3-hover-green sidebarbtn">Login</button>
                </div>
            </div>
        </div>
        <button id="loginbtn" class="w3-button w3-green w3-xlarge" onclick="w3_open_login()">
            <i class="fas fa-sign-in-alt"></i>
        </button>

        <button id="datapage" class="w3-button w3-green w3-xlarge" onclick="navigate_to_data_page()">
            <i class="fas fa-chart-line"></i>
        </button>

            <!--
        Copyright (c) 2018 by evilpingwin (https://codepen.io/evilpingwin/pen/LNVWYa)

        Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
        -->
        <div id="adddrinks" class="w3-sidebar w3-bar-block w3-display-right w3-animate-right w3-dark-gray" style="display:none">
            <button onclick="open_drink_adder_close()" class="w3-bar-item w3-button w3-large">
                <i class="fas fa-times"></i>
            </button>
            <div class="drinks-container w3-display-topright w3-dark-gray"> 
                <div class="drink beer">
                    <div>
                        <div class="" id="notLoggedNotifier"><p>In order to record drinks, you need to be signed in as a user.</p></div>
                        <div class="hidden" id="loggedNotifier"><p></p></div>
                        <svg id="beerGlass" viewbox="0 0 201 350" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve">
                            <defs>
                                <clipPath id="beer-clippath">
                                <path d="M41.17,330c-0.375,0 -0.75,-0.053 -1.1,-0.142l-0.07,-0.018c-1.81,-0.5 -3.19,-2.15 -3.36,-4.19l-25,-305.65l-0.092,0l-1.656,-20l180.217,0l-1.657,20l-0.092,0l-25,305.64c-0.21,2.47 -2.17,4.36 -4.54,4.36l-117.65,0Z" fill="#000"/>
                                </clipPath>
                            </defs>
                            <image xlink:href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/395186/beer-pint-base.svg" x="0" y="0" width="100%" height="100%"/>
                            <g class="glass-fill" clip-path="url(#beer-clippath)">
                                <rect x="0" y="20" width="41" height="330"/>
                                <rect x="40" y="20" width="31" height="330"/>
                                <rect x="70" y="20" width="31" height="330"/>
                                <rect x="100" y="20" width="100" height="330"/>
                                <rect class="froth" x="0" y="0" width="210" height="20"/>
                            </g>
                        </svg>
                        <br>
                    </div>
                    <div class="w3-row" id="alchInput">
                        <label for="amount">Fluid oz:</label>
                        <input type="text" class="w3-input w3-dark-gray" name="amount" id="amount"/>
                        <label for="percentage">Percent Alcohol: </label>
                        <input type="text" class="w3-input w3-dark-gray" name="percentage" id="percentage"/>
                        <button id="submitDrink" class="beer-std-drink w3-button w3-white w3-round">Add Drink</button>
                    </div>
                </div>
            </div>
        </div>
        <button id="drinkbtn" class="w3-button w3-green w3-xlarge w3-display-right" style="height: 100%" onclick="open_drink_adder_open()">
            <i class="fas fa-beer"></i>
        </button>

        <div id="party" class="w3-sidebar w3-bar-block w3-display-container w3-display-topleft w3-animate-left sidebaropen" style="display:none">
            <button onclick="party_close()" class="w3-bar-item w3-button w3-large">
                <i class="fas fa-times"></i>
            </button>
            <div id="party_registration" class="w3-container">
              
            <button id = "createP">Create Party</button>
            <div id="userList"></div>  
               
            </div>
        </div>
        <button id="partybtn" class="w3-button w3-green w3-xlarge" onclick="party_open()">
            <i class="fas fa-users"></i>
        </button>
                   
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <!-- Backend JS for BAC calculation -->
        <script src="../src/backend.js"></script>
        <!-- JS file for the fill bubble -->
        <script src="../src/fill_chart.js"></script>
        <script>
            function w3_open() {
                document.getElementById("register").style.width = "30%";
                document.getElementById("register").style.height = "90%";
                document.getElementById("register").style.display = "block";
            }
            function w3_close() {
                document.getElementById("register").style.display = "none";
            }
            function w3_open_login() {
                document.getElementById("login").style.width = "20%";
                document.getElementById("login").style.height = "40%";
                document.getElementById("login").style.display = "block";
            }
            function w3_close_login() {
                document.getElementById("login").style.display = "none";
            }
            function navigate_to_data_page() {
                location.href = "../dist/bacChart.php";
            }
            function open_drink_adder_close(){
                document.getElementById("adddrinks").style.display = "none";
            }
            function open_drink_adder_open(){
                document.getElementById("adddrinks").style.width = "21%";
                document.getElementById("adddrinks").style.height = "100%";
                document.getElementById("adddrinks").style.display = "block";
            }
            function party_close(){
                document.getElementById("party").style.display = "none";
            }
            function party_open(){
                document.getElementById("party").style.width = "21%";
                document.getElementById("party").style.height = "100%";
                document.getElementById("party").style.display = "block";
            }
        </script>
        <script src="../src/drinks.js"></script>
        <script>
            function updateBac(bac) {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        $("#percent-box").val(this.responseText);
                    }
                };
                xmlhttp.open("GET", "api/addDrink.php?bac=" + .04 + "&id=1", true);
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