<?php
session_start();
require 'db.php';

if(isset($_POST['register'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $conn->query("INSERT INTO users(name,email,password) VALUES('$name','$email','$pass')");
    echo "<script>alert('Registered Successfully');window.location='login.php';</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<style>
body{
    margin:0;
    font-family:Arial;
    background:#0f172a;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
}
.container{
    width:350px;
    background:white;
    border-radius:10px;
    padding:30px;
    box-shadow:0 0 20px rgba(0,0,0,0.2);
}
.container h2{
    text-align:center;
    margin-bottom:20px;
}
.input-box{
    margin-bottom:15px;
}
.input-box label{
    font-size:14px;
}
.input-box input{
    width:100%;
    padding:10px;
    border-radius:5px;
    border:1px solid gray;
    outline:none;
}
button{
    width:100%;
    padding:10px;
    border:none;
    background:#16a34a;
    color:white;
    font-size:16px;
    border-radius:5px;
    cursor:pointer;
}
button:hover{
    background:#15803d;
}
p{
    text-align:center;
    margin-top:10px;
}
a{
    text-decoration:none;
    color:#2563eb;
}
</style>
</head>

<body>
<div class="container">
<h2>Create Account</h2>

<form method="post">
<div class="input-box">
<label>Full Name</label>
<input type="text" name="name" required>
</div>

<div class="input-box">
<label>Email</label>
<input type="email" name="email" required>
</div>

<div class="input-box">
<label>Password</label>
<input type="password" name="password" required>
</div>

<button name="register">Register</button>
</form>

<p>Already have an account? <a href="login.php">Login</a></p>
</div>
</body>
</html>

