<!DOCTYPE html>
<html>
    <head>
        <title>Add Trivia Topic Page</title>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Archivo+Narrow:wght@600&family=Padauk:wght@700&family=Signika&display=swap');

            .form-container {
                margin: 200px auto;
                background-color: grey;
                border-radius:15px;
                width: 700px;
                padding: 15px;
                border: black;
                display: flex;
                flex-wrap: wrap;
                box-shadow: 0 10px 15px rgba(0,0,0,.1);
            }

            .form-title {
                margin-top:20px;
                margin-left:195px;
                color:yellow;
                text-align: center;
                font-size: 40px;
                font-family: 'Archivo Narrow', sans-serif;
            }

            .form-box1 {
                margin-top:10px;
                margin-left:220px;
                width: 300px;
                font-family: 'Padauk', sans-serif;
                font-size: 18px;
            }

            input[type=text] {
                background-color: #ededed;
                border-color: #d4d4d4;
                color: black;
                width: 292px;
                height: 40px;
                border: 2px solid #ccc;
                border-radius: 8px;
                font-family: 'Signika', sans-serif;
                font-size: 18px;
            }

            input[type=submit] {
                background-color: black;
                color: yellow;
                margin: 20px 10px 20px 280px;
                border: none;
                border-radius: 10px;
                padding: 16px 50px;
                cursor: pointer;
                font-size: 20px;
                font-family: 'Signika', sans-serif;
            }

            input[type=submit]:hover{
                background-color: #545454;
            }
        </style>
    </head>
    <body>
        <form action="insert-data-admin-add-trivia-topic.php" method="post" enctype="multipart/form-data" onsubmit="return validate_form()">
        <div class="form-container">
                <div class="form-title">
                    <strong>Add New Trivia Topic</strong>
                </div>

                <div class="form-box1">
                    <input type="text" name="add_trivia_topic" placeholder="Trivia Topic" required="required">
                </div>

                <input type="submit" value="Add">
            </div>
        </form>

    </body>
</html>