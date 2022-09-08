<?php
    session_start();

    if(isset($_SESSION["member_id"])) {
        include("member-header.php");
    }
    // else if(isset($_SESSION["admin_id"])) {
    //     echo
    //     "<script>
    //         alert('Please Log In As Member To Access This Page!');
    //         window.location.href='admin_log_in.php';
    //     </script>";
    // }
    else {
        include("header.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Contact Us</title>
        <style>
            * {
                font-family: 'Times New Roman', Times, serif;
            }

            #ctc-us-head {
                text-align: center;
                margin-top: 100px;
                margin-bottom: 50px;
            }

            .outside-box {
                display: flex;
            }

            #inside-box {
                width: 100%;
            }

            #cntc-us-pics {
                display: block;
                margin-left: auto;
                margin-right: auto;
            }

            .location-pic {
                width: 180px;
                height: 200px;
                padding-top: 30px;
            }

            #cntc-us-details-head {
                font-size: 30px;
                text-align: center;
                font-weight: bold;
            }

            #cntc-us-details {
                text-align: center;
                text-decoration: underline;
                font-size: 25px;
            }

            .telephone-pic {
                width: 290px;
                height: 220px;
                padding-top: 100px;
            }

            .email-pic {
                width: 300px;
                height: 250px;
                margin-bottom: -15px;
            }

        </style>
    </head>
    <body>
        <h1 id="ctc-us-head">Contact Us</h1>
        <hr color="black">
        <div class="outside-box">
            <div id="inside-box">
                <img src="images/location.png" id="cntc-us-pics" class="location-pic">
                <p id="cntc-us-details-head">Address:</p>
                <p id="cntc-us-details">Jalan Teknologi 5, Taman Teknologi Malaysia, 57000 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur</p>
            </div>

            <div id="inside-box">
                <img src="images/telephone.png" id="cntc-us-pics" class="telephone-pic">
                <p id="cntc-us-details-head">Contact Number:</p>
                <p id="cntc-us-details">012-3456789</p>
            </div>

            <div id="inside-box">
                <img src="images/email.png" id="cntc-us-pics" class="email-pic">
                <p id="cntc-us-details-head">Email:</p>
                <p id="cntc-us-details">supportsystemSP@gmail.com</p>
            </div>
        </div>
        <?php include "./Footer.php"?>
    </body>
</html>