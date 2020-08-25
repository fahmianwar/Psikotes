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
<?php
include "../class/login.php";
    $pengguna = new Login;
    if(($pengguna->cek_login()!="") ){
            if(($nama_pengguna != 'admin' )|| ($_SESSION['sesi_pengguna']=="")){
            $pengguna->redirect('index.php');
            } 

} else {
                echo "
            | <a href='admin.php?pengguna'><u><strong>Manajemen Pengguna</strong></u></a> |
            <a href='admin.php?pertanyaan'><u><strong>Manajemen Pertanyaan</strong></u></a> |
            <a href='admin.php?logout'><u><strong>Logout</strong></u></a> |
            <br>";
}
        if(isset($_GET['pengguna'])){
            echo "<h3>Admin - Menejemen Pengguna</h3>";
            include "menejemen_pengguna.php";
        }
        if(isset($_GET['pertanyaan'])){
            echo "<h3>Admin - Menejemen Pertanyaan</h3>";
            include "menejemen_pertanyaan.php";
        }
        if(isset($_GET['logout'])){
$pengguna->logout();
$pengguna->redirect('index.php');
            header('Location : index.php');
            echo "<script>
            alert('Anda berhasil keluar!');
            </script>
            ";
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