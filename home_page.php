<?php
    session_start();

    if(isset($_SESSION["member_id"])) {
        include("member-header.php");
    }
    // else if(isset($_SESSION["admin_id"])) {
    //     echo
    //     "<script>
    //         alert('Please Log In As Member To Access This Page!');
    //         window.location.href='admin_login_page.php';
    //     </script>";
    // }
    else {
        include("header.php");
    }
?>

<!DOCTYPE html> 
<html> 
    <head> 
      <title>Home Page</title>
      <style>

        .back-to-top {
            position: fixed;
            right: 2rem;
            bottom: 2rem;
            border-radius: 100%;
            background: #141c38;
            padding: 0.5rem;
            border: none;
            cursor: pointer;
            opacity: 100%;
            transition: opacity 0.5s;
        }

        .back-to-top:hover {
            opacity: 60%;
        }

        .hidden {
            opacity: 0%;
        }

        .back-to-top-icon {
            width: 1rem;
            height: 1rem;
            color: #7ac9f9;
        }

        .progress-bar {
            height: 1rem;
            background: rgb(254, 254, 13);
            position: fixed;
            top: 0;
            left: 0;
        }

        .slider-container{
            position:relative;
            width:1400px;
            height: 600px;
            margin:20px 50px;
            border:5px solid #ed8947;
        }

        .container{
            position: relative;
            width: 1400px;
            height: 550px;
            margin: 35px auto;
            border:5px solid #ed8947;
        }

        #title{
            font-size: 50px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;

        }
      </style>
    </head> 
      
    <body>
        <div class="slider-container">
            <?php include "./slider.html"?>
        </div>
        <center>
            <p id="title">Our Courses</p>
            <div class="container">
                <div>
                    <img src="Pic/course_logo.png" onclick="window.location.href='Course_page.php'" style="cursor: pointer;">
                </div>
        </center>
        </div>
        <center>
            <p id="title">Our lecturer</p>
            <div class="container">
                <div>
                    <img src="Pic/lecturer_logo.png" onclick="window.location.href='Our_lecturer_page.php'" style="cursor: pointer;">
                </div>
        </center>

        <div class="progress-bar">
            <button class="back-to-top hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="back-to-top-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11l5-5m0 0l5 5m-5-5v12" />
            </svg>
            </button>
        </div>
            <script>
                const showOnPx = 100;
                const backToTopButton = document.querySelector(".back-to-top");
                const pageProgressBar = document.querySelector(".progress-bar");

                const scrollContainer = () => {
                return document.documentElement || document.body;
                };

                const goToTop = () => {
                document.body.scrollIntoView({
                    behavior: "smooth"
                });
                };

                document.addEventListener("scroll", () => {
                console.log("Scroll Height: ", scrollContainer().scrollHeight);
                console.log("Client Height: ", scrollContainer().clientHeight);

                const scrolledPercentage =
                    (scrollContainer().scrollTop /
                    (scrollContainer().scrollHeight - scrollContainer().clientHeight)) *
                    100;

                pageProgressBar.style.width = `${scrolledPercentage}%`;

                if (scrollContainer().scrollTop > showOnPx) {
                    backToTopButton.classList.remove("hidden");
                } else {
                    backToTopButton.classList.add("hidden");
                }
                });

                backToTopButton.addEventListener("click", goToTop);
            </script>
            <?php include "./Footer.php" ?>
    </body>
</html>