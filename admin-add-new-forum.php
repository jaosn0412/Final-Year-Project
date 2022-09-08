<!DOCTYPE html>
<html>

<head>
    <title>Add New Forum</title>

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
            margin-left: 28%;
            padding: 30px;
            color: yellow;
            text-align: center;
            font-size: 40px;
            font-family: 'Archivo Narrow', sans-serif;
        }

        .form-box1 {
            margin-left: 28%;
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
            background-color: black;
            color: yellow;
            margin: 48px 10px 20px 280px;
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
    <form action="insert-data-admin-add-forum.php" method="post" enctype="multipart/form-data" onsubmit="return validate_form()">
        <div class="form-container">
            <div class="form-title">
                <strong>Add New forum</strong>
            </div>

            <div class="form-box1">
                <strong>Forum Topic</strong><br>
                <input type="text" name="add_forum_topic" placeholder="Forum Topic" required="required">
            </div>


            <input type="submit" value="Add">
        </div>
    </form>

    <?php
    mysqli_close($con);
    ?>
</body>

</html>