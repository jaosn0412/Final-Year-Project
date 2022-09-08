<?php   
    session_start();

    if(isset($_SESSION["member_id"])) {
        include("member-header.php");
    }
    else {
        echo
        "<script>
            alert('Please Log In As Member To Store Your Points!');
            window.location.href='member_login_page.php';
        </script>";
    }

    include("database.php");

    $id = intval($_GET['id']);

    $select_corr = mysqli_query($conn, "SELECT objective_ID, corr_ans FROM objective_trivia WHERE trivia_id = $id");
    $select_subj_corr = mysqli_query($conn, "SELECT subjective_ID, subj_ans FROM subjective_trivia WHERE trivia_id = $id");

    $score = 0;
    

    while($corr_ans = mysqli_fetch_array($select_corr)) {
        $obj_ans = $_POST['ans?id='.$corr_ans['objective_ID']];
        
        if($obj_ans == $corr_ans['corr_ans']) {
            $score += 10;
        }
    }

    while($corr_subj = mysqli_fetch_array($select_subj_corr)) {
        $sub_ans = $_POST['sub-ans?id='.$corr_subj['subjective_ID']];
        
        if($sub_ans == $corr_subj['subj_ans']) {
            $score += 20;
        }
    }

    $points = mysqli_query($conn, "SELECT member_points FROM member WHERE member_id = '".$_SESSION["member_id"]."'");
    $trivia_points = mysqli_fetch_array($points);
    $total = $trivia_points['member_points'] + $score;
    
    $update = mysqli_query($conn, "UPDATE member SET member_points = $total WHERE member_id = '".$_SESSION["member_id"]."'" );

    echo
    '<script>
        window.location.href = "result.php";
    </script>';
?>

