<?php
include = "inludes/system.php";
$pengguna = new Pengguna;
if(isset($_POST['login'])) {
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