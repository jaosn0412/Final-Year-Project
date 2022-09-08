<?php
    session_start();

    include ("database.php");

    $sql =
    "SELECT *
    FROM member
    WHERE member_id = '".$_SESSION["member_id"]."'";

    $result= mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    
    $update_sql="UPDATE member SET
    member_name ='$_POST[edit_member_name]',
    member_phone = '$_POST[edit_member_phone]',
    member_email ='$_POST[edit_member_email]',
    member_address = '$_POST[edit_member_address]',
    member_gender = '$_POST[edit_member_gender]',
    member_date_of_birth = '$_POST[edit_member_date_of_birth]',
    member_username = '$_POST[edit_member_username]'
    WHERE member_id = '$row[member_id]';";

	mysqli_query($conn,$update_sql);
	echo
	'<script>
		alert("Profile Saved!");
		window.location.href = "member_profile.php";
	</script>';

	
	//close database connection
	mysqli_close($conn);
?>