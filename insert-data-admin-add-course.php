<?php

include("conn.php");

$insert_sql = "INSERT INTO course (course_name, date, description)

    VALUES

    ('$_POST[add_course_name]','$_POST[add_course_date]','$_POST[add_course_des]')";

mysqli_query($con, $insert_sql);

mysqli_close($con);
?>

<script>
    alert("Course Added Successfully!");
    window.location.href = "admin-mod-course.php";
</script>;