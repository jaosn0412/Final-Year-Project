<?php
session_start();
include("database.php");

$id = intval($_GET['id']);

$sel_mem = mysqli_query($conn, "SELECT member_id, member_name FROM member WHERE member_id = '".$_SESSION["member_id"]."'");
$mem =mysqli_fetch_array($sel_mem);

$sel_event = mysqli_query($conn, "SELECT event_name FROM event_details WHERE event_id = $id");
$event = mysqli_fetch_array($sel_event);


$sel_enroll = mysqli_query($conn, "SELECT * FROM event_enrolment");

$insert = mysqli_query($conn, "INSERT INTO event_enrolment (member_id, member_name, event_name) VALUES ('$mem[member_id]', '$mem[member_name]', '$event[0]')");

mysqli_query($conn, $insert);

echo
'<script>
    alert("Successfully Enrolled!");
    window.location.href = "Event_page.php";
</script>';
?>