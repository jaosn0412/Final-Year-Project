<?php

    include("database.php");

    $insert_sql= "INSERT INTO lecturer_info (lecturer_name, lecturer_age, lecturer_course)

    VALUES

    ('$_POST[add_lecturer_name]','$_POST[add_lecturer_year]','$_POST[add_lecturer_focus]')";

    mysqli_query($conn, $insert_sql);

    mysqli_close($conn);
?>

    <script>
        alert("Lecturer Added Successfully!");
        window.location.href = "admin-mod-lec.php";
    </script>;