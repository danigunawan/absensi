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
$cek = $db->query("SELECT * FROM jabatan WHERE id = '$id'");


 $data = mysqli_fetch_array($cek);
$jumlah = mysqli_num_rows($cek) ;


?>
<br>

<div class="w3-card-4">
  <div class="w3-container w3-deep-orange">
  <center><h2>Edit Jabatan</h2></center>
  </div>
  <form class="w3-form" role="form" action="updatejabatan.php" method="POST">
  <div class="w3-input-group">      
    <label class="w3-label w3-text-brown"><b>Jabatan:</b></label>
    <input autofocus="" id="jabatan" class="w3-input w3-border w3-sand" name="jabatan" type="text" required="" value="<?php echo $data['nama'];?>">
    <input type="hidden" name="nama_lama" value="<?php echo $data['nama']; ?>">
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