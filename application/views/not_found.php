<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-color: #141724;
            margin: 0px auto;
            font-family: sans-serif;
        }

        #help {
            position: absolute;
            color: white;
            z-index: 1;
            margin-left: 100px;
            margin-top: 50px;
        }

        #help h1 {
            font-weight: lighter;
            font-size: 150%;
        }

        #help h2 {
            font-weight: bolder;
            font-size: 170%;
        }

        #help a {
            display: block;
            height: 50px;
            width: 200px;
            text-decoration: none;
            color: white;
            border: 2px white solid;
            border-radius: 15px;
            text-align: center;
            line-height: 50px;
        }

        #stars {
            width: 100%;
            height: 80vh;
            overflow: hidden;
            position: absolute;
            background: linear-gradient(rgba(0, 0, 0, 0.69) 0%, rgba(0, 0, 0, 0.69) 50%, #141724 100%);
        }

        .star {
            width: 10px;
            height: 10px;
            background-color: rgba(255, 255, 255, 0.62);
            border-radius: 10px;
            box-shadow: 0 0 5px white;
            position: absolute;
            animation: twinkle 5s infinite;
        }

        #land {
            height: 100vh;
            width: 100%;
            overflow: hidden;
            position: absolute;
            bottom: 0px;
        }

        #land img {
            position: absolute;
            bottom: 0px;
        }

        @keyframes twinkle {
            0% {
                opacity: 1
            }

            50% {
                opacity: 0.2
            }

            100% {
                opacity: 1
            }
        }

        #fire {
            position: absolute;
            height: 100px;
            width: 100px;
            bottom: -20px;
            right: 50%;
            margin-right: -50px;
        }

        #logOne {
            width: 100px;
            height: 20px;
            border-radius: 5px;
            background-color: #917654;
            position: absolute;
            transform: rotate(25deg);
            bottom: 0px;
            margin-bottom: 50px;
            z-index: 2;
        }

        #logTwo {
            width: 100px;
            height: 20px;
            border-radius: 5px;
            background-color: #745c3d;
            position: absolute;
            transform: rotate(-25deg);
            bottom: 0px;
            margin-bottom: 50px;
            z-index: 2;
        }

        .flame {
            width: 0px;
            height: 0px;
            background-color: darkorange;
            border-radius: 5px;
            bottom: 0px;
            transform: rotate(45deg);
            margin-left: 25px;
            margin-bottom: 75px;
            position: absolute;
            animation: fire 1s infinite;
            animation-timing-function: linear;
        }

        .flame:nth-child(1) {
            animation: fire 2s infinite;
            animation-timing-function: linear;
            animation-delay: 0;
        }

        .flame:nth-child(2) {
            animation: fire 2s infinite;
            animation-timing-function: linear;
            animation-delay: 0.5s;
        }

        .flame:nth-child(3) {
            animation: fire 2s infinite;
            animation-timing-function: linear;
            animation-delay: 1s;
        }

        .flame:nth-child(4) {
            animation: fire 2s infinite;
            animation-timing-function: linear;
            animation-delay: 1.5s;
        }

        .flame:nth-child(5) {
            animation: fire 2s infinite;
            animation-timing-function: linear;
            animation-delay: 2s;
        }

        #flicker {
            width: 10px;
            height: 10px;
            background-color: rgba(255, 140, 0, 0.1);
            border-radius: 40px;
            position: absolute;
            bottom: 0px;
            margin-left: 50px;
            margin-bottom: 50px;
            z-index: 1;
            box-shadow: 0 0 100px darkorange;
            animation: flick 3s infinite;
            animation-timing-function: ease-in-out;
        }

        #ground {
            width: 130%;
            height: 25vh;
            background-color: #121628;
            position: absolute;
            bottom: 0px;
            border-radius: 100%;
            margin-left: -15%;
            margin-bottom: -10vh;
            box-shadow: 0 0 100px rgb(39, 48, 64);
        }

        @keyframes fire {
            0% {
                width: 0;
                height: 0;
                margin-left: 50px;
                background-color: #ffce00;
                z-index: 1000;
            }

            50% {
                width: 50px;
                height: 50px;
                margin-bottom: 75px;
                margin-left: 25px;
                background-color: darkorange;
            }

            75% {

                z-index: 1;
            }

            100% {
                width: 0px;
                height: 0px;
                margin-bottom: 200px;
                margin-left: 50px;
                background-color: #ff0000;
                z-index: 1;

            }
        }

        @keyframes flick {
            0% {
                opacity: 0.4;
            }

            50% {
                opacity: 0.8;
            }

            100% {
                opacity: 0.4;
            }
        }
    </style>
    <title>Page not found</title>
</head>

<body onload="javascript:generateStars()">
    <div id="help">
        <h1>404 - Page not found</h1>
        <h1>you seem to be lost.</h1>
        <h2>let me help you.</h2>
        <a href="<?php echo base_url(''); ?>">Go Home</a>
    </div>
    <div id="stars">
    </div>
    <div id="land">

        <div id="fire">
            <div class="flame"></div>
            <div class="flame"></div>
            <div class="flame"></div>
            <div class="flame"></div>
            <div class="flame"></div>
            <div id="logs">
                <div id="logOne"></div>
                <div id="logTwo"></div>
                <div id="flicker"></div>
            </div>
        </div>
        <div id="ground"></div>
    </div>
    <script>
        function generateStars() {
            for (var i = 0; i < 200; i++) {
                document.getElementById('stars').innerHTML += '<div class="star"></div>';
            }

            var stars = document.getElementsByClassName('star');
            for (var t = 0; t < stars.length; t++) {
                stars[t].style.left = (Math.random() * 110) + "%";
                stars[t].style.top = (Math.random() * 90) + "%";
                var size = Math.random() * 4;
                stars[t].style.height = size + "px";
                stars[t].style.width = size + "px";
                var animationTime = (Math.random() * 2) + 1;
                stars[t].style.animation = "twinkle " + animationTime + "s infinite";
            }
        }
    </script>
</body>

</html>