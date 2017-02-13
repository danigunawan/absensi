<!DOCTYPE html>
<html>
<title>Absensi Online</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
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

<center><h2> Jenis Waktu Absensi </h2></center>
<button onclick="document.getElementById('id01').style.display='block'" class="w3-yellow">Tambah Jenis Absen</button>
<br>
<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-card-4">
    <header class="w3-container w3-deep-orange"> 
      <span onclick="document.getElementById('id01').style.display='none'" 
      class="w3-closebtn">x</span>
      <center><h2>Form Tambah Jenis Absen</h2></center>
    </header>
    <div class="w3-container">
     <form id="myForm" class="w3-form " action="proses_jenis_absen.php" method="POST">
  <h2>Input Form</h2>
  <div class="w3-input-group">      
    <label>Nama Jenis Absen</label>
    <input class="w3-input" id="nama_absen" name="nama_absen" type="text">
  </div>
  <div class="w3-input-group"> 
  <p> contoh penulisan waktu yang benar 08:00 artinya jam 8 pagi</p>     
    <label>Waktu Masuk</label>
    <input class="w3-input" name="waktu_masuk" type="text">
  </div>
  <div class="w3-input-group">      
    <label>Waktu Pulang</label>
    <input class="w3-input" name="waktu_pulang" type="text">
  </div>
  <button id="tambah" type="submit" class="w3-btn">Tambah</button>
  <span id="result"></span>
</form>
    </div>
    <footer class="w3-container w3-deep-orange">
      <p>Modal Footer</p>
    </footer>
  </div>
</div>
<br>


<?php 
include 'db.php';
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
}
 
$hasil = $db->query("SELECT * FROM jenis_absen  order by id desc");
echo "<table class='w3-table w3-bordered w3-striped w3-border'>

<thead>

<th>NAMA</th>
<th>WAKTU MASUK</th>
<th>WAKTU PULANG</th>
<th>HAPUS</th>
<th>EDIT</th>


</thead>


";
while ($data = $hasil->fetch_assoc()) {
 
echo  "<tr><td>". $data['nama'] . "</td><td>". $data['jam_masuk'] ."</td><td>". $data['jam_pulang'] . "</td><td><a href='hapus_waktu_absen.php?id=".$data['id']. "'>HAPUS </a></td><td><a href='edit_waktu_absen.php?id=".$data['id']. "'>EDIT</a></td></tr>";
 
 
}
echo "</table>";

?>
</div>
<br>



<?php
include('footer.php');
?>

</div>
     <script type="text/javascript">

$("#tambah").click(function() {
    $.post($("#myForm").attr("action"), $("#myForm :input").serializeArray(), function(info) { $("#result").html(info); });
    clearInput();
});

$("#myForm").submit(function(){
    return false;
});

function clearInput(){
    $("#myForm :input").each(function(){
        $(this).val('');
    });
};


</script> 
</body>
</html> 