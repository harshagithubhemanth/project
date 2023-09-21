<?php
$fname = $_POST["fname"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];
$conn = mysqli_connect("localhost" , "root" , "" , "contact_form") or die("connection failed");
$sql = "INSERT INTO contact_table(fname , email , subject , message) VALUES ('{$fname}' , '{$email}' , '{$subject}' , '{$message}')";
$result = mysqli_query($conn, $sql) or die("Query Failed");
header("location: http://localhost/food_blog/contact.php");
mysqli_close($conn);
?>