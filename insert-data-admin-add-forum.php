<?php

include("conn.php");

$insert_sql = "INSERT INTO forum (forum_topic)

    VALUES

    ('$_POST[add_forum_topic]')";

mysqli_query($con, $insert_sql);

mysqli_close($con);
?>

<script>
    alert("Forum Added Successfully!");
    window.location.href = "forum_edit.php";
</script>;