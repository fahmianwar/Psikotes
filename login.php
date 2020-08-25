<?php
require_once 'class/login.php';
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
            $pengguna->redirect('pertanyaan.php');
        }
		
	} else {
		$error = "Gagal untuk melakukan Login !";
	}	
}
?>

<html>
<head>
<title>Login</title>
</head>
<body>
        <form method="post" action="">
            <h2>Sign in.</h2><hr />
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
            	<input type="password" name="kata_sandi" placeholder="Your Password" required />
            	<button type="submit" name="login">Masuk</button>

            <label>Tidak punya akun? Daftar sekarang ! <a href="daftar.php">Sign Up</a></label>
        </form>


</body>
</html>