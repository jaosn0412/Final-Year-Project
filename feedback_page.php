<!DOCTYPE html>
    <html>
        <head>
            <title>Feedback</title>
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&display=swap" rel="stylesheet">
            
            <style>
                .form-container1
                {
                    height: 150px;
                    padding: 10px;
                    border: black;
                    display: flex;
                    flex-wrap: wrap; 
                    margin: 100px auto 30px auto;
                    justify-content: center;
                }

                .form-container2
                {
                    color: black;
                    margin: auto;
                    text-align: center;
                }

                .form-box 
                {
                    font-family: 'Mochiy Pop One', sans-serif;
                    font-size: 20px;
                    margin: 20px auto;
                    width: 1100px;
                    text-align: left;
                }

                input[type=text1]
                {
                    background-color: #ededed;
                    border-color: #d4d4d4;
                    color: black;
                    width: 1100px;
                    height: 40px;
                    border: 2px solid #ccc;
                    border-radius: 8px;
                    font-family: 'Mochiy Pop One', sans-serif;
                    font-size: 15px;
                }

                input[type=text2]
                {
                    
                    background-color: #ededed;
                    border-color: #d4d4d4;
                    color: black;
                    width: 1100px;
                    height: 100px;
                    border: 2px solid #ccc;
                    border-radius: 8px;
                    font-family: 'Mochiy Pop One', sans-serif;
                    font-size: 15px;
                }

                input[type=submit] {
                    background-color: #f0c534;
                    color: black;
                    border: none;
                    border-radius: 10px;
                    padding: 16px 50px;
                    cursor: pointer;
                    font-size: 20px;
                    font-family: 'Mochiy Pop One', sans-serif;
                    margin-top: 10px;
                    margin-bottom:10px;
                }

                input[type=submit]:hover {
                    background-color: #545454;
                }

            </style>
        
        </head>

    </html>

    <body>
        <?php include "Header.php" ?>      
        <form class="form-container2" method="post" action="feedback_insert.php">

            <h1 style=" color: black;
                        font-family: 'Mochiy Pop One', sans-serif;
                        text-align: center;
                        padding: 10px;
                        font-size: 50px;
                        border: 15px solid #ed8947;
                        border-radius: 30px;
                        width: 600px;
                        margin: 50px auto;">Feedback Form</h1>
            
                
                <div class="form-box">
                    <strong>Username</strong><br>
                    <input type="text1" name="username" placeholder="Enter UserName" required="required">
                </div>

                <div class="form-box">
                    <strong>Email Address</strong><br>
                    <input type="text1" name="email_address" placeholder="Enter Email Address" required="required">
                </div>


                <div class="form-box">
                    <strong>Feedback Textarea</strong><br>
                    <input type="text2" name="feedback" placeholder="Enter Feedback Textarea" required="required">
                </div>

                <input type="submit" value="Submit">

        </form>
        <?php include "Footer.php"?>
    </body>
