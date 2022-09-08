<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>footer</title>
    <style>
        .footer-container {
            background-color:#ed8947;
            width: 100%;
            height: 40%;
            display: flex;
            flex-direction: column;
            margin: 0px auto;
        }

        .footer-logo img {
            height: 125px;
            display: inline-block;
            padding: 45px;
            border-radius: 60px;
        }

        .footer-link {
            display: flex;
            height: auto;
            width: 100%;
            font-family: "Times New Roman";
            font-size: 18px;
            margin: 0px;
        }

        .footer-link>div {
            width: 30%;
        }

        .footer-link ul {
            padding: 30px;
        }

        .footer-link li {
            list-style-type: none;
            line-height: 45px;
        }

        .footer-link a,
        .footer-link a:visited {
            text-decoration: 0;
            color: azure;
            height: 45px;
            padding: 8px;
        }

        .footer-link a:hover {
            background-color: lightgray;
            color: black;
        }

        #mostright {
            width: auto;
            margin-left: 5%;
        }
    </style>
</head>

<body>
    <div class="footer-container">
        <table>
            <tr>
                <th>
                    <div class="footer-link">
                        <div>
                            <ul>
                                <li><a href="Event_page.php">Events</a></li>
                                <li><a href="Course_page.php">Courses</a></li>
                            </ul>
                        </div>
                        <div>
                            <ul>
                                <li><a href="Our_lecturer_page.php">Our&nbsp;Lecturers</a></li>
                                <li><a href="choose_forum.php">Forum</a></li>
                            </ul>
                        </div>
                        <div>
                            <ul>
                                <li><a href="trivia_home.php">Trivia</a></li>
                                <li><a href="feedback_page.php">Feedback</a></li>
                            </ul>
                        </div>
                        <div>
                            <ul>
                                <li><a href="contact_Us.php">Contact&nbsp;Us</a></li>
                                <li><a href="about_Us.php">About&nbsp;Us</a></li>
                            </ul>
                        </div>
                    </div>
                </th>
                <th>
                    <div id="mostright">
                        <div class="footer-logo">
                            <a href="home_page.php"><img id="footerehclogo" src="images/Logo"></a>
                        </div>
                    </div>
                </th>
        </table>
    </div>
</body>

</html>