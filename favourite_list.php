<?php
    session_start();

    if(isset($_SESSION["member_id"])) {
        include("member-header.php");
    }
    else if(isset($_SESSION["admin_id"])) {
        echo
        "<script>
            alert('Please Log In As Member To Access This Page!');
            window.location.href='admin_log_in.php';
        </script>";
    }
    else {
        include("header.php");
    }
?>
<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Favourite List Page</title>
    <style>
        /* .searchbox {
            margin-left: 1200px;
            margin-top: 50px;
            margin-bottom:50px;
            position: relative;
            width: 180px;
            height: 35px;
            border: 2px solid;
            padding: 0px 20px;
            border-radius: 50px;
        }
        
        .elementsbox {
            width: 100%;
            height: 100%;
            vertical-align: middle;
        }
        
        .search {
            border: none;
            height: 70%;
            width: 70%;
            padding: 5px 5px;
            border-radius: 50px;
            font-size: 18px;
            font-family: "nunito";
            color: #424242;
            font-weight: 500;
            float:left;
        }
        
        .search:focus {
            outline: none;
        }
        
        .materials-icons {
            font-size: 25;
            color: #2980b9;
        } */
        
        .fav-content {
            border-collapse: collapse;
            margin: 50px;

        }
        
        .fav-content th {
            text-align: left;
            background-color: Black;
            color: white;
            padding: 4px 30px 4px 8px;
        }
        
        .fav-content td {
            width:800px;
            border: 1px solid black;
            padding: 4px 8px;
        }
        
        .fav-content tr:nth-child(odd) td {
            background-color: orange;
        }
        
        .border {
            border: 2px solid black;
            border-radius: 50px;
            width: 1000px;
            height: 100%;
            margin-bottom:30px;
        }

        #search-icon{
            padding:5px 5px;
            border:none;
            background-color:inherit;
            float:right;
        }
        .scroll-div {
            margin: 0px;
            width:900px;
            height: 500px;
            overflow: hidden;
            overflow-y: scroll;
            padding-right:5px;
        
        }

    </style>

</head>

<body>
    <?php
        include("database.php");
        // search
        // $search_event_key = "";

        // if(isset($_GET["btn-search-key"])) {
        // $search_event_key = $_GET["search-key"];
        // }

        // $result = mysqli_query($conn,"SELECT * FROM course_fav cf 
        // INNER JOIN course c ON cf.course_details_ID=c.course_ID 
        // INNER JOIN member m on cf.member_ID=m.member_id 
        // WHERE cf.member_ID = '$_SESSION["member_id"]'
        // AND course_name  LIKE '%$search_event_key%'
        // or description LIKE '%$search_event_key%'
        // or date LIKE '%$search_event_key%'
        // ");


        // $result1 = mysqli_query($conn,"SELECT * FROM course 
        // WHERE course_name  LIKE '%$search_event_key%'
        // or description LIKE '%$search_event_key%'
        // or date LIKE '%$search_event_key%'");



        // if (mysqli_num_rows($result) > 0) {
        //     while($row = mysqli_fetch_array($result)) {
    ?>


    <!-- <div class="searchbox">
        <div class="elementsbox">
                <form action="favourite list.php" id="search-form" method="get">
                    <input type="text" placeholder="Search..." class="search" name="search-key"></input>
                    <button type="submit" id="search-icon" name="btn-search-key">
                        <a href="#"><i class="material-icons">search</i></a>
                    </button>
                </form> 
        </div>
    </div> -->
    
    <center>
        <div class="border">
            <div class="scroll-div">
            <h1>Favourite Course </h1>

            <?php
            include("database.php");
            $sql1="SELECT * FROM course_fav cf INNER JOIN course c ON cf.course_details_ID=c.course_ID INNER JOIN member m on cf.member_ID=m.member_id WHERE cf.member_ID = '".$_SESSION["member_id"]."'";
            $course_row_result=mysqli_query($conn,$sql1);
            $sql="SELECT * FROM event_fav ef INNER JOIN event_details ed ON ef.event_detail_ID=ed.event_id INNER JOIN member m on ef.member_ID=m.member_id WHERE ef.member_ID = '".$_SESSION["member_id"]."'";
            $fav_row_result=mysqli_query($conn,$sql);
            ?>

            <table class="fav-content">
                <tr>
                    <th>Course Name </th>
                    <th>Description</th>
                    <th>Date</th>
                </tr>
                <?php
                    while($fav1_row=mysqli_fetch_array($course_row_result)){
                        echo "<tr>";
                        echo "<td>";
                        echo $fav1_row['course_name'];
                        echo "</td>";
                        echo "<td>";
                        echo $fav1_row['description'];
                        echo "</td>";
                        echo "<td>";
                        echo $fav1_row['date'];
                        echo "</td>";
                        echo "</tr>";
                    }
                ?>

            </table>

            <h1>Favourite Event</h1>

            <table class="fav-content">
                <tr>
                    <th>Event Name</th>
                    <th>Description</th>
                    <th>Date</th>
                </tr>
                <?php
                    while($fav_row=mysqli_fetch_array($fav_row_result)){
                        echo "<tr>";
                        echo "<td>";
                        echo $fav_row['event_name'];
                        echo "</td>";
                        echo "<td>";
                        echo $fav_row['event_des'];
                        echo "</td>";
                        echo "<td>";
                        echo $fav_row['event_date'];
                        echo "</td>";
                        echo "</tr>";
                    }
                ?>

            </table>
            </div>
            
        </div>

        

    </center>
    <?php include "Footer.php"?>
   

</body>

</html>