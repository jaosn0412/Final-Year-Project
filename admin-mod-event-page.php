<!DOCTYPE html>
<html>
    <head>
        <title>Edit Lecturer Profile</title>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Archivo+Narrow:wght@600&family=Padauk:wght@700&family=Signika&display=swap');

            .form-container {
                margin: 200px auto;
                background-color: #ed8947;
                border-radius:5%;
                width: 700px;
                padding: 15px;
                border: black;
                display: flex;
                flex-wrap: wrap;
                box-shadow: 0 10px 15px rgba(0,0,0,.1);
            }

            .form-title {
                margin: 30px 0px 40px 160px;
                color:black;
                text-align: center;
                font-size: 40px;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; 
            }

            .form-box1 {
                margin: 0px 10px 0px 40px;
                width: 300px;
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
                height: 40px;
                border: 2px solid #ccc;
                border-radius: 8px;
                font-family: 'Signika', sans-serif;
                font-size: 18px;
            }

            input[type=date] {
                background-color: #ededed;
                border-color: #d4d4d4;
                color: black;
                width: 295px;
                height: 42px;
                border: 2px solid #ccc;
                border-radius: 8px;
                font-family: 'Signika', sans-serif;
                font-size: 18px;
            }

            input[type=submit] {
                background-color: #f0c534;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; 
                color: black;
                margin: 20px 10px 20px 280px;
                border: none;
                border-radius: 10px;
                padding: 16px 50px;
                cursor: pointer;
                font-size: 20px;
                font-family: 'Signika', sans-serif;
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
            $result = mysqli_query($conn,"SELECT * FROM event_details WHERE event_id=$id");
            $row = mysqli_fetch_array($result);
        ?>

        <form action="update_data_admin_edit_event_info.php?id=<?php echo $row['event_id']; ?>" method="post" onsubmit="return validate_form()">
        <div class="form-container">
                <div class="form-title">
                    <strong>Edit Event Information</strong>
                </div>

                <div class="form-box1">
                    <strong>Event Name</strong><br>
                    <input type="text" name="edit_event_name" placeholder="Event Name" required="required" value="<?php echo $row["event_name"]; ?>">
                </div>

                <div class="form-box2">
                    <strong>Event Date</strong><br>
                    <input type="date" id ="eve_date" name="edit_event_date" required="required" value="<?php echo $row["event_date"]; ?>"><br><br>
                </div>

                <div class="form-box1">
                    <strong>Event Description</strong><br>
                    <input style="height: 100px; width: 610px;"type="text" name="edit_event_des" placeholder="Event Description" required="required" value="<?php echo $row["event_des"]; ?>"><br><br>
                </div>

                <input type="submit" value="Done">
            </div>
        </form>

        <?php
            mysqli_close($conn);
        ?>
    </body>
</html>