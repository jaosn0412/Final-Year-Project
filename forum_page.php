<?php
    session_start();

    if(isset($_SESSION["member_id"])) {
        include("member-header.php");
    }
    else if(isset($_SESSION["admin_id"])) {
        echo
        "<script>
            alert('Please Log In As Member To Access This Page!');
            window.location.href='member_login_page.php';
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
            .topic-box {
                margin: 30px 25%;
                border: 10px solid #ed8947;
                text-align: center;
                font-family: 'Mochiy Pop One', sans-serif;
                border-radius: 25px;
            }

            .discussion-box {
                margin: 30px 25%;
                border: 5px solid #eb8947;
                font-family: 'Mochiy Pop One', sans-serif;
                border-radius: 20px;
            }

            #disc-header {
                padding-left: 30px;
            }

            .cmmnt-box {   
                border: 2px solid #eb8947;
                background-color: #eb8947;
                margin: 30px 30px;
                padding-left: 30px;
                border-radius: 20px;      
            }

            #new-cmmnt-btn {
                width: 300px;
                margin-left: 35%;
                margin-right: 35%;
                margin-bottom: 30px;
                padding: 10px 20px;
                font-size: 20px;
                border-radius: 10px;
                border: #eb8947;
                font-family: 'Mochiy Pop One', sans-serif;
                background-color: #f0c534;
            }

            #new-cmmnt-btn:hover {
                cursor: pointer;
                background-color: black;
                color: white;
            }
        </style>
    </head>
    <body>
    <?php
        $id = intval($_GET['id']);
        $select_forum = mysqli_query($conn, "SELECT * FROM forum WHERE forum_ID = $id");
        $forum = mysqli_fetch_array($select_forum);

        $select_cmmt = mysqli_query($conn, "SELECT * FROM forum_comments WHERE forum_ID = $id");
    ?>

        <div class="topic-box">
            <h1 id="forum-header"><?php echo $forum["forum_topic"] ?></h1>
        </div>
        <div class="discussion-box">
            <h2 id="disc-header">Discussion:</h2>
            <?php while($cmmt = mysqli_fetch_array($select_cmmt)){ ?>
            <div class="cmmnt-box">
                <h3 id="username"><?php echo $cmmt["member_name"] ?></h3>
                <p id="cmmnt"><?php echo $cmmt["comments"] ?></p>
            </div>
            <?php
                }
            ?>
            <button id="new-cmmnt-btn" onclick="location.href='new_comment.php?id=<?php echo $forum['forum_ID'] ?>'">Add New Comment</button>
        </div>
    </body>
    <?php include("Footer.php") ?>
</html>