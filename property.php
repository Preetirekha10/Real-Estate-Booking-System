
<?php
session_start();
require 'db.php';
$id=$_GET['id'];
$p=$conn->query("SELECT * FROM properties WHERE id=$id")->fetch_assoc();

if(isset($_POST['book'])){
 if(!isset($_SESSION['user'])) die("Login First");
 $uid=$_SESSION['user'];
 $conn->query("INSERT INTO bookings(user_id,property_id) VALUES($uid,$id)");
 echo "<script>alert('Booked Successfully');</script>";
}
?>
<h2><b><?php echo $p['title']; ?></b></h2>
<img src="images/<?php echo $p['image']; ?>" width="700" height="400">
<p><b><?php echo $p['description']; ?></b></p>
<p><b>Price: <?php echo $p['price']; ?></b></p>

<?php if(isset($_SESSION['user'])): ?>
<form method="post"><button name="book">Book Now</button></form>
<?php else: ?>
<a href="login.php">Login to Book</a>
<?php endif; ?>
