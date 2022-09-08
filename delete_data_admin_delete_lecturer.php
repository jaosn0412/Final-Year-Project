<?php
	include("database.php");

	$id = intval($_GET['id']);

	$delete_sql = mysqli_query($conn,"DELETE FROM lecturer_info WHERE lecturer_ID='$id'");

    echo
    '<script>
        alert("Lecturer Deleted Successfully!");
        window.location.href = "admin-mod-lec.php";
    </script>';

	mysqli_close($conn);
?>