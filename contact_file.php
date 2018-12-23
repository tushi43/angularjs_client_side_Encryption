<?php

require_once 'connect.php';

$data = json_decode(file_get_contents("php://input"));

$email = mysqli_real_escape_string($conn, $data->email);

$subject = mysqli_real_escape_string($conn, $data->subject);

$message = mysqli_real_escape_string($conn, $data->message);

$query = "INSERT into cl VALUES ('','$email','$subject','$message')";

mysqli_query($conn, $query);

echo true;

?>