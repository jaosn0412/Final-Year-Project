<?php

session_start();

include("database.php");

$id = intval($_GET['id']);

$select_member = mysqli_query($conn, "SELECT member_name FROM member WHERE member_id = '".$_SESSION["member_id"]."'");
$member = mysqli_fetch_array($select_member);

$comment = $_POST['comment'];

$update = mysqli_query($conn, "INSERT INTO forum_comments (forum_ID, member_name, comments) VALUES ('$id','$member[0]','$comment')");

echo
'<script>
    alert("Comment Successfully Added");
    window.location.href = "choose_forum.php";
</script>';
?>