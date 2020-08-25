<?php
include "../class/login.php";
$pengguna = new Login;

$pengguna->logout();
$pengguna->redirect('index.php');
?>