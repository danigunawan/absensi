<!DOCTYPE html>
<html>
<title>Absensi Online</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
<nav class="w3-sidenav w3-white w3-card-2"  style="display:none">
  <header class="w3-container">
  <h5>Menu</h5>
  </header>
  <a href="javascript:void(0)" onclick="w3_close()" 
  class="w3-closenav w3-large">Close &times;</a>
  <a href="daftar_karyawan.php">Daftar Karyawan</a>
  <a href="lupa_pw.php">Lupa Password</a>
  <a href="data_karyawan.php">Data Karyawan</a>	
  <a href="jabatan.php">Data jabatan</a>
  <a href="waktu_absen.php">Pengaturan Waktu Absen</a>
  <a href="rekap_absensi.php">Rekapitulasi Absensi</a>
  <a href="rekap_izin.php">Rekapitulasi Izin</a>
  <a href="rekap_sakit.php">Rekapitulasi Sakit</a>
  <a href="http://andaglos.com/absen/index.php">KEMBALI KE MENU AWAL</a>			
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