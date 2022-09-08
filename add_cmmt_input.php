<?php
     include("database.php");

     $sql = "INSERT INTO course_cmmt (comment)
     
     VALUES
     
     ('$_POST[mem_cmmt]')";

     mysqli_query($conn, $sql);
?>


<script>
    alert("Comment Added!");
    window.location.href = "choose_course_page.php";
</script>

