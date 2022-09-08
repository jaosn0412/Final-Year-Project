<?php
     include("database.php");

     $sql = "INSERT INTO feedback (username, email_address, feedback)
     
     VALUES
     
     ('$_POST[username]', '$_POST[email_address]', '$_POST[feedback]')";

     mysqli_query($conn, $sql);
?>

<script>
    alert("Feedback Added!");
    window.location.href = "feedback_page.php";
</script>