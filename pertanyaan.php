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

if(isset($_POST['masuk'])){
    $_SESSION['nama_lengkap']  = $_POST['nama_lengkap'];
    $nama = $_SESSION['nama_lengkap'];
    }
if(isset($_GET['soal'])){
echo '
		<form action="hasil.php" method="post">';

}
error_reporting( error_reporting() & ~E_NOTICE );
switch($_GET['soal'])
{
    case 1:
    $kode=1;
        include "soal.php";
        break;
    case 2:
        include "soal.php";
        break;
    case 3:
        include "soal.php";
        break;
    case 4:
        include "soal.php";
        break;
    case 5:
        include "soal.php";
        break;
    case 6:
        include "soal.php";
        break;
    case 7:
        include "soal.php";
        break;
    case 8:
        include "soal.php";
        break;
    case 9:
        include "soal.php";
        break;
    case 10:
        include "soal.php";
        break;
    case 11:
        include "soal.php";
        break;
    case 12:
        include "soal.php";
        break;
    case 13:
        include "soal.php";
        break;
    case 14:
        include "soal.php";
        break;
    case 15:
        include "soal.php";
        break;
    case 16:
        include "soal.php";
        break;
    case 17:
        include "soal.php";
        break;
    case 18:
        include "soal.php";
        break;
    case 19:
        include "soal.php";
        break;
    case 20:
        include "soal.php";
        break;
    case 21:
        include "soal.php";
        break;
    case 22:
        include "soal.php";
        break;
    case 23:
        include "soal.php";
        break;
    case 24:
        include "soal.php";
        break;
    case 25:
        include "soal.php";
        break;
    case 26:
        include "soal.php";
        break;
    case 27:
        include "soal.php";
        break;
    case 28:
        include "soal.php";
        break;
    case 29:
        include "soal.php";
        break;
    case 30:
        include "soal.php";
        break;
    default:
    echo "Halo, ".$nama;
    echo '

        <a href="pertanyaan.php?soal=1"><strong>Klik menuju pertanyaan</strong></a>
        ';
        break;
}
if(isset($_GET['soal'])){
?>
<input type="hidden" name="nama_lengkap" value="<?php echo $_SESSION['nama_lengkap']; ?>"> 
 <input type="hidden" name="kode" value="<?php echo $kode; ?>"> 
            <input type="submit" value="Kirim" />
		</form>
<?php
} else{

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