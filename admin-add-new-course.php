<!DOCTYPE html>
<html>

<head>
    <title>Add New Courses</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Archivo+Narrow:wght@600&family=Padauk:wght@700&family=Signika&display=swap');

        .form-container {
            margin: 200px auto;
            background-color: grey;
            border-radius: 5%;
            width: 700px;
            padding: 15px;
            border: black;
            display: flex;
            flex-wrap: wrap;
            box-shadow: 0 10px 15px rgba(0, 0, 0, .1);
        }

        .form-title {
            margin: 30px 0px 40px 160px;
            color: yellow;
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

        .form-box2 {
            margin: 0px 30px 0px 10px;
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
            background-color: black;
            color: yellow;
            margin: 20px 10px 20px 280px;
            border: none;
            border-radius: 10px;
            padding: 16px 50px;
            cursor: pointer;
            font-size: 20px;
            font-family: 'Signika', sans-serif;
        }

        input[type=submit]:hover {
            background-color: #545454;
        }
    </style>
</head>

<body>
    <form action="insert-data-admin-add-course.php" method="post" enctype="multipart/form-data" onsubmit="return validate_form()">
        <div class="form-container">
            <div class="form-title">
                <strong>Add New Courses</strong>
            </div>

            <div class="form-box1">
                <strong>Course Name</strong><br>
                <input type="text" name="add_course_name" placeholder="Course Name" required="required">
            </div>

            <div class="form-box2">
                <strong>Course Date</strong><br>
                <input type="date" id="course_date" name="add_course_date" required="required"><br><br>
            </div>

            <div class="form-box1">
                <strong>Course Description</strong><br>
                <input style="height: 100px; width: 610px;" type="text" name="add_course_des" placeholder="Course Description" required="required"><br><br>
            </div>

            <input type="submit" value="Add">
        </div>
    </form>

    <?php
    mysqli_close($conn);
    ?>
</body>

</html>