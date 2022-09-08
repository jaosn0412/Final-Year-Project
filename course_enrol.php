<?php
session_start();
include("database.php");

$id = intval($_GET['id']);

$sel_mem = mysqli_query($conn, "SELECT member_id, member_name FROM member WHERE member_id = '".$_SESSION["member_id"]."'");
$mem =mysqli_fetch_array($sel_mem);

$sel_course = mysqli_query($conn, "SELECT course_name FROM course WHERE course_ID = $id");
$course = mysqli_fetch_array($sel_course);


$sel_enroll = mysqli_query($conn, "SELECT * FROM course_enrolment");

$insert = mysqli_query($conn, "INSERT INTO course_enrolment (member_id, member_name, course_name) VALUES ('$mem[member_id]','$mem[member_name]','$course[0]')");

mysqli_query($conn, $insert);

echo
'<script>
    alert("Successfully Enrolled!");
    window.location.href = "Course_page.php";
</script>';
?>