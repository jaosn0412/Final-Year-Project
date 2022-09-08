<!DOCTYPE html>
<html>

<head>
    <title>Edit Forum Page</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Archivo+Narrow:wght@600&family=Padauk:wght@700&family=Signika&display=swap');

        .form-container {
            margin: 200px auto;
            background-color: #ed8947;
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
            color:black;
            text-align: center;
            font-size: 40px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; 
        }

        .form-box1 {
            margin-left: 28%;
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

        input[type=submit] {
            background-color: #f0c534;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; 
            color: black;
            margin: 35px 10px 20px 280px;
            border: none;
            border-radius: 10px;
            padding: 16px 50px;
            cursor: pointer;
            font-size: 20px;
        }

        input[type=submit]:hover {
            background-color: #545454;
        }
    </style>
</head>

<body>
    <?php
    include("conn.php");

    $id = intval($_GET['id']);
    $result = mysqli_query($con, "SELECT * FROM forum WHERE forum_ID=$id");
    $row = mysqli_fetch_array($result);
    ?>

    <form action="update_data_admin_edit_forum_info.php?id=<?php echo $row['forum_ID']; ?>" method="post" onsubmit="return validate_form()">
        <div class="form-container">
            <div class="form-title">
                <strong>Edit Forum Information</strong>
            </div>

            <div class="form-box1">
                <strong>Forum Topic</strong><br>
                <input type="text" name="edit_forum_topic" placeholder="Forum Topic" required="required" value="<?php echo $row["forum_topic"]; ?>">
            </div>

            <br><br><br><br>

            <input type="submit" value="Done">
        </div>
    </form>

    <?php
    mysqli_close($con);
    ?>
</body>

</html>