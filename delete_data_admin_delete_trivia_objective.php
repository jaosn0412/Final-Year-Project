<?php
	include("database.php");

	$id = intval($_GET['id']);
    $trivia_id = $_POST['trivia_id'];

	$delete_sql = mysqli_query($conn,"DELETE FROM objective_trivia WHERE objective_ID='$id'");

    echo
    '<script>
        alert("Trivia Deleted Successfully!");
        window.location.href = "admin-mod-trivia-ques-objective.php?id='.$trivia_id.'";
    </script>';

	mysqli_close($conn);
?>