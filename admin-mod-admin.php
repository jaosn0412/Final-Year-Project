<!DOCTYPE html>
<html>

<head>
    <title>Admin Moding</title>
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
            margin: 100px 400px;
            width: 1100px;
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
    </style>
</head>

<body>
    <?php
    include('conn.php');
    include('admin_header.php');

    $result = mysqli_query($con, "SELECT * FROM admin");
    ?>

    <div>
        <p class="mod_title">Admin Modify Page</p>
    </div>
    <table class="styled-table">
        <thead>
            <tr>
                <th style="width:150px;">Admin ID</th>
                <th style="width:150px;">Admin Username</th>
                <th>Admin Password</th>
                <th>Update</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td>
                        <p style="width:150px;"><?php echo $row["admin_id"]; ?></p>
                    </td>
                    <td>
                        <p style="width:150px;"><?php echo $row["admin_username"]; ?></p>
                    </td>
                    <td>
                        <p><?php echo $row["admin_password"]; ?></p>
                    </td>

                    <td class="func-butt-edit" onclick="window.location.href='admin-mod-admin-page.php?id=<?php echo $row['admin_id']; ?>'">Update</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>