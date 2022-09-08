<!DOCTYPE html>
<html>

<head>
    <title>Forum Moding</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .mod_title {
            font-size: 40px;
            font-family: Impact;
            color: black;
            width: 420px;
            text-align: center;
            border-bottom: 3px solid;
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
            background-color: #009879;
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
            border-bottom: 2px solid #009879;
        }

        .styled-table .func-butt-edit {
            cursor: pointer;
            height: auto;
            width: 70px;
            font-family: 'Signika', sans-serif;
            font-size: 20px;
            background-color: #D1D100;
            border-radius: 25px;
            border: none;
        }

        .styled-table .func-butt-edit:hover {
            background-color: #C3BD62;
        }

        .styled-table .func-butt-delete {
            cursor: pointer;
            height: auto;
            width: 70px;
            font-family: 'Signika', sans-serif;
            font-size: 20px;
            background-color: #FF0000;
            border-radius: 25px;
            border: none;
        }

        .styled-table .func-butt-delete:hover {
            background-color: #C3BD62;
        }

        #add-new-forum-button {
            cursor: pointer;
            margin: 30px 300px;
            padding: 15px 5px;
            border-radius: 10px;
            font-family: 'Signika', sans-serif;
            font-size: 20px;
            background-color: black;
            color: white;
            border: none;
            height: 25px;
            width: 170px;
            text-align: center;
        }

        #add-new-forum-button:hover {
            background-color: #545454;
        }
    </style>
</head>

<body>
    <?php
    include('conn.php');
    include('admin_header.php');

    $result = mysqli_query($con, "Select * FROM forum");
    ?>


    <div>
        <p class="mod_title">Forum Modify Page</p>
        <span onclick="window.location.href='admin-add-new-forum.php'" id="add-new-forum-button">Add New</span>
    </div>
    <table class="styled-table">
        <thead>
            <tr>
                <th>Forum ID</th>
                <th>Forum Topic</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $result = mysqli_query($con, "Select * FROM forum");

            while ($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td>
                        <p><?php echo $row['forum_ID']; ?></p>
                    </td>

                    <td>
                        <p><?php echo $row['forum_topic']; ?></p>
                    </td>

                    <td class="func-butt-edit" onclick="window.location.href='admin-mod-forum-page.php?id=<?php echo $row['forum_ID']; ?>'">Update</td>
                    <td class="func-butt-delete" onclick="window.location.href='delete_data_admin_delete_forum.php?id=<?php echo $row['forum_ID']; ?>'">Delete</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>
    <?php
    mysqli_close($con);
    ?>
</body>

</html>