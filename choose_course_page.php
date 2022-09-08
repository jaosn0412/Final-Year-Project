<!-- <?php
    session_start();

    if(isset($_SESSION["member_id"])) {
        include("member_header.php");
    }
    else if(isset($_SESSION["admin_id"])) {
        echo
        "<script>
            alert('Please LogOut Admin Account To Access This Page!');
            window.location.href='admin_profile.php';
        </script>";
    }
    else {
        include("before_log_in_header.php");
    }
?> -->

<!DOCTYPE html>
    <html>
        <head>
            <title>Choose Course Page</title>
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="style_choose_forum_page.css">
        </head>

        <style>
                .course_box
                {
                    margin:  50px auto;
                    width: 10%;
                    border: 3px solid green;
                    padding: 10px;
                    text-align: center;
                    border-radius: 10px;
                    color: white;
                }

                .main_frame
                {
                    height: auto;
                    width: 700px;
                    border: 3px solid green;
                    color: pink;
                    padding: 10px;
                    margin: 50px auto;
                    border-radius: 15px;
                }

                .topic_text
                {
                    border-radius: 100px;
                    font-family: 'Mochiy Pop One', sans-serif;
                    font-size: 20px;
                    color: white;
                    width: auto;
                    display: block;
                    margin: 0 auto;
                    text-align: center;
                }

                .title_text
                {
                    border-radius: 100px;
                    font-family: 'Mochiy Pop One', sans-serif;
                    font-size: 15px;
                    color: white;
                    width: auto;
                    height: 80px;
                    display: block;
                    margin: 0 auto;
                    text-align: center;
                    padding: 10px;
                }

                #click_button
                {
                    cursor: pointer;
                    padding: 10px;
                    width: 600px;
                    margin: 10px auto;
                    border: 3px solid yellow;
                    border-radius: 15px;
                }

                #click_button:hover
                {
                    background-color: #545454;
                }

        </style>

    </html>

    <body style="background-color: black;">
        <div class="course_box">
            <strong style=" color: white;
                                    font-size: 20px;
                                    font-family: 'Mochiy Pop One', sans-serif;">COURSE</strong>
                                    </div>

        <?php   
            include("database.php");

            $sql = "SELECT * FROM course";
            $result = mysqli_query($conn, $sql);
        ?>

        <form class="main_frame">
        
            <?php while($row = mysqli_fetch_array($result)){ ?>


            <div onclick="window.location.href='add_cmmt_page.php?id=<?php echo $row['course_ID'];?>'" id="click_button">
                <strong class="topic_text"><?php echo $row['course_name']; ?></strong>
                <strong class="title_text"><?php echo $row['description']; ?></strong>
            </div>

            <?php } ?>
        </form>

    </body