<?php
    session_start();
    
        include("database.php");
        if(isset($_POST["login"])) 
        {
            include("database.php");
            $sql = "SELECT *
            FROM admin
            WHERE admin_username = '".$_POST['log_in_admin_username']."' AND admin_password = '".$_POST['log_in_admin_password']."' ";
            
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
    
            if($row) {
                $_SESSION["admin_id"] = "admin";
                echo
                "<script>
                    window.location.href='admin-mod-home-page.php';
                </script>";
            } 
            else {
                echo
                "<script>
                    alert('Your Username or Password is Wrong! Please Try Again!');
                    history.go(-1);
                </script>";
            }
            
            mysqli_close($conn);
        }
    

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Admin Log In</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&display=swap" rel="stylesheet">
        
        <style>
            .form-container 
            {
                margin: 100px auto;
                height: 400px;
                width: 500px;
                padding: 10px 50px 0px 0px;
                display: flex;
                flex-wrap: wrap;
                background-color: #eb8947;
                border-radius: 80px;
            }

            .form-title 
            {
                margin-left: 160px;
                margin-top: 30px ;
                font-size: 30px;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            }

            .form-box 
            {
                margin-left: 50px;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                font-size: 15px;
            }

            input[type=text], input[type=password] 
            {
                background-color: #ededed;
                border-color: #d4d4d4;
                color: black;
                width: 400px;
                height: 30px;
                border: 2px solid #ccc;
                border-radius: 8px;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                font-size: 15px;
            }

            input[type=submit]
            {
                background-color: rgb(230, 230, 65);
                color: black;
                margin-left: 200px;
                margin-bottom: 100px; 
                border: none;
                border-radius: 10px;
                padding: 10px 30px;
                cursor: pointer;
                font-size: 20px;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            }

            input[type=submit]:hover 
            {
                background-color: #545454;
            }

            #member-login-button 
            {
                cursor: pointer;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                font-size: 20px;
                padding: 20px;
                color:black;
                width: 200px;
                text-align: center;
                position: absolute;
                top: 5px;
                right: 5px;
                background-color: rgb(230, 230, 65);
                border-radius: 10px;
                
            }

            #member-login-button:hover 
            {
                background-color: #545454;
            }
        </style>

    </head>

    <body>
        <span onclick="window.location.href='member_login_page.php'" id="member-login-button">Login As Member</span>
        
        <form action="" method="post">
            <div class="form-container">
                <div class="form-title">
                    <strong>Admin Log In</strong>
                </div>
                
                <div class="form-box">
                    <strong>USERNAME</strong><br>
                    <input type="text" name="log_in_admin_username" placeholder="Username" required="required"><br><br>
                </div>

                <div class="form-box">
                    <strong>PASSWORD</strong><br>
                    <input type="password" name="log_in_admin_password" placeholder="Password" required="required"><br><br>
                </div>

                <input type="submit" name="login" value="Log In">
            </div>
        </form>

    </body>
</html>