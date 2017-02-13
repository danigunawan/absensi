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

<div id="main" >


<?php
include('header.php');
?>

<?php
require_once 'db.php';
$id = $_GET['id'];
$cek = $db->query("SELECT * FROM jenis_absen WHERE id = '$id'");


 $data = mysqli_fetch_array($cek);
$jumlah = mysqli_num_rows($cek) ;


?>
<br>

<div class="w3-card-4">
  <div class="w3-container w3-deep-orange">
  <center><h2>Edit Jenis Absen</h2></center>
  </div>
  <form class="w3-form" role="form" action="update_waktu_absen.php" method="POST">
  <div class="w3-input-group">      
    <label class="w3-label w3-text-brown"><b>Nama Jenis Absen:</b></label>
    <input autofocus="" id="jabatan" class="w3-input w3-border w3-sand" name="nama" type="text" required="" value="<?php echo $data['nama'];?>">
   <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
  </div>
    <div class="w3-input-group">      
    <label class="w3-label w3-text-brown"><b>Waktu Masuk:</b></label>
    <input autofocus="" id="jam_masuk" class="w3-input w3-border w3-sand" name="jam_masuk" type="text" required="" value="<?php echo $data['jam_masuk'];?>">
   
  </div>
  <div class="w3-input-group">      
    <label class="w3-label w3-text-brown"><b>Waktu Pulang:</b></label>
    <input autofocus="" id="jam_pulang" class="w3-input w3-border w3-sand" name="jam_pulang" type="text" required="" value="<?php echo $data['jam_pulang'];?>">

  </div>

    <button type="submit" class="w3-btn w3-brown">EDIT</button>
  </form>
  
</div>
<br>


<?php
include('footer.php');
?>

</div>
      
</body>
</html> 