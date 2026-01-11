
<?php
session_start();
require 'db.php';

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $res = $conn->query("SELECT * FROM users WHERE email='$email' AND password='$pass'");
    
    if($res->num_rows > 0){
        $_SESSION['user'] = $res->fetch_assoc()['id'];
        header("location:index.php");
    } else {
        $error = "Invalid Email or Password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
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
    background:#2563eb;
    color:white;
    font-size:16px;
    border-radius:5px;
    cursor:pointer;
}
button:hover{
    background:#1d4ed8;
}
p{
    text-align:center;
    margin-top:10px;
}
a{
    text-decoration:none;
    color:#2563eb;
}
.error{
    color:red;
    text-align:center;
}
</style>
</head>

<body>
<div class="container">
<h2>Login</h2>

<?php if(isset($error)) echo "<p class='error'>$error</p>"; ?>

<form method="post">
<div class="input-box">
<label>Email</label>
<input type="email" name="email" required>
</div>

<div class="input-box">
<label>Password</label>
<input type="password" name="password" required>
</div>

<button name="login">Login</button>
</form>

<p>Don't have an account? <a href="register.php">Register</a></p>
</div>
</body>
</html>

