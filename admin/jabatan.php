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


<div id="main">


<?php
include('header.php');
?>
<br>
<div class="w3-container">
<button onclick="document.getElementById('jabatan').style.display='block'" class="w3-yellow">TAMBAH JABATAN</button>

<div id="jabatan" class="w3-modal">
  <div class="w3-modal-content">
    <div class="w3-container">
      <span onclick="document.getElementById('jabatan').style.display='none'" class="w3-closebtn">x</span>
     <div class="w3-container">

<! penutup container>

  <div class="w3-container w3-deep-orange">
  <center><h2>Daftar Jabatan</h2></center>
  </div>
  <form class="w3-form" role="form" action="proses_jabatan.php" method="POST">
  <div class="w3-input-group">      
    <label class="w3-label w3-text-brown"><b>Jabatan:</b></label>
    <input autofocus="" class="w3-input w3-border w3-sand" name="jabatan" type="text" required="">
  </div>
    <button type="submit" class="w3-btn w3-brown">TAMBAH</button>
  </form>

 </div>
    </div>
  </div>
</div>
</div>

<br>
<?php
	

 
include 'db.php';
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
}
 
$hasil = $db->query("SELECT * FROM jabatan  order by id desc");

echo "<table class='w3-table w3-bordered w3-striped w3-border'>




<thead>

<th>NAMA JABATAN</th>
<th>TOOLS</th>
<th>EDIT</th>


</thead>

";
while ($data = $hasil->fetch_assoc()) {
 
echo  "<tr><td>". $data['nama'] ."</td><td><a href='hapusjabatan.php?id=".$data['id']. "'>HAPUS </a></td><td><a href='editjabatan.php?id=".$data['id']. "'>EDIT</a></td></tr>";
 
}

echo "</table>";

?>

<br>


<?php
include('footer.php');
?>

</div>
      
</body>
</html> 