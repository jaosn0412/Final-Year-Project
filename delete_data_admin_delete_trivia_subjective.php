<?php
	include("database.php");

	$id = intval($_GET['id']);
    $trivia_id = $_POST['trivia_id'];

	$delete_sql = mysqli_query($conn,"DELETE FROM subjective_trivia WHERE subjective_ID='$id'");

    echo
    '<script>
        alert("Trivia Deleted Successfully!");
        window.location.href = "admin-mod-trivia-ques-subjective.php?id='.$trivia_id.'";
    </script>';

	mysqli_close($conn);
?>
