<?php
include_once 'contactform.php';
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

  $sql = "INSERT INTO contact_form (user_name, user_phone, user_email, user_message) VALUES ('$name', '$phone', '$email', '$message');";

mysqli_query($conn, $sql);

header("Location: ../contact.php?input=success");
