<?php
session_start();
require 'db.php';
$res = $conn->query("SELECT * FROM properties");
?>

<!DOCTYPE html>
<html>
<head>
<title>Properties</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body{
  font-family: Arial;
  background:#f4f4f4;
  margin:0;
}

.header{
  background:#111;
  padding:15px;
  color:white;
  display:flex;
  justify-content:space-between;
}

.header a{
  color:white;
  text-decoration:none;
  margin-right:10px;
  font-weight:bold;
}

.container{
  width:90%;
  margin:auto;
}

h2{
  text-align:center;
  margin:20px 0;
}

.properties{
  display:flex;
  flex-wrap:wrap;
  justify-content:center;
  gap:20px;
}

.card{
  background:white;
  width:300px;
  border-radius:10px;
  padding:10px;
  box-shadow:0 4px 10px rgba(0,0,0,.2);
}

.prop-img{
  width:100%;
  height:200px;
  object-fit:cover;
  border-radius:10px;
}

button{
  background:#ff9800;
  border:none;
  padding:8px 12px;
  color:white;
  border-radius:5px;
  cursor:pointer;
}

@media(max-width:700px){
  .card{width:95%;}
}

</style>
</head>

<body>

<div class="header">
  <div style="font-size:20px;font-weight:bold;">DreamHomes</div>
  <div>
     <a href="index.php">Home</a>
  </div>
</div>

<div class="container">

<h2>Available Properties</h2>

<div class="properties">

<?php while($p = $res->fetch_assoc()): ?>
<div class="card">

<img src="images/<?php echo $p['image']; ?>" class="prop-img">

<h3><?php echo $p['title']; ?></h3>
<p><?php echo $p['price']; ?></p>
<p><?php echo $p['description']; ?></p>

<a href="property.php?id=<?php echo $p['id']; ?>">
<button>View / Book</button>
</a>

</div>
<?php endwhile; ?>

</div>
</div>

</body>
</html>
