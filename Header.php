<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Header</title>
    <style>
        body {
            font-family: 'Times New Roman';
            margin: 0;
        }

        #fixedheader {
            position: sticky;
            width: 100%;
        }

        a,
        a:visited {
            text-decoration: none;
            color: #275A84;
        }

        .header1 {
            height: 60px;
            background-color:#ed8947;
            display: flex;
            justify-content: space-between;
            width: 100%;
        }

        .header1 div:nth-child(1) {
            margin-left: 89%;
            font-size: 16px;
            font-weight: bold;
        }

        .header1 a,
        .header1 a:visited {
            height: 40px;
            margin-top: 5px;
            width: auto;
            border-radius: 10%;
            padding: 5px;
            line-height: 50px;
            background-color: white;
            text-align: center;
            color: black;
            display: inline-block;
            font-size: 16px;
        }

        .header2 {
            background-color: white;
            border-bottom: #2C2C2C;
            border-bottom-style: solid;
            border-bottom-width: 1px;
            height: 152px;
            display: flex;
            justify-content: space-between;
            font-size: 18px;
        }

        .splogo {
            margin-top: 16px;
            margin-left: 8%;
            display: inline-block;
        }

        .splogo img {
            height: 110px;
            width: auto;
            border-radius: 10%;
        }

        .headernav {
            margin-right: 6%;
            margin-top: 30px;
        }

        .headernav a {
            line-height: 70px;
            padding: 0px 20px;
            height: 60px;
            display: inline-block;
        }

        .headernav a:hover {
            background-color: #C5C5C5;
            color: black;
            border-bottom: #2C2C2C;
            border-bottom-style: solid;
            border-bottom-width: 1px;
        }

        .dropdown {
            display: inline-block;
        }

        .dropdown a {
            padding: 0px 15px;
        }

        #dropdown_content {
            display: none;
            position: absolute;
        }

        #dropdown_content>a {
            display: block;
            background-color: white;
            color: #275A84;
        }

        #dropdown_content>a:hover {
            background-color: lightgray;
            color: black;
        }

        .dropdown:hover #dropdown_content {
            display: block;
        }
    </style>
</head>

<body>
    <div id="fixedheader">
        <div class="header1">
            <div>
                <?php
                if (isset($_SESSION['user'])) {
                    include('conn.php');
                    $user_email = $_SESSION['user'];
                    $sql = "SELECT user_first_name, user_last_name
                            FROM user WHERE user_email = '$user_email'";
                    $result = mysqli_query($con, $sql);
                    $row = mysqli_fetch_array($result);
                    echo "<a href='#' style='cursor:auto'>" . $row['user_first_name'] . " " . $row['user_last_name'] . "</a>";
                    mysqli_close($con);
                } else {
                    echo "<a href='member_login_page.php'>Login | Sign up</a>";
                }
                ?>
            </div>
        </div>

        <div class="header2">
            <div class="splogo">
                <a href="home_page.php"><img src="images/Title.jpg"></a>
            </div>

            <div class="headernav">
                <a href="home_page.php">Home</a>
                <div class="dropdown">
                    <a href="Course_page.php">Our Course</a>
                    <div id="dropdown_content">
                        <a href="Event_page.php">Events</a>
                    </div>
                </div>
                <a href="Our_lecturer_page.php">Our Lecturers</a>
                <a href="about_Us.php">About us</a>
                <a href="choose_forum.php">Forum</a>
                <a href="trivia_home.php">Trivia</a>
                <a href="contact_Us.php">Contact us</a>

            </div>
        </div>
    </div>
</body>

</html>