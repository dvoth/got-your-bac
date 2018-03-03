<html>

    <head>
        <!-- BootStrap Library -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="../src/css/fill_chart.css">

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

        <div class="wrapper">
                
                <div class="green">
                <div class="progress">
                    <div class="inner">
                    <div class="percent"><span>.00</span></div>
                    <div class="water"></div>
                    <div class="glare"></div>
                    </div>
                </div>
                </div>
                
                <span>Enter Percentage: <input type="text" placeholder="0" id="percent-box">%</span>
                
                <section id="copyright">
                <div>(c) 2015 John Mothershed - <a href="https://opensource.org/licenses/MIT">License MIT</a> </div>
                
                <div>Work is modified and inspired from <a href="https://codepen.io/JamieDixon/pen/Pqrjvv">Jamie Dixon's pen</a></div>
                </section>
            </div>
      
        <!-- Form for user input. -->

        <div id="user">
            <h1>User Info</h1>
            <form class="userForm">
                <label for="nameInput">Name: </label>       
                <input id = "nameInput" type="text" placeholder="Name" class="required">
                <br>   
                <label for="weightInput">Weight: </label>
                <input id = "weightInput" type="text" placeholder="Weight" class="required">
                <br>
                <label for="ageInput">Age: </label>
                <input id = "ageInput" type="text" placeholder="Age" class="required">
                <br>
                <label for="genderInput">Gender (M or F): </label>
                <input id = "genderInput" type="text" placeholder="Gender" class="required">
                <br>
                <button id="submit">Submit</button>
            </form>
        </div>

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

    </body>

</html>

<?php

?>