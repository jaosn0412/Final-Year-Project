<?php

    include("database.php");

    $insert_sql= "INSERT INTO event_details (event_name, event_date, event_des)

    VALUES

    ('$_POST[add_event_name]','$_POST[add_event_date]','$_POST[add_event_des]')";

    mysqli_query($conn, $insert_sql);

    mysqli_close($conn);
?>

    <script>
        alert("Event Added Successfully!");
        window.location.href = "admin-mod-event.php";
    </script>;