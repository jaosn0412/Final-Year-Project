<?php
    session_start();

    if(isset($_SESSION["admin_id"])) {
        include("admin_header.php");
    }
    else if(isset($_SESSION["member_id"])) {
        echo
        "<script>
            alert('Please Log In As Admin To Access This Page!');
            window.location.href='admin_login_page.php';
        </script>";
    }
    else {
        include("header.php");
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>

    <style>
        body {
            background: linear-gradient(to right, black, #C7C7C7);
        }

        .slider-frame {
            overflow: hidden;
            height: 700px;
            width: 1200px;
            margin-left: 300px;
            margin-top: 20px;
        }

        @-webkit-keyframes slider_animation {
            0% {
                left: 0px;
            }

            10% {
                left: 0px;
            }

            20% {
                left: 1200px;
            }

            30% {
                left: 1200px;
            }

            40% {
                left: 2400px;
            }

            50% {
                left: 2400px;
            }

            60% {
                left: 1200px;
            }

            70% {
                left: 1200px;
            }

            80% {
                left: 0px;
            }

            90% {
                left: 0px;
            }

            100% {
                left: 0px;
            }
        }

        #logo {
            padding: 15%;
            margin-left: 15%;
            width: 450px;
            height: auto;
            opacity: 85%;
        }

        .slide-images {
            width: 3000px;
            height: 700px;
            margin: 0 0 0 -2400px;
            position: relative;
            -webkit-animation-name: slider_animation;
            -webkit-animation-duration: 10s;
            -webkit-animation-iteration-count: initial;
            -webkit-animation-direction: alternate;
            -webkit-animation-play-state: running;
        }

        .img-container {
            height: 700px;
            width: 1200px;
            position: relative;
            float: left;
        }
    </style>
</head>

<body>
    <?php
    include 'admin_header.php'
    ?>
    <div class="slider-frame">
        <div class="slide-images">
            <div class="img-container">
                <img id="logo" src="../images/Title.jpg">
            </div>
            <div class="img-container">
                <img id="logo" src="../images/Logo">
            </div>
        </div>
    </div>
</body>

</html>