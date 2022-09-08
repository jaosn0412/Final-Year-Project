<?php
    include ("database.php")

    $id = intval ($GET['id']);
    $result = mysqli_query($conn,"SELECT * FROM lecturer_info WHERE lecturer=$id");
	$row = mysqli_fetch_array($result);

    $update_sql="UPDATE lecturer SET
    lecturer_name='$_POST [edit_lecturer_name]',
    course_focus_on='$_POST [edit_lecturer_focus]',
    teaching_experience='$_POST [edit_lecturer_year]',
    WHERE lecturer_id='$row [lecturer_id]';";

    mysqli_close($conn);
?>