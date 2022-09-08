<?php
$con = mysqli_connect("localhost", "root", "", "sp-assignment");

// use to check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
