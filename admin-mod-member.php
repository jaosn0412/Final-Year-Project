<!DOCTYPE html>
<html>

<head>
    <title>Member Moding</title>
    <style>
        .mod_title {
            font-size: 40px;
            font-family: Impact;
            color: black;
            width: 420px;
            text-align: center;
            border-bottom: 10px solid #ed8947;
            margin: 30px 300px;
        }

        .styled-table {
            border-collapse: collapse;
            margin: 100px 400px;
            width: 1100px;
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
            background-color: yellow;
            color:red;
            border-radius: 25px;
            border: none;
        }

        .styled-table .func-butt-delete:hover {
            background-color: #C3BD62;
        }

        #add-new-course-button {
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

        #add-new-course-button:hover {
            background-color: #545454;
        }
    </style>
</head>

<body>
    <?php
    include('conn.php');
    include('admin_header.php');

    $result = mysqli_query($con, "SELECT * FROM member");
    ?>

    <div>
        <p class="mod_title">Member Modify Page</p>
    </div>
    <table class="styled-table">
        <thead>
            <tr>
                <th style="width:150px;">Member ID</th>
                <th style="width:150px;">Member First Name</th>
                <th>Member Email</th>
                <th>Member Username</th>
                <th>Member Address</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td>
                        <p style="width:150px;"><?php echo $row["member_id"]; ?></p>
                    </td>
                    <td>
                        <p style="width:150px;"><?php echo $row["member_name"]; ?></p>
                    </td>
                    <td>
                        <p><?php echo $row["member_email"]; ?></p>
                    </td>
                    <td>
                        <p><?php echo $row["member_username"]; ?></p>
                    </td>
                    <td>
                        <p><?php echo $row["member_address"]; ?></p>
                    </td>
                    <td class="func-butt-edit" onclick="window.location.href='admin-mod-member-page.php?id=<?php echo $row['member_id']; ?>'">Edit</td>
                    <td class="func-butt-delete" onclick="window.location.href='delete_data_admin_delete_user.php?id=<?php echo $row['member_id']; ?>'">Delete</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>