<?php
$mysqli_user = "root";
$mysqli_password = "password";
$conn = mysqli_connect("localhost", $mysqli_user, $mysqli_password) or die("Нет соединения с MySQL");

$database = "sample";

mysqli_select_db($conn, $database)
or die("Нельзя открыть $database");