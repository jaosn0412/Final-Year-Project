<!DOCTYPE html>
<html>

<head>
  <title>Admin Moding</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      font-family: "Lato", sans-serif;
    }

    .mod_title {
      font-size: 40px;
      font-family: Impact;
      color: black;
      width: 420px;
      text-align: center;
      border-bottom: 3px solid;
      margin: 30px 300px;
    }


    table,
    th,
    td {
      border: none;
      border-collapse: collapse;
      padding: 10px;
      height: 40px;
    }

    h3 {
      color: white;

    }

    .button {
      background-color: #4CAF50;
      /* Green */
      border: none;
      color: white;
      padding: 8px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 14px;
      margin-left: 15%;
      cursor: pointer;
    }

    .abutton {
      padding: 6px 6px 18px 32px;
      text-decoration: none;
      font-size: 18px;
      color: #818181;
      display: block;
    }

    .profile-pic {
      border-image-width: 10px;
      width: 170px;
      height: 190px;
    }

    .profile-table {
      padding-bottom: 25px;
    }

    .sidenav a:hover {
      color: #f1f1f1;
    }

    .main {
      margin-left: 300px;
      /* Same as the width of the sidenav */
    }

    .func-butt-edit {
      cursor: pointer;
      height: auto;
      width: 70px;
      font-family: 'Signika', sans-serif;
      font-size: 20px;
      background-color: #D1D100;
      border-radius: 25px;
      border: none;
      text-align:center;

    }

    .func-butt-edit:hover {
      background-color: #C3BD62;
    }
  </style>
</head>

<body>
  <?php
  include 'conn.php';
  include 'admin_header.php';

  $result = mysqli_query($con, "Select * FROM admin"); ?>

  <div class="main">
    <p class="mod_title">Admin Personal Details</p>

    <table class="profile-table">
      <?php while ($row = mysqli_fetch_array($result)) { ?>
        <tr>
          <td rowspan="3">&emsp;&emsp;<img src="images/admin_pic<?php echo $row['admin_id'] ?>.jpg" class="profile-pic"></td>

          <td>Admin ID</td>
          <td>&emsp;:&emsp;&emsp;</td>
          <td><?php echo $row['admin_id']; ?></td>
          <td>&emsp;&emsp;</td>
        </tr>
        <tr>

          <td>Username</td>
          <td>&emsp;:&emsp;</td>
          <td><?php echo $row['admin_username']; ?></td>
          <td>&emsp;</td>
        </tr>
        <tr>

          <td>Password</td>
          <td>&emsp;:&emsp;</td>
          <td><?php echo $row['admin_password']; ?></td>
          <td>&emsp;</td>

        </tr>
        <tr>
          <td class="func-butt-edit" onclick="window.location.href='admin-mod-admin-page.php?id=<?php echo $row['admin_id']; ?>'">Update</td>
        </tr>
      <?php } ?>
    </table>

  </div>

</body>

</html>