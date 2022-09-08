<!DOCTYPE html>
    <html>
        <head>
            <title>Add Comment Course Page</title>
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="style_add_cmmt_forum_page.css">
        </head>

        <style>

            .cmmt_box1
                {
                    /* margin: auto; */
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
                    height: 600px;
                    width: 700px;
                    border: 3px solid green;
                    color: pink;
                    padding: 10px;
                    /* background-color: orange; */
                    margin: 50px auto;
                    border-radius: 15px;
                }

                .topic_frame
                {
                    /* border: 3px solid pink; */
                    height: 200px;
                }

                .topic_text
                {
                    color: white;
                    font-family: 'Mochiy Pop One', sans-serif;
                    font-size: 20px;
                    text-align: center;
                    padding:10px;
                }

                .title_text
                {
                    color: white;
                    height: 100px;
                    width: 500px;
                    margin: 10px auto;
                    /* border: 3px solid blue; */
                    font-family: 'Mochiy Pop One', sans-serif;
                    font-size: 15px;
                    text-align: center;
                    padding:10px;
                }

                .cmmt_frame
                {
                    /* border: 3px solid yellow; */
                    height: 300px;
                    display: flex;
                    flex: wrap;
                }

                .image_profile
                {
                    height: 80px;
                    width: auto;
                    margin-top: 100px;
                    margin-left: 50px;
                }

                .cmmt_box
                {
                    color: white;
                    font-family: 'Mochiy Pop One', sans-serif;
                    font-size: 15px;
                    text-align: center;
                    height: 200px;
                    width: 450px;
                    border: 3px solid white;
                    border-radius: 15px;
                    margin-left: 50px;
                    padding:10px;
                    margin-top: 40px;
                }

                input[type=submit]
                {
                    background-color: rgb(230, 230, 65);
                    color: white;
                    margin-left: 500px;
                    margin-top: 5px;
                    border: none;
                    border-radius: 10px;
                    padding: 10px 30px;
                    cursor: pointer;
                    font-size: 15px;
                    font-family: 'Mochiy Pop One', sans-serif;
                }

                input[type=submit]:hover 
                {
                    background-color: #545454;
                }

                input[type=text] 
                {
                    /* background-color:pink; */
                    border: 3px solid green;
                    border-color: #d4d4d4;
                    color: black;
                    /* text-align: center; */
                    margin-left: 30px;
                    margin-top: 20px;
                    padding: 10px;
                    height: 200px;
                    width: 450px;
                    /* border: 2px solid #ccc; */
                    border-radius: 8px;
                    font-family: 'Mochiy Pop One', sans-serif;
                    font-size: 15px;
                }


    </style>

    </html>

    <body style="background-color: black;">
        <div class="cmmt_box1">
            <strong style=" color: white;
                                    font-size: 20px;
                                    font-family: 'Mochiy Pop One', sans-serif;">Comment</strong>
                                    </div>

        <?php   
            include("database.php");
            
            $id = intval($_GET['id']);  //URL take one ID -- specific ID already taken
            $sql = "SELECT * FROM course WHERE course_ID = $id";
            $result = mysqli_query($conn, $sql);
        ?>

        <form class="main_frame" method="post" action="add_cmmt_input.php">

            <?php while($row = mysqli_fetch_array($result)){ ?>


            <div class="topic_frame">
                <div class="topic_text">
                    <strong><?php echo $row['course_name']; ?></strong>
                </div>

                <div class="title_text">
                    <strong><?php echo $row['description']; ?></strong>
                </div>
            </div>

            <?php } ?>

            <div class="cmmt_frame">
                <img src="picture/profile-icon.png" class="image_profile">
                <input type="text" name="mem_cmmt" placeholder="Enter Comment Here !" required="required"><br><br>
            </div>

            <input type="submit" name="comment" value="SUBMIT">

        </form>

    </body>