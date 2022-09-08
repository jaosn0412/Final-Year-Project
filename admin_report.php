<!DOCTYPE html>
<html>

<head>
    <title>Report Moding</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .mod_title {
            font-size: 40px;
            font-family: Impact;
            color: black;
            width: 350px;
            text-align: center;
            border-bottom: 10px solid #ed8947;
            margin: 30px 300px;
        }

        .styled-table {
            border-collapse: collapse;
            margin: 50px 300px;
            width: 1200px;
            font-size: 0.9em;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }

        .styled-table thead tr {
            background-color: #ed8947;
            color: #ffffff;
            text-align: center;
        }

        .styled-table th,
        .styled-table td {
            padding: 12px 15px;
            font-size: 20px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        .styled-table tbody tr {
            border-bottom: 1px solid #dddddd;
            text-align: center;
        }

        .styled-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .styled-table tbody tr:last-of-type {
            border-bottom: 2px solid #ed8947;
        }

        .styled-table .func-butt-edit {
            cursor: pointer;
            height: auto;
            width: 70px;
            font-family: 'Signika', sans-serif;
            font-size: 20px;
            background-color: #f0c534;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; 
            border-radius: 25px;
            border: none;
        }

        .styled-table .func-butt-edit:hover {
            background-color: #C3BD62;
        }
    </style>
</head>

<body>
    <?php
    include('conn.php');
    include('admin_header.php');
    ?>

    <div>
        <p class="mod_title">Event</p>
        <table class="styled-table">
            <thead>
                <tr>
                    <th>Event Name</th>
                    <th>Datetime</th>
                    <th>Event Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $result = mysqli_query($con, "Select * FROM event_details");

                while ($row = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td>
                            <p><?php echo $row['event_name']; ?></p>
                        </td>

                        <td>
                            <p><?php echo $row['event_date']; ?></p>
                        </td>

                        <td>
                            <p><?php echo $row['event_des']; ?></p>
                        </td>

                        <td class="func-butt-edit" onclick="window.location.href='admin-mod-event-page.php?id=<?php echo $row['event_id']; ?>'">Update</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        </br></br>
        <div>
            <p class="mod_title">Course</p>
            <table class="styled-table">
                <thead>
                    <tr>
                        <th>Course Name</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $result = mysqli_query($con, "Select * FROM course");

                    while ($row = mysqli_fetch_array($result)) { ?>
                        <tr>
                            <td>
                                <p><?php echo $row['course_name']; ?></p>
                            </td>

                            <td>
                                <p><?php echo $row['description']; ?></p>
                            </td>

                            <td>
                                <p><?php echo $row['date']; ?></p>
                            </td>

                            <td class="func-butt-edit" onclick="window.location.href='admin-mod-course-page.php?id=<?php echo $row['course_ID']; ?>'">Update</td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>


            </br></br>

            <div>
                <p class="mod_title">Forum</p>
                <table class="styled-table">
                    <thead>
                        <tr>
                            <th>Forum ID</th>
                            <th>Number of Comments</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        for ($x = 1; $x <= 2; $x++) {
                            $result = mysqli_query($con, "Select forum_ID FROM forum_comments WHERE forum_ID=$x");
                            $num_commt = mysqli_num_rows($result);
                            $row = mysqli_fetch_array($result);
                        ?>
                            <tr>
                                <td>
                                    <p><?php echo $row['forum_ID']; ?></p>
                                </td>

                                <td>
                                    <p><?php echo $num_commt; ?></p>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

                <br><br>

                <?php mysqli_close($con); ?>
            </div>
        </div>
    </div>
</body>

</html>