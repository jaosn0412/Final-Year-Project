<?php
    session_start();

    if(isset($_SESSION["member_id"])) {
        include("member-header.php");
    }
    // else if(isset($_SESSION["admin_id"])) {
    //     echo
    //     "<script>
    //         alert('Please Log In As Member To Access This Page!');
    //         window.location.href='home_page.php';
    //     </script>";
    // }
    else {
        include("Header.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>About Us</title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=DynaPuff&display=swap');

            #road-safety-pic {
                width: 100%;
            }

            #abt-us-header {
                text-align: center;
                font-family: 'DynaPuff', cursive;
            }

            #abt-us-content {
                font-size: 25px;
                text-align: justify;
                padding-left: 30px;
                padding-right: 30px;
                border-radius: 10px;
                font-family: 'DynaPuff', cursive;
            }

            #pic-box {
                margin-left: 25%;
                margin-right: 25%;
                margin-top: 20px;
            }
        </style>
    </head>
    <body>
        <div id="pic-box">
            <img src="images/road-safety.jpeg" id="road-safety-pic">
        </div>
        <hr color="black">
        <h1 id="abt-us-header">About Us:</h1>
        <p id="abt-us-content">Safety Program (SP) is a system created for the purpose of helping new and old drivers on the road to be much more careful. 
            The system provides hands on practices to help in improving the knowledge on how to drive much safer on the road. 
            As road accidents are being much more common, everyone should practice road safety as a priority to avoid accidents on the road. 
            The target audiences of this program is everyone regardless of whether they can drive or not but mostly it is targetted on teenagers that has just started driving.
        </p>
        <hr color="black">
        <p>
            <h1 id="abt-us-header">Vision & Mission:</h1>
            <ul id="abt-us-content">
                <li>To encourage safety driving among drivers.</li>
                <li>Decrease the rate of accidents on the road.</li>
                <li>Allow new drivers gain the confidence to drive on the road.</li>
                <li>To practice basic knowledge about road safety for every driver on the road.</li>
                <li>Allow new drivers learn about driving within a fun and immersive environment.</li>
            </ul>
        </p>
    <?php include("Footer.php") ?>
    </body>
</html>