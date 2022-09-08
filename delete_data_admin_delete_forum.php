<?php
include("conn.php");

$id = intval($_GET['id']);

$result = mysqli_query($con, "DELETE FROM forum WHERE forum_ID=$id");

$delete_sql = $result;

echo
'<script>
    alert("Forum Deleted Successfully!");
    window.location.href = "forum_edit.php";
</script>';

mysqli_close($con);
