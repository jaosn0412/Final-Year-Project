<?php
include("conn.php");

$id = intval($_GET['member_id']);

$result = mysqli_query($con, "DELETE FROM member WHERE member_id=$id");

$delete_sql = $result;

echo
'<script>
    alert("User Deleted Successfully!");
    window.location.href = "member_edit.php";
</script>';

mysqli_close($con);
