<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Contact Us</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<header>
<h1>Real Estate Portal</h1>
<nav>
<a href="index.php">Home</a>
<a href="properties.php">Book</a>
<a href="contact.php" class="active">Contact</a>

<?php if(isset($_SESSION['user'])): ?>
<a href="logout.php">Logout</a>
<?php else: ?>
<a href="login.php">Login</a>
<a href="register.php">Register</a>
<?php endif; ?>
</nav>
</header>

<section class="contact-section">
<div class="contact-box">
<h2>Contact Us</h2>
<p>We would love to hear from you! Fill the form below.</p>

<form action="contact_save.php" method="post">
<input type="text" name="name" placeholder="Enter Your Name" required>
<input type="email" name="email" placeholder="Enter Your Email" required>
<textarea name="message" placeholder="Enter Your Message" required></textarea>
<button type="submit">Send Message</button>
</form>
</div>
</section>
<br><br>
<footer>
<p>Real Estate Website | All Rights Reserved</p>
</footer>

</body>
</html>
