<!DOCTYPE html>
<html>
    <head>
        <title>Event Moding</title>
        <style>
            .mod_title{
                font-size:40px;
                font-family:Impact;
                color:black;
                width:320px;
                text-align:center;
                border-bottom:10px solid #ed8947;
                margin:30px 300px;
            }

            .styled-table{
                border-collapse: collapse;
                margin: 100px 480px;
                width:900px;
                font-size: 0.9em;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                box-shadow: 0 0 20px rgba(0,0,0,0.15);
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
                text-transform:capitalize;
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

            .styled-table .func-butt-edit{
                cursor: pointer;
                padding: 16px 16px;
                width: 70px;
                border-radius: 10px;
                font-family: 'Signika', sans-serif;
                font-size: 20px;
                background-color: #f0c534;
                color: black;
                border: none;
            }

            .styled-table .func-butt-edit:hover{
                background-color:#C3BD62;
            }

            .styled-table .func-butt-delete{
                cursor: pointer;
                padding: 16px 16px;
                width: 70px;
                border-radius: 10px;
                font-family: 'Signika', sans-serif;
                font-size: 20px;
                background-color: yellow;
                color: red;
                border: none;
            }

            .styled-table .func-butt-delete:hover{
                background-color:#C3BD62;
            }

            #add-new-event-button {
                cursor: pointer;
                margin:30px 300px;
                padding: 10px;
                border-radius: 10px;
                font-family: 'Signika', sans-serif;
                font-size: 20px;
                background-color: #f0c534;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; 
                color: black;
                border: none;
                height: 25px;
                width: 170px;
                text-align: center;
            }

            #add-new-event-button:hover {
                background-color: #545454;
            }

        </style>
    </head>
    <body>
        <?php 
            include ('database.php');
            include('admin_header.php');

            $result = mysqli_query($conn,"SELECT * FROM event_details");
        ?>

        <div>
            <p class="mod_title">Event Modify Page</p>
            <span onclick="window.location.href='admin-add-new-event.php'" id="add-new-event-button">Add New Event</span>
        </div>
        <table class="styled-table">
            <thead>
                <tr>
                    <th style="width:130px;">Event Name</th>
                    <th style="width:130px;">Event Date</th>
                    <th>Event Description</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td>
                        <p style="width:150px;"><?php echo $row["event_name"];?></p>
                    </td>
                    <td>
                        <p><?php echo $row["event_date"];?></p>
                    </td>
                    <td>
                        <p style="text-align:left;"><?php echo $row["event_des"];?></p>
                    </td>
                    <td class="func-butt-edit" onclick="window.location.href='admin-mod-event-page.php?id=<?php echo $row['event_id'];?>'">Edit</td>
                    <td class="func-butt-delete" onclick="window.location.href='delete_data_admin_delete_event.php?id=<?php echo $row['event_id']; ?>'">Delete</td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>