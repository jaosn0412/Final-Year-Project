<?php
	include("database.php");

	$id = intval($_GET['id']);

	$delete_sql = mysqli_query($conn,"DELETE FROM event_details WHERE event_id='$id'");

    echo
    '<script>
        alert("Event Deleted Successfully!");
        window.location.href = "admin-mod-event.php";
    </script>';

	mysqli_close($conn);
?>