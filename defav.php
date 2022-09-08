<?php
	include("database.php");
	$id = intval($_GET['id']);
	$result = mysqli_query($conn,"DELETE FROM event_fav WHERE event_detail_ID=$id");
	mysqli_close($conn); //close database connection



    echo
'<script>
    window.location.href = "Event_page.php";
</script>';
?>