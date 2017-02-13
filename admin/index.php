<!DOCTYPE html>
<html>
<head>
<title>Absensi Online</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
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

<center><h2> Data Karyawan </h2></center>
<?php



  
 
 	

 
include 'db.php';
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
}
 
$hasil = $db->query("SELECT * FROM daftar_karyawan  order by id desc");
echo "<table class='w3-table w3-bordered w3-striped w3-border'>
<thead>

<th>NIK</th>
<th>NAMA</th>
<th>JABATAN</th>
<th>ALAMAT</th>
<th>No Hp / Telpon</th>


</thead>

";
while ($data = $hasil->fetch_assoc()) {
 
echo  "<tr><td>". $data['nik'] . "</td><td>". $data['nama'] . "</td><td>". $data['jabatan'] . "</td><td>" . $data['alamat'] . "</td><td>" . $data['no_hp'] . "</td></tr>"  
    ;
 
}
echo "</table>";

?>

</div>

<br>


<?php
include('footer.php');
?>

</div>
      

</body>
</html> 