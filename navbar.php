<!DOCTYPE html>
<html>
<title>Absen</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<body>
<nav class="w3-sidenav w3-white w3-card-2 w3-animate-left" style="display:none">
  <header class="w3-container">
  <h5>Menu</h5>
  </header>
    <a href="javascript:void(0)" onclick="w3_close()" 
  class="w3-closenav w3-large">Close &times;</a>
  <a href="index.php">Presensi Masuk</a>		
  <a href="presensi_pulang.php">Presensi Pulang</a>		
  <a href="presensi_istirahat.php">Istirahat</a>		
  <a href="presensi_izin.php">Izin</a>		
  <a href="presensi_sakit.php">Sakit</a>
  <a href="lupa_pw.php">Lupa Password</a>
  <a href="loginadmin.php">Halaman Admin</a>		
</nav>
<script>
function w3_open() {
    document.getElementsByClassName("w3-sidenav")[0].style.display = "block";
}
function w3_close() {
    document.getElementsByClassName("w3-sidenav")[0].style.display = "none";
}
</script>
</body>
</html> 