<!DOCTYPE html>
<html>
    <head>
        <title>Edit Trivia Question</title>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Archivo+Narrow:wght@600&family=Padauk:wght@700&family=Signika&display=swap');

            .form-container {
                margin: 200px auto;
                background-color: #ed8947;
                border-radius:5%;
                width: 700px;
                height: 800px;;
                padding: 15px;
                border: black;
                display: flex;
                flex-wrap: wrap;
                box-shadow: 0 10px 15px rgba(0,0,0,.1);
            }

            .form-title {
                margin: 30px 0px 40px 200px;
                text-align: center;
                font-size: 40px;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; 
            }

            .form-box1 {
                margin: 0px 10px 0px 40px;
                width: 300px;
                height:100px;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; 
                font-size: 20px;
            }

            .form-box2 {
                margin: 0px 30px 0px 10px;
                width: 300px;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; 
                font-size: 20px;
            }

            input[type=text] {
                background-color: #ededed;
                border-color: #d4d4d4;
                color: black;
                width: 292px;
                height: 100px;
                border: 2px solid #ccc;
                border-radius: 8px;
                font-family: 'Signika', sans-serif;
                font-size: 18px;
            }

            input[type=submit] {
                background-color: #f0c534;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; 
                margin-top:20px;
                margin-left:280px;
                border: none;
                border-radius: 10px;
                height:60px;
                width: 150px;
                cursor: pointer;
                font-size: 20px;
            }

            input[type=submit]:hover{
                background-color: #545454;
            }
        </style>
    </head>
    <body>
        <?php
            include("database.php");

            $id = intval($_GET['id']);
            $result = mysqli_query($conn,"SELECT * FROM objective_trivia WHERE objective_ID=$id");
            $row = mysqli_fetch_array($result);
        ?>

        <form action="update_data_admin_edit_trivia_ques_objective.php?id=<?php echo $row['objective_ID']; ?>" method="post" onsubmit="return validate_form()">
        <div class="form-container">
                <input type="hidden" name="trivia_id" value="<?php echo $row['trivia_id']; ?>">
            
                <div class="form-title">
                    <strong>Edit Trivia Question</strong>
                </div>

                <div class="form-box1">
                    <strong>Trivia Question</strong><br>
                    <input type="text" name="edit_triv_ques" placeholder="Trivia Question" required="required" value="<?php echo $row["obj_ques"]; ?>">
                </div>

                <div class="form-box1">
                    <strong>Trivia Correct Answer</strong>
                    <input type="text" name="edit_triv_ca" placeholder="Trivia Correct Answer" required="required" value="<?php echo $row["corr_ans"]; ?>">
                </div>

                <div class="form-box1">
                    <strong>Trivia Wrong Answer</strong>
                    <input type="text" name="edit_triv_wa1" placeholder="Trivia Wrong Answer" required="required" value="<?php echo $row["wrng_ans1"]; ?>">
                </div>

                <div class="form-box1">
                    <strong>Trivia Wrong Answer</strong>
                    <input type="text" name="edit_triv_wa2" placeholder="Trivia Wrong Answer" required="required" value="<?php echo $row["wrng_ans2"]; ?>">
                </div>

                <div class="form-box1">
                    <strong>Trivia Wrong Answer</strong>
                    <input type="text" name="edit_triv_wa3" placeholder="Trivia Wrong Answer" required="required" value="<?php echo $row["wrng_ans3"]; ?>">
                </div>
                <input type="submit" value="Done">
        </div>
        </form>

        <?php
            mysqli_close($conn);
        ?>
    </body>
</html>