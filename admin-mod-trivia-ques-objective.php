<!DOCTYPE html>
<html>
    <head>
        <title>Lecture Moding</title>
        <style>
            .mod_title{
                font-size:40px;
                font-family:Impact;
                color:black;
                width:650px;
                text-align:center;
                border-bottom:10px solid #ed8947;
                margin:30px 300px;
            }

            .styled-table{
                border-collapse: collapse;
                margin: 30px 420px;
                font-size: 0.9em;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                width: 1000px;
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
                font-size: 15px;
                background-color: #f0c534;
                color: black;
                border: none;
            }

            .styled-table .func-butt-delete{
                cursor: pointer;
                padding: 16px 16px;
                width: 70px;
                border-radius: 10px;
                font-family: 'Signika', sans-serif;
                font-size: 15px;
                background-color: yellow;
                color: red;
                border: none;
            }

            #add-new-trivia-obj-button {
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

            #add-new-trivia-obj-button:hover {
                background-color: #545454;
            }
        </style>
    </head>
    <body>
        <?php 
            include ('database.php');
            include ('admin_header.php');
            $id = intval($_GET['id']);
            $result = mysqli_query($conn,"SELECT * FROM objective_trivia WHERE trivia_id=$id");
            $title_result = mysqli_query($conn,"SELECT trivia_topic FROM trivia_title WHERE trivia_id=$id");
        ?>
        <p class="mod_title">Trivia Modify Page [<?php while ($title = mysqli_fetch_array($title_result)) { echo $title['trivia_topic']; }?>]</p>
        <div>
            <span onclick="window.location.href='admin-add-new-trivia-obj.php?id=<?php echo $id; ?>'" id="add-new-trivia-obj-button">Add New Trivia Question</span>
        </div>
        <table class="styled-table">
            <thead>
                <tr>
                    <th>Trivia Question</th>
                    <th>Trivia Correct Answer</th>
                    <th>Trivia Wrong Answer1</th>
                    <th>Trivia Wrong Answer2</th>
                    <th>Trivia Wrong Answer3</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td>
                        <p><?php echo $row["obj_ques"];?></p>
                    </td>
                    <td>
                        <p><?php echo $row["corr_ans"];?></p>
                    </td>
                    <td>
                        <p><?php echo $row["wrng_ans1"];?></p>
                    </td> 
                    <td>
                        <p><?php echo $row["wrng_ans2"];?></p>
                    </td>
                    <td>
                        <p><?php echo $row["wrng_ans3"];?></p>
                    </td>                       
                    <td class="func-butt-edit"onclick="window.location.href='admin-mod-trivia-ques-page-objective.php?id=<?php echo $row['objective_ID']; ?>'">Edit</td>
                    <td class="func-butt-delete">
                        <form method="post" action="delete_data_admin_delete_trivia_objective.php?id=<?php echo $row['objective_ID']; ?>">
                            <input type="hidden" name="trivia_id" value="<?php echo $row['trivia_id']; ?>">
                            <button type="submit" class="func-butt-delete">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
            
        </table>
    </body>
</html>