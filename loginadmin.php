<!DOCTYPE html>
<html>
<head>
<title>Absensi Online</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<body>

<?php
include('navbar.php');
?>
 	
</nav>

<div id="main" >


<?php
include('header.php');
?>

<br>
<div class="w3-container">
<form class="w3-form w3-card-4" action="ceklogin.php" method="POST" >
  <center><h2>LOGIN ADMIN</h2></center>
  <div class="w3-input-group">      
    <label>User :</label>
    <input name="username" class="w3-input" type="text">
  </div>
  <div class="w3-input-group">      
    <label>Password :</label>
    <input name="password" class="w3-input" type="password">
  </div>
 <button type="submit" class="w3-btn w3-deep-orange">MASUK</button>
</form>
		
</div>
<br>


<?php
include('footer.php');
?>

</div>
      

</body>
</html> 