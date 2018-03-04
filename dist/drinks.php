<?php

include 'config.php';

?>
<html>

    <head>
        <!-- BootStrap Library -->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="../src/css/fill_chart.css">
        <link rel="stylesheet" href="../src/css/drinks.css">

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
                
            <div class="drinks-container w3-display-topright"> 
              <div class="drink beer">
                <div>
                  <svg viewbox="0 0 201 350" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve">
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
                </div>
                <div class="w3-row">
                    <input type="text" class="w3-input" name="amount"/>
                    <label for="amount">oz</label>
                    <input type="text" class="w3-input" name="percentage"/>
                    <label for="amount">%</label>
                    <button class="beer-std-drink w3-button w3-dark-grey w3-round">Add drink</button>
                </div>
              </div>
              <div class="custom-drinks">
                <p>test</p>
              </div>
            </div>
        </div>
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="../src/drinks.js"></script>
    </body>
</html>
