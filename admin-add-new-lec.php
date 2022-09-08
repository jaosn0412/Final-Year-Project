<!DOCTYPE html>
<html>
    <head>
        <title>Edit Lecturer Profile</title>

        <style>
            <?php include("database.php") ?>;
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
                margin: 30px 0px 40px 200px;
                color:black;
                text-align: center;
                font-size: 40px;
                font-family: 'Archivo Narrow', sans-serif;
            }

            .form-box1 {
                margin: 0px 10px 0px 40px;
                width: 300px;
                font-family: 'Padauk', sans-serif;
                font-size: 18px;
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

            input[type=submit] {
                background-color: yellow;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; ;
                color: black;
                margin: 20px 10px 20px 280px;
                border: none;
                border-radius: 10px;
                padding: 16px 50px;
                cursor: pointer;
                font-size: 20px;
            }

            input[type=submit]:hover{
                background-color: #545454;
            }
        </style>
    </head>
    <body>
        <form action="insert-data-admin-add-lec.php" method="post" enctype="multipart/form-data" onsubmit="return validate_form()">
        <div class="form-container">
                <div class="form-title">
                    <strong>Add New Lecturer</strong>
                </div>

                <div class="form-box1">
                    <strong>Lecturer Name</strong><br>
                    <input type="text" name="add_lecturer_name" placeholder="Lecturer Name" required="required">
                </div>

                <div class="form-box1">
                    <strong>Course Focus On</strong><br>
                    <input type="text" name="add_lecturer_focus" placeholder="Course Focus On" required="required"><br><br>                
                </div>

                <div class="form-box1">
                    <strong>Teaching Experience</strong><br>
                    <input type="text" name="add_lecturer_year" placeholder="Eg: 1 Years / 6 Months" required="required"><br><br>
                </div>

                <input type="submit" value="Add">
            </div>
        </form>

        <?php
            mysqli_close($conn);
        ?>
    </body>
</html>