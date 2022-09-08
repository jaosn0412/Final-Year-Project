<?php
	//take the database connection codes to here from connect_database.php
	include("database.php");
	
	$insert_sql="INSERT INTO member (member_name, member_phone, member_email, member_address,
	member_gender, member_date_of_birth, member_username, member_password, member_points)
		
	VALUES
		
	('$_POST[register_member_name]','$_POST[register_member_phone_number]','$_POST[register_member_email]',
	'$_POST[register_member_address]','$_POST[register_member_gender]','$_POST[register_member_date_of_birth]',
	'$_POST[register_member_username]','$_POST[register_member_password]', '0')";


	//find repeated phone number
	$register_member_phone_number = $_POST['register_member_phone_number'];

	$phone_sql = mysqli_query($conn, 
	"SELECT member_phone
	FROM member
	WHERE member_phone = '$register_member_phone_number'");

	//find repeated email
	$register_member_email = $_POST['register_member_email'];

	$email_sql = mysqli_query($conn, 
	"SELECT member_email
	FROM member
	WHERE member_email = '$register_member_email'");

	//find repeated username
	$register_member_username = $_POST['register_member_username'];

	$username_sql = mysqli_query($conn, 
	"SELECT member_username
	FROM member
	WHERE member_username = '$register_member_username'");

	if (mysqli_num_rows($phone_sql) > 0) {
		echo
		'<script>
			alert("Phone Number Exists, Please Enter Another Phone Number.");
			history.go(-1);
		</script>';
		die();
	}
	else if (mysqli_num_rows($email_sql) > 0) {
		echo
		'<script>
			alert("Email Exists, Please Enter Another Email.");
			history.go(-1);
		</script>';
		die();
	}
	else if (mysqli_num_rows($username_sql) > 0) {
		echo
		'<script>
			alert("Username Exists, Please Enter Another Username.");
			history.go(-1);
		</script>';
		die();
	}
	else {
		mysqli_query($conn,$insert_sql);
		echo
		'<script>
			alert("Register Successfully!");
			window.location.href = "insert_member_data_trivia.php";
		</script>';
	}
	
	//close database connection
	mysqli_close($conn);
?>