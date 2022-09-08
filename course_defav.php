<?php
	include("database.php");
	$id = intval($_GET['id']);
	$result = mysqli_query($conn,"DELETE FROM course_fav WHERE course_details_ID=$id");
	mysqli_close($conn); //close database connection



    echo
'<script>
    window.location.href = "Course_page.php";
</script>';
?>