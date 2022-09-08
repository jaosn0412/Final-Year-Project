<!DOCTYPE html>
<html>
    <head>
        <title>Edit Trivia Page</title>
        <style>
            .mod_title{
                font-size:40px;
                font-family:Impact;
                color:black;
                width:480px;
                text-align:center;
                border-bottom:10px solid #ed8947;
                margin:30px 300px;
            }

            .form-container {
                margin: 100px 500px;
                background-color: #ed8947;
                border-radius:15px;
                width: 700px;
                padding: 15px;
                border: black;
                display: flex;
                flex-wrap: wrap;
                box-shadow: 0 10px 15px rgba(0,0,0,.1);
            }

            .form-title {
                margin-top:20px;
                margin-left:240px;
                color:black;
                text-align: center;
                font-size: 40px;
                font-family: 'Archivo Narrow', sans-serif;
            }

            .form-box {
                margin-top:20px;
                margin-left:215px;
                text-align: center;
                background-color:yellow;
                border:5px solid;
                border-radius: 15px;
                width: 300px;
                height:60px;
                font-family: 'Padauk', sans-serif;
                font-size: 18px;
                cursor: pointer;
            }

            .form-box:hover{
                background-color: #545454;
            }

            #add-new-trivia-topic-button {
                cursor: pointer;
                margin:30px 300px;
                padding: 10px 10px;
                border-radius: 10px;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                font-size: 20px;
                background-color: #f0c534;
                color: black;
                border: none;
                height: 25px;
                width: 170px;
                text-align: center;
            }

            #add-new-trivia-topic-button:hover {
                background-color: #545454;
            }
        </style>
    </head>
    <body>
        <?php 
            include("database.php");
            include("admin_header.php");
            $result = mysqli_query($conn,"SELECT * FROM trivia_title");
            
        ?>
        <div>
            <p class="mod_title">Trivia Objective Modify Page</p>
            <span onclick="window.location.href='admin-add-new-trivia-topic.php'" id="add-new-trivia-topic-button">Add New Trivia Topic</span>
        </div>

        <div class="form-container">

            <div class="form-title">
                <strong>Topic Choice</strong>
            </div>

            <?php while ($row = mysqli_fetch_array($result) ){?>

            <div class="form-box" onclick="window.location.href='admin-mod-trivia-ques-objective.php?id=<?php echo $row['trivia_id'];?>'">
                <p> <?php echo $row["trivia_topic"]?> </p>
            </div>

            <?php }?>
        </div>
        
    </body>