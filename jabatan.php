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
<?php
	

 
$db = new mysqli("localhost", "absensin_admin", "absensinet", "absensin_demo");
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
}
 
$hasil = $db->query("SELECT jabatan  order by id desc");
echo "<table class='w3-table'>
<thead>

<th>NAMA JABATAN</th>


</thead>

";
while ($data = $hasil->fetch_object()) {
 
echo  "<tr><td>". $data['jabatan'] . "</td></tr>"  
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