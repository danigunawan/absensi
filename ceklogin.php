<?php
include 'db.php';
// mengambil data username dan password dari index.php
// bila form method nya GET maka ganti POST menjadi GET
$username=$_POST['username'];
$password=$_POST['password'];
 
// untuk keamanan
$username = stripslashes($username);
$password = stripslashes($password);

$sql = $db->query("SELECT * FROM loginadmin WHERE username='$username' and password='$password'");

$count= mysqli_num_rows($sql);
 
if($count==1){
echo "<script>window.location = 'admin/index.php';</script>";
}
else {
echo "Username atau Password yang anda masukkan salah";

}
?>