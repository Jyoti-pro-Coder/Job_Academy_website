<?php

$st_name =  $_POST["name"];
$st_email = $_POST["email"];
$st_course = $_POST["select"];
$st_phone = $_POST["phone"];
$st_message = $_POST["message"];

$conn = mysqli_connect("localhost","root","","jobacademy") or die ("not connect");
$query = "INSERT INTO student(student_name,student_email,student_course,student_phone,student_message) VALUES('{$st_name}','{$st_email}','{$st_course}','{$st_phone}','{$st_message}')";

$sql = mysqli_query($conn,$query) or die("failed query");

// header("Location:https://localhost/job/contact.php");

mysqli_close($conn);

?>