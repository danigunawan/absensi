<?php
session_start();
?>
<!DOCTYPE html>
<html>
<title>Absensi Online</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<body>

<?php
include('navbar.php');
?>

 	
</nav>

<div id="main" style="margin-left:25%">

<?php
include('header.php');
?>
<br>

<div class="w3-container">

<! penutup container>
<div action="" class="w3-card-4">
  <div class="w3-container w3-deep-orange">
  <center><h2>Lihat Password</h2></center>
  </div>
  <form class="w3-form">
  <div class="w3-input-group">      
    <label class="w3-label w3-text-brown"><b>Password Anda Adalah:</b></label>
    <input autofocus="" class="w3-input w3-border w3-sand" name="nik" type="text" required="" value="<?php echo$_SESSION['password'];?>">
  </div>
  
  <button type="submit" class="w3-btn w3-brown">Kembali Ke Presensi</button>
  </form>
</div>
 </div>
<br>
<?php
include('footer.php');
?>

</div>

</body>
</html> 