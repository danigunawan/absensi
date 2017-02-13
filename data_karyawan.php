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


<h2> Data Karyawan </h2>
<?php



  
 
 	

 
$db = new mysqli("localhost", "absensin_admin", "absensinet", "absensin_demo");
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

<br>



<?php
include('footer.php');
?>

</div>
      
</body>
</html> 