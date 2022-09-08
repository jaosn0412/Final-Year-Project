<?php
include("conn.php");

$id = intval($_GET['id']);

$result = mysqli_query($con, "DELETE FROM course WHERE course_ID=$id");

$delete_sql = $result;

echo
'<script>
    alert("Course Deleted Successfully!");
    window.location.href = "admin-mod-course.php";
</script>';

mysqli_close($con);
