<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Krub%3A700"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C700"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lilita+One%3A400"/>
    <link rel="stylesheet" href="tmbhmentor.css"/>
    <title>Document</title>

<style>
.li .dropdown {
  float: left;
  overflow: auto;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.menu a:hover, .dropdown:hover .dropbtn {
  background-color: blue;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: black;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body>
<div class="navigasi">
  <div class="logo">
    <h2>InternLink</h2>
  </div>
  <div class="menu">
    <ul>
      <li> <a href="beranda.php">Beranda</a></li>
      <li class="dropdown">
        <button class="dropbtn">Rekapitulasi 
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="mhs.php"><img src="./assets/student.png" style="width: 40px;">Mahasiswa</a>
          <a href="mentor.php"><img src="./assets/mentor.png" style="width: 40px;">Mentor</a>
        </div>
      </li>
      <li> <a href="tentang.php">Tentang</a></li>
      <li> <a href="index.php" onclick="return confirm('Yakin Ingin Logout?')">Logout</a><li>
    </ul>
  </div>
</div>
<div class="judul">
    <p style="text-align: center; color: black;">TAMBAH DATA</p>
    <p style="text-align: center; color: black;">SERTIF MAGANG</p>
</div>
<div class="input">
    <form action="" method="POST" class="form-item">
        <div class="form-group">
            <label for="nip"> NO SERTIF </label>
            <span style="margin-left: 7.25%"> : </span>
            <input type="text" name="no_sertif" placeholder="Masukkan NOMOR SERTIF" style= "width: 74.5%;"></input>
        </div>
        <div class="form-group">
            <label for="nama_mentor"> TANGGAL SERTIF </label>
            <span style="margin-left: 3.5%"> : </span>
            <input type="text" name="tgl_ttd" placeholder="Masukkan TANGGAL SERTIF" style="width: 74.5%;"></input>
        </div>
        <div class="form-group">
            <label for="id_mhs"> NAMA MAHASISWA </label>
            <span style="margin-left: 2%"> : </span>
            <select name="id_mhs" required>
                <option>Pilih Mahasiswa</option>
                <?php
                include "koneksi.php";
                $query = mysqli_query($conn,"SELECT * FROM tb_mahasiswa") or die (mysqli_error($conn));
                while($data = mysqli_fetch_array($query)){
                    echo "<option value=$data[id_mhs]> $data[nim] - $data[nama_mhs] - $data[prodi]</option>";
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <input type="submit" href="sertif.php" name="simpan" value="SIMPAN" onclick="return confirm('Yakin Ingin Menambahkan Data?')" style="margin-left:13%;"></input>
        </div>
        <div class="form-group">
            <input type="submit" href="sertif.php" name="batal" value="BATAL" onclick="return confirm('Yakin Ingin Membatalkan Penambahan Data?')" style="margin-left:13%;"></input>
        </div>
    </form>
</div>
<footer class="footer">
  <div class="footer-left">
    <p class="footer-visimisi">
      <span>Sekilas Visi Misi</span>
      “Tersedianya infrastruktur jalan provinsi aman, nyaman dan lancar dalam mendukung tercapainya kesejahteraan masyarakat Jawa Timur”
    </p>
  </div>
  <div class="footer-center">
    <div>
      <h3>Alamat Kontak</h3>
    </div>
    <div>
      <img src="./assets/home-1.png">
      <p>Jl. Gayungsari No. 167 - Surabaya</p>
    </div>
    <div>
      <img src="./assets/phone-1.png">
      <p>031-8290186, 8280433</p>
    </div>
    <div>
      <img src="./assets/telephone-1.png">
      <p>031-8380932</p>
    </div>
    <div>
      <img src="./assets/calendar-1.png">
      <p>Jam kerja : <br> 
      Senin - Kamis : 08.00 - 16.00 <br> 
      Jumat : 07.30 - 16.00 <br> 
      Sabtu - Minggu : Libur </p>
    </div>
  </div>
  <div class="footer-right">
    <div class="footer-media">
      <div>
        <img src="./assets/world-wide-web-1.png">
        <p><a href="https://binamarga.jatimprov.go.id" style="text-decoration: none;">binamarga.jatimprov.go.id</a></p>
      </div>
      <div>
        <img src="./assets/instagram-1.png">
        <p><a href="https://www.instagram.com/binamargajatim" style="text-decoration: none;">@binamargajatim</a></p>
      </div>
      <div>
        <img src="./assets/facebook-1.png">
        <p><a href="https://www.facebook.com/binamargajatimprov" style="text-decoration: none;">@binamargajatimprov</a></p>
      </div>
      <div>
        <img src="./assets/twitter-1.png">
        <p><a href="https://www.twitter.com/dbmjatim" style="text-decoration: none;">@dbmjatim</a></p>
      </div>
    </div>
  </div>
</footer>
</body>
</html>

<?php
if(isset($_POST['simpan'])){

    $no_sertif = $_POST['no_sertif'];
    $tgl_ttd = $_POST['tgl_ttd'];
    $id_mhs = $_POST['id_mhs'];

    mysqli_query($conn,"INSERT INTO tb_sertif VALUES('','$no_sertif','$tgl_ttd','$id_mhs')
    ") OR die(mysqli_error($conn));

?>
<script type="text/javascript">
alert("Data Berhasil Ditambahkan");
window.location='sertif.php';
</script>

<?php
}  if(isset($_POST['batal'])){
?>

<script type="text/javascript">
alert("Data Gagal Disimpan");
window.location='sertif.php';
</script>

<?php
}
?>