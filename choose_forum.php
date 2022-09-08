<?php
    session_start();

    if(isset($_SESSION["member_id"])) {
        include("member-header.php");
    }
    else if(isset($_SESSION["admin_id"])) {
        echo
        "<script>
            alert('Please Log In As Member To Access This Page!');
            window.location.href='home_page.php';
        </script>";
    }
    else {
        echo
        "<script>
            alert('Please Log In As Member To Access This Page!');
            window.location.href='member_login_page.php';
        </script>";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <?php include("database.php") ?>
        <title>Forum Page</title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&display=swap');

            .outer-box {
                display: flex;
                margin-left: 25%;
                margin-right: 25%;
                margin-top: 50px;
                border: 10px solid #ed8947;
                border-radius: 10px;
                margin-bottom: 30px;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            }

            #forum-pic {
                width: 150px;
                height: 150px;
                padding: 15px;
            }

            .topic-box {
                margin-left: 30px;
                margin-top: 30px;
                width: 50%;
                text-align: center;
            }

            .go-box {
                margin-left: 50px;
            }

            #go-btn {
                padding: 10px 20px;
                font-size: 20px;
                margin-top: 60px;
                border-radius: 10px;
                border: 2px solid #ed8947;
                font-family: 'Mochiy Pop One', sans-serif;
                background-color: #eb8947;
            }

            #go-btn:hover {
                cursor: pointer;
                background-color: black;
                color: white;
            }

            .title{
            font-size:50px;
            font-family:Impact;
            border-radius: 20px;
            border: 10px solid #ed8947;
            text-align: center;
            margin: 50px auto;
            width: 200px;
        }

        </style>
    </head>
    <body>
        <div class="title">
            FORUM
        </div>
        <?php $select_forum = mysqli_query($conn, "SELECT * FROM forum")?>
        <?php while ($forum = mysqli_fetch_array($select_forum)){?>
        <div class="outer-box">
            <img src="images/forum-pic.png" id="forum-pic">
            <div class="topic-box">
                <h1 id="topic-title"><?php echo $forum["forum_topic"] ?></h1>
            </div>
            <div class="go-box">
                <button id="go-btn" onclick="location.href='forum_page.php?id=<?php echo $forum['forum_ID'] ?>'">Go ></button>
            </div>
        </div>
        <?php 
                }
             ?>
    </body>
    <?php include("Footer.php") ?>
</html>