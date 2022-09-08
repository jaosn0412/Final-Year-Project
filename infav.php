<?php
session_start();

include("database.php");

$member_id = $_SESSION['member_id'];

$id = intval($_GET['id']);

$insert = mysqli_query($conn, "INSERT INTO event_fav(event_detail_ID , member_ID) VALUES ('$id','$member_id')");

mysqli_query($conn, $insert);

echo
'<script>
    
    window.location.href = "Event_page.php";
</script>';
?>