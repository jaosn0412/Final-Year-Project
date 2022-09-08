<?php
    session_start();

    if(isset($_SESSION["member_id"])) {
        include("member-header.php");
    }
    else if(isset($_SESSION["admin_id"])) {
        echo
        "<script>
            alert('Please Log In As Member To Access This Page!');
            window.location.href='home_page.php';
        </script>";
    }
    else {
        echo
        "<script>
            alert('Please Log In As Member To Access This Page!');
            window.location.href='member_login_page.php';
        </script>";
    }
?>

<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Event Page</title>

    <style>
        .title{
            font-size:50px;
            font-family:Impact;
            margin:10px 90px;
            border-radius: 20px;
            border: 10px solid #ed8947;
            float:left;
        }

        .elementsbox {
            width: 100%;
            height: 100%;
            vertical-align: middle;
        }
        
        .materials-icons {
            font-size: 25;
            color: #2980b9;
        }
        
        .scroll-div {
            margin: 0px;
            width: 350px;
            height: 180px;
            overflow: hidden;
            overflow-y: scroll;
        }
        
        .scroll-content {
            font-size: 15px;
        }
        
        .lecContainer {
            width: 1000px;
            height: 1500px;
            margin: 100px;
        }
        
        .lecContainer .box-lecContainer .box {
            border: 5px solid #ed8947;
            border-radius: 15px;
            padding: 5px;
            width: 1000px;
            height: 180px;
            margin: 15px;
            display: none;
        }
        
        .box {
            display: flex;
        }
        
        .box-lecContainer {
            width: 1000px;
            height: auto;
        }
        
        .lecImage {
            left: 50%;
            width: 100px;
            height: 150px;
            margin: 12px;
            float: left;
        }
        
        #btn {
            margin-top: 20px;
            display: inline-block;
            padding: 10px 30px;
            border: 1px solid #334;
            color: #334;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }
        
        #btn:hover {
            background-color: black;
            border-color: orange;
            color: #fff;
        }
        
        .lecContainer .box-lecContainer .box:nth-child(1),
        .lecContainer .box-lecContainer .box:nth-child(2),
        .lecContainer .box-lecContainer .box:nth-child(3) {
            display: inline-block;
        }
        
        .favbtn {
            background: transparent;
            border: none;
            margin-bottom: 80px;
            font-size: 15px;
            outline: none;
            color: grey;
            display: flex;
        }
        
        .favbtn i:hover {
            cursor: pointer;
        }
        
        .favenroll-p {
            position: relative;
            width: 235px;
            height: 80px;
            margin-top: -180px;
            float: right;
        }
        
        #btns {
            margin-top: 20px;
            display: inline-block;
            padding: 10px 30px;
            border: 1px solid #334;
            color: #334;
            font-size: 20px;
            border-radius: 5px;
            cursor: pointer;
            background-color: #eb8947;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        #btns:hover {
            background-color: black;
            border-color: orange;
            color: #fff;

        }
    </style>
</head>

<body>
    <div class="title">
        Events 
    </div>
    <center>
        <div class="lecContainer">
                <?php 
                    include ("database.php");
                    $result = mysqli_query($conn,"SELECT * FROM event_details" );
                    while ($row = mysqli_fetch_array($result)) {
                        
                ?>

                <div class="box-lecContainer">

                <div class="box">
                    <div class="lecImage">
                        <img src="Pic/sdp_p1.jpg" alt="">
                    </div>
                    <div class="scroll-div">
                        <div class="scroll-content">
                            <h2><?php echo $row['event_name']; ?></h2>
                            <p id="Description" style="text-align:left"><?php echo $row['event_des']; ?></p>
                            <?php echo $row['event_date']; ?>
                        </div>
                    </div>
                    <div class="favenroll-p">

                    <?php 
                    $event_id5 = $row["event_id"];
                    $resultfav = mysqli_query($conn,"SELECT * FROM event_fav
                    WHERE event_detail_ID = $event_id5 AND member_ID = '".$_SESSION["member_id"]."'");
                    $fav_event_list = mysqli_fetch_array($resultfav);
                    if(empty($fav_event_list)): 
                    ?>
                        <form action="infav.php?id=<?php echo $row["event_id"]; ?>" method="post">
                            <button style='color: grey;' onclick="<?php echo 'Toggle'.$row['event_id']; ?>()" id="<?php echo $row['event_id']; ?>" class="favbtn"><i class="material-icons">favorite_border</i></button>
                        </form>
                        <?php else: ?>
                            <form action="defav.php?id=<?php echo $row["event_id"]; ?>" method="post">
                                <button style='color: red;' onclick="<?php echo 'Toggle'.$row['event_id']; ?>()" id="<?php echo $row['event_id']; ?>" class="favbtn"><i class="material-icons">favorite_border</i></button>
                            </form>
                        <?php endif;?>
                        <form action="enrol.php?id=<?php echo $row["event_id"]; ?>" method="POST" >
                            <input type="submit" value="Enroll"  name="enrol?id=<?php echo $row["event_id"]; ?>" id="btns">
                        </form>

                    </div>
                </div>
                
                <script>
                    var <?php echo 'favbtn'.$row['event_id']; ?> = document.getElementById('<?php echo $row['event_id']; ?>');
                    function <?php echo 'Toggle'. $row['event_id'];?>() {
                    }
                </script>

                <?php } ?> 
                </div>
        </div>
    </center>
    <?php include "Footer.php"?>
</body>
</html>