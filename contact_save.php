<?php
require 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "INSERT INTO contact_queries(name,email,message) VALUES('$name','$email','$message')";

if($conn->query($query)){
    echo "<script>alert('Message Sent Successfully'); window.location='contact.php';</script>";
}else{
    echo "Error: " . $conn->error;
}
?>
