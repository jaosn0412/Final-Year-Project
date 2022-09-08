<?php
    
    if(isset($_POST["admin-logout"])) {
        session_destroy();
        echo
        "<script>
            window.location.href='home_page.php';
        </script>";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin header</title>
    <style>
        html,
        body {
            margin: 0;
            height: 100%;
            font-family: "Lato", sans-serif;
        }

        .title {
            color: white;
            cursor: pointer;
            margin-left: 32px;
            text-decoration: none;
            font-size: 18px;
        }

        .admin-header-container {
            height: 100%;
            width: 200px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #ed8947;
            overflow-x: hidden;
            padding: 30px;
            position: fixed;
        }


        .button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 12px 42px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-left: 32px;
            cursor: pointer;
        }

        .abutton {
            padding: 6px 6px 18px 32px;
            text-decoration: none;
            font-size: 20px;
            color: black;
            display: block;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        #admin-icon {
            border-radius: 50%;
            width: 50%;
            height: auto;
            margin: 25%;
        }

        .admin-detail {
            height: 5%;
            line-height: 30px;
        }

        nav {
            line-height: 25px;
        }

        nav a:hover {
            color: #f1f1f1;
        }

        .main-content {
            width: 12%;
        }

        #logout-form button {
            border: none;
            color: black;
            padding: 12px 42px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            margin-left: 32px;
            cursor: pointer;
            background-color: yellow;
            border-radius: 15px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
    </style>
</head>

<body>

    <div class="admin-header-container">
    <a style="cursor:pointer;" href="admin_edit.php"><img id="admin-icon" src="images/admin_pic1.jpg"></a>
        <!-- <div class="admin-detail"><?php echo $admin ?></div> -->
        <nav>
            <a href="admin-mod-home-page.php" class="title">Admin Panel</a>    
            <a href="admin-mod-lec.php" class="abutton">Lecturers</a>
            <a href="admin-mod-trivia-main-page-objective.php" class="abutton">Trivia [Objective]</a>
            <a href="admin-mod-trivia-main-page-subjective.php" class="abutton">Trivia [Subjective]</a>
            <a href="admin-mod-forum.php" class="abutton">Forum</a>
            <a href="admin-mod-member.php" class="abutton">User</a>
            <a href="admin_report.php" class="abutton">Report</a>
            <a href="admin-mod-event.php" class="abutton">Event</a>
            <a href="admin-mod-course.php" class="abutton">Course</a>
        </nav>

        <form method="post" id="logout-form">
            <button name="admin-logout">Logout</button>
        </form>
    </div>

</body>

</html>