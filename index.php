<?php session_start(); ?> 
<!DOCTYPE html>
<html>
<head>
<title>Real Estate Website</title>

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600;700&display=swap" rel="stylesheet">

<!-- External CSS -->
<link rel="stylesheet" href="style.css">

</head>

<body>

<header>
<h1>Real Estate Portal</h1>

<nav>
<a href="index.php">Home</a>
<a href="properties.php">Book</a>
<a href="contact.php">Contact</a>

<?php if(isset($_SESSION['user'])): ?>
<a href="logout.php">Logout</a>
<?php else: ?>
<a href="login.php">Login</a>
<a href="register.php">Register</a>
<?php endif; ?>
</nav>
</header>

<section class="banner">
<h2>Find Your Dream Property</h2>
<p>Buy or Book Houses Easily</p>
<a href="properties.php"><button>Explore Properties</button></a>
</section>

<footer>
<p>Developed Real Estate Website</p>
</footer>

</body>
</html>


