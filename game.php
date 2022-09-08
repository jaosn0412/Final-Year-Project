<!DOCTYPE html>
<html>
<head>
    <title>Game</title>
    <?php include("database.php") ?>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap');
        :root {
            font-family: 'Libre Baskerville', serif;
        }

        #trivia-head {
            text-align: center;
            border: 10px solid #ed8947;
            border-radius: 20px;
            width: 500px;
            margin:50px auto;
        }
        
        .out-box {
            margin-left:10%;
            margin-right:10%;
            margin-bottom: 3%;
            /* border: 2px black solid; */
            padding: 20px;
            border-radius: 10px;

        }

        .q-box {
            text-align: center;
            border: #ed8947 2px solid;
            border-radius: 15px;
            margin-bottom: 30px;
            background-color: #ed8947;
        }

        input[type="radio"] {
            margin: 15px;
            /* background-color: pink; */
        }

        input[type="text"] {
            width: 98%;
            padding: 10px;
            font-size: 25px;
            font-family: 'Libre Baskerville', serif;
            margin-bottom:15px;
            /* background-color:pink; */

        }

        #submit-btn {
            margin-left: 80%;
            width: 10%;
            padding: 15px;
            border: solid 2px #f0c534;
            border-radius: 10px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 20px;
            background-color: #f0c534;
        }

        #submit-btn:hover{
            cursor: pointer;
            color: white    ;
            background-color: black;
        }

    </style>
</head>
<body>
    <?php
    $id = intval($_GET['id']);
    $sel_topic = mysqli_query($conn, "SELECT * FROM trivia_title WHERE trivia_id = $id");
    $topic = mysqli_fetch_array($sel_topic);
    $select_q = mysqli_query($conn, "SELECT * FROM objective_trivia WHERE trivia_id = $id");
    $select_corr = mysqli_query($conn, "SELECT corr_ans FROM objective_trivia WHERE trivia_id = $id");
    $corr_ans = mysqli_fetch_array($select_corr);

    $select_sub_q = mysqli_query($conn, "SELECT * FROM subjective_trivia WHERE trivia_id = $id");
        
    ?>
    <h1 id="trivia-head"><?php echo $topic["trivia_topic"] ?></h1>
    <div class="out-box">
        <form action="check_ans.php?id=<?php echo $id; ?>" id="ans-form" method="post">
            <?php while ($question = mysqli_fetch_array($select_q)) {
                $array = array($question["corr_ans"], $question["wrng_ans1"], $question["wrng_ans2"], $question["wrng_ans3"]);
                shuffle($array);
            ?>
            <div class="q-box">
                <h2 id="ques"><?php echo $question["obj_ques"];?></h2>
            </div>
                <input type="radio" required="required" id="ans1" name="ans?id=<?php echo $question['objective_ID']; ?>" value="<?php echo $array[0];?>">
                <label for="ans1"><?php echo $array[0];?></label><br>
                
                <input type="radio" required="required" id="ans2" name="ans?id=<?php echo $question['objective_ID']; ?>" value="<?php echo $array[1];?>">
                <label for="ans2"><?php echo $array[1];?></label><br>
                
                <input type="radio" required="required" id="ans3" name="ans?id=<?php echo $question['objective_ID']; ?>" value="<?php echo $array[2];?>">
                <label for="ans3"><?php echo $array[2];?></label><br>
                
                <input type="radio" required="required" id="ans4" name="ans?id=<?php echo $question['objective_ID']; ?>" value="<?php echo $array[3];?>">
                <label for="ans4"><?php echo $array[3];?></label>
            <?php
                }
            ?>
            <?php while ($sub_ques = mysqli_fetch_array($select_sub_q)) { ?>
                <div class="q-box">
                <h2 id="ques"><?php echo $sub_ques["subj_ques"];?></h2>
            </div>
                <input type="text" id="sub-ans" required="required" placeholder="Answer: "name="sub-ans?id=<?php echo $sub_ques['subjective_ID'] ?>">
            <?php
                }
            ?>
    </div>
        <button type="submit" id="submit-btn">Submit</button>
        </form>
</body>
</html>