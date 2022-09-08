<?php
    session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Admin Profile</title>

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
    <?php
    include("conn.php");

    $id = intval($_GET['id']);
    $result = mysqli_query($con, "SELECT * FROM admin WHERE admin_id=$id");
    $row = mysqli_fetch_array($result);
    ?>

    <form action="update_data_admin_edit_admin_info.php?id=<?php echo $row['admin_id']; ?>" method="post" onsubmit="return validate_form()">
        <div class="form-container">
            <div class="form-title">
                <strong>Edit Admin Information</strong>
            </div>

            <div class="form-box2">
                <strong>Admin Username</strong><br>
                <input type="text" name="edit_admin_username" placeholder="Admin Name" required="required" value="<?php echo $row["admin_username"]; ?>">
            </div>

            <div class="form-box2">
                <strong>Admin Password</strong><br>
                <input type="text" name="edit_admin_password" placeholder="Admin Password" required="required" value="<?php echo $row["admin_password"]; ?>">
            </div>

            <input type="submit" value="Done">
        </div>
    </form>

    <?php
    mysqli_close($con);
    ?>
</body>

</html>