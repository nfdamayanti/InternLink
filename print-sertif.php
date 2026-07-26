<?php
 include "koneksi.php";
 $id = $_GET['id_sertif'];
 $ambilData = mysqli_query($conn,  
"SELECT
   *
FROM 
    tb_sertif 
INNER JOIN 
    tb_mahasiswa ON tb_sertif.id_mhs = tb_mahasiswa.id_mhs
WHERE id_sertif='$id'");
$data = mysqli_fetch_array($ambilData);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.cdnfonts.com/css/serandipity-boutique-script" rel="stylesheet">
    <title>Document</title>
    <style type='text/css'>
        body, html {
            margin: 0;
            padding: 0;
        }
        body {
            color: black;
            display: table;
            text-align: center;
        }
        .container {
            border: 15px solid black;
            display: table-cell;
            vertical-align: middle;
            width: 923px;
            height: 600px;
            position: fixed;
        }
        .container-1{
            border: 5px solid black;
            margin: 5px;
            width: 900px;
            height: 580px;
            position: fixed;
        }
        .container-2{
            border: 20px solid rgba(253,219,127,255);
            margin: 10px;
            width: 840px;
            height: 520px;
        }
        .container-2 ul li{
            list-style: none;
            display: inline-block;
        }
        .container-2 ul li a{
            text-decoration: none;
        }
        .back{
            height: 275px;
            width: 150px;
            transform: translate(-130px, -15.6px);
        }
        .kop {
            text-align: right;
            transform: translate(180px, -470px);
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
        }
        .sertifikat{
            font-family: 'Serandipity Boutique Script', sans-serif;
            font-style: italic;
            font-size: 100px;
            transform: translate(-260px, -400px);
        }
        .isi {
            color: black;
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            transform: translate(70px, -430px);
            font-size: 16px;
        }
        .ttd {
            color: black;
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            font-size: 16px;
            transform: translate(180px, -400px);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="container-1">
            <div class="container-2">
                <ul>
                    <li>
                        <div class="back">
                            <img src="./assets/tanpa-logo.png">
                                <div class="logo">
                                    <img style="width: 50%; height:730%; transform: translate(0px, -350px)" src="./assets/logojatim.png">
                                </div>
                        </div>
                    </li>
                    <li>
                        <div class="kop">
                            NOMOR :  <?php echo $data['no_sertif'] ?>
                        </div>
                    </li>
                    <li>
                        <div class="sertifikat">
                            Sertifikat
                        </div>
                    </li>
                    <li>
                        <div class="isi">
                            PEMERINTAH PROVINSI JAWA TIMUR<br>
                            DINAS PEKERJAAN UMUM BINA MARGA<br>
                            DIBERIKAN KEPADA :<br>
                            <?php echo $data['nama_mhs'] ?> / NIM : <?php echo $data ['nim'] ?><br>
                            MAHASISWA <?php echo $data['asal_instansi'] ?><br>
                            PROGRAM STUDI : <?php echo $data ['prodi']?><br>
                            TELAH MELAKSANAKAN MAGANG<br>
                            DI DINAS PU BINA MARGA PROVINSI JAWA TIMUR<br>
                            MULAI TANGGAL <?php echo $data ['mulai'] ?> s/d <?php echo $data ['selesai'] ?><br>
                        </div>
                    </li>
                    <li>
                        <div class="ttd">
                            SURABAYA, <?php echo $data ['tgl_ttd'] ?> <br>
                            a.n. KEPALA DINAS PEKERJAAN UMUM BINA MARGA<br>
                            PROVINSI JAWA TIMUR<br>
                            SEKRETARIS,<br>
                            <br>
                            <br>
                            <br>
                            <br>
                            ARIF ENDRO UTOMO, S.T., M.T.<br>
                            Pembina Tingkat I<br>
                            NIP. 198700511 199203 1 006<br>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>