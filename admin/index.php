<?php
require_once '../class/login.php';
$pengguna = new Login;

if($pengguna->cek_login()!="")
{
        if($_SESSION['sesi_pengguna'] = "1"){
            $pengguna->redirect('admin.php');
        } else {
            $pengguna->redirect('pertanyaan.php');
        }
}

if(isset($_POST['login']))
{
	$nama_pengguna = $_POST['nama_pengguna'];
	$kata_sandi = $_POST['kata_sandi'];
		
	if($pengguna->login($nama_pengguna,$kata_sandi)) {
        if($nama_pengguna == "admin"){
            $pengguna->redirect('admin.php');
        } else {
            $pengguna->redirect('../index.php');
        }
		
	} else {
		$error = "Gagal untuk melakukan Login !";
	}	
}
?>

<!DOCTYPE html>
<html>
<head>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/ico">
        <link rel="stylesheet" href="../css/gaya.css">
        <title>Menejemen Admin - Tes Psikopat</title>
    </head>
    <body>
        <header>
            <h1><span>Tes Psikopat</span></h1>
            <p>Apakah Anda seorang psikopat? Berapa persen psikopat Anda?</p>
        </header>
        <div>
        <form method="post" action="">
            <h2>Login Akses Menejemen Admin Tes Psikopat</h2><br />
            <?php
			if(isset($error))
			{
					 ?>
                     <div class="alert alert-danger">
                        <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?> !
                     </div>
                     <?php
			}
			?>
            	<input type="text" name="nama_pengguna" placeholder="Nama Pengguna" required />
            	<input type="password" name="kata_sandi" placeholder="Kata Sandi" required />
            	<button type="submit" name="login">Masuk</button>

            <label>Tidak punya akun? Daftar sekarang ! <a href="daftar.php">Sign Up</a></label>
        </form>
        </div>
        <footer>
            <div class="clearfix">
                <p>Dibuat oleh : <a href="http://www.saungawi.com/" rel="author" target="_blank">Anis, Fahmi, Givany, Salman, Silvia, Reja dan Qurais</a>.</p>
                <small>Dibuat dengan <span class="love">&#x2764</span> di Indonesia</small>
            </div>
        </footer>       
</body>
</html>