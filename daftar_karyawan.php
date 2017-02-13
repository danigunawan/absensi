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

<div class="w3-container">

<! penutup container>
<div action="form.asp" class="w3-card-4">
  <div class="w3-container w3-deep-orange">
  <h2>Daftar Karyawan</h2>
  </div>
  <form class="w3-form" role="form" action="proses_daftar.php" method="POST">
  <div class="w3-input-group">      
    <label class="w3-label w3-text-brown"><b>NIK:</b></label>
    <input autofocus="" class="w3-input w3-border w3-sand" name="nik" type="text" required="">
  </div>
  <div class="w3-input-group">      
    <label class="w3-label w3-text-brown"><b>Nama:</b></label>
    <input class="w3-input w3-border w3-sand" name="nama" type="text" required="">
  </div>
  <p>PASSWORD MIN 6 MAX 15 YAAAA !!</p>
   <div class="w3-input-group">      
    <label class="w3-label w3-text-brown"><b>Password:</b></label>
    <input class="w3-input w3-border w3-sand" minlength="6" maxlength="15" name="password" type="password" required="">
  </div>
  <div class="w3-input-group">      
    <label class="w3-label w3-text-brown"><b>Jabatan:</b></label>
     <select name="jabatan" id="jabatan" class="w3-input w3-border w3-sand" required="">
    <option value="pilih"> --PILIH JABATAN--</option>
              
                <?php
                #ambil barang untuk combobox
               $mysqli = new mysqli("localhost", "absensin_admin", "absensinet", "absensin_demo");
$result = $mysqli->query("SELECT jabatan FROM jabatan");

                while ($row = $result->fetch_array()) {
      echo "<option value='$row[jabatan]'>$row[jabatan]</option>";
                }
       ?>
      </select>
  </div>
   <div class="w3-input-group">      
    <label class="w3-label w3-text-brown"><b>Alamat:</b></label>
    <input class="w3-input w3-border w3-sand" name="alamat" type="text" required="">
  </div>
  <div class="w3-input-group">      
    <label class="w3-label w3-text-brown"><b>No Handpone:</b></label>
    <input class="w3-input w3-border w3-sand" name="no_hp" type="number" required="">
  </div>
  <br>
  <p>Pertanyaan dan jawaban dibawah ini digunakan untuk memudahkan anda jika anda lupa password. Wajib diisi ! </p>
  <br>
  <div class="w3-input-group">      
    <label class="w3-label w3-text-brown"><b>Pertanyaan:</b></label>
    <input class="w3-input w3-border w3-sand" name="pertanyaan" type="text" required="">
  </div>
  <div class="w3-input-group">      
    <label class="w3-label w3-text-brown"><b>Jawaban:</b></label>
    <input class="w3-input w3-border w3-sand" name="jawaban" type="text" required="">
  </div>
  
  <button type="submit" class="w3-btn w3-brown">Daftar Baru</button>
  </form>
</div>
 </div>
<br>
<?php
include('footer.php');
?>

</div>
      


</body>
</html> 