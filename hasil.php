<?php include "class/hasil.php"; ?>
<!DOCTYPE html>
<html>
<head>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/ico">
        <link rel="stylesheet" href="css/gaya.css">
        <title>Tes Psikopat</title>
    </head>
    <body>
        <header>
            <h1><span>Tes Psikopat</span></h1>
            <p>Apakah Anda seorang psikopat? Berapa persen psikopat Anda?</p>
        </header>
        <div>
		
        <?php
            session_start();
            error_reporting( error_reporting() & ~E_NOTICE );
            $kode      = $_POST['kode']+1;
            $nama_lengkap  = $_SESSION['nama_lengkap'];
            $jawaban[1]  = $_POST['pertanyaan-1'];
            $jawaban[2]  = $_POST['pertanyaan-2'];
            $jawaban[3]  = $_POST['pertanyaan-3'];
            $jawaban[4]  = $_POST['pertanyaan-4'];
            $jawaban[5]  = $_POST['pertanyaan-5'];
            $jawaban[6]  = $_POST['pertanyaan-6'];
            $jawaban[7]  = $_POST['pertanyaan-7'];
            $jawaban[8]  = $_POST['pertanyaan-8'];
            $jawaban[9]  = $_POST['pertanyaan-9'];
            $jawaban[10] = $_POST['pertanyaan-10'];
            $jawaban[11] = $_POST['pertanyaan-11'];
            $jawaban[12] = $_POST['pertanyaan-12'];
            $jawaban[13] = $_POST['pertanyaan-13'];
            $jawaban[14] = $_POST['pertanyaan-14'];
            $jawaban[15] = $_POST['pertanyaan-15'];
            $jawaban[16] = $_POST['pertanyaan-16'];
            $jawaban[17] = $_POST['pertanyaan-17'];
            $jawaban[18] = $_POST['pertanyaan-18'];
            $jawaban[19] = $_POST['pertanyaan-19'];
            $jawaban[20] = $_POST['pertanyaan-20'];
            $jawaban[21] = $_POST['pertanyaan-21'];
            $jawaban[22] = $_POST['pertanyaan-22'];
            $jawaban[23] = $_POST['pertanyaan-23'];
            $jawaban[24] = $_POST['pertanyaan-24'];
            $jawaban[25] = $_POST['pertanyaan-25'];
            $jawaban[26] = $_POST['pertanyaan-26'];
            $jawaban[27] = $_POST['pertanyaan-27'];
            $jawaban[28] = $_POST['pertanyaan-28'];
            $jawaban[29] = $_POST['pertanyaan-29'];
            $jawaban[30] = $_POST['pertanyaan-30'];

            $Nilai_Benar = 0;

        	for($n=1;$n<=30;$n++){
            $_SESSION['jumlah_nilai']=$_SESSION['jumlah_nilai']+$jawaban[$n];     
        	}

$jumlah_nilai = $_SESSION['jumlah_nilai'];
            //echo $kode;
            if($kode==31){
                  if(empty($_SESSION['nama_lengkap'])){

                  } else {
            echo "<h2>Hai, ".$_SESSION['nama_lengkap']."</h2>";
      }
            echo "<div id='results'><h3>Skor Anda $jumlah_nilai</h3></div>";

$oke = new Hasil();

echo "<h3>Tingkat Kepsikopatan Anda : <strong>".$oke->psikopat($jumlah_nilai)."</strong><h3>";
echo '<br>';
echo $oke->persentase($jumlah_nilai);
session_destroy();
            } elseif ($kode==0) {
            header("Location: index.php");
            }
            else {
header("Location: pertanyaan.php?soal=".$kode."");

            }
        ?>
        </div>
        <footer>
            <div class="clearfix">
                <p>Dibuat oleh : <a href="http://www.saungawi.com/" rel="author" target="_blank">Anis, Fahmi, Givany, Salman, Silvia, Reja dan Qurais</a>.</p>
                <small>Dibuat dengan <span class="love">&#x2764</span> di Indonesia</small>
            </div>
        </footer>       
</body>
</html>