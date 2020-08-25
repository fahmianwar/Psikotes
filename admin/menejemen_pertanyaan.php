<?php include "../class/admin.php";

	// Mengecek informasi dari POST
	if (empty($_POST) === false) {
        if(isset($_POST["id_pertanyaan"])) {
		    $id_pertanyaan  = $_POST["id_pertanyaan"];
        } else {
            $id_pertanyaan  = null;
        }
		$soal 			= $_POST["soal"];
		$opsi_a 		= $_POST["opsi_a"];
		$opsi_b     	= $_POST["opsi_b"];
		$opsi_c    		= $_POST["opsi_c"];
		$nilai_a 		= $_POST["nilai_a"];
		$nilai_b     	= $_POST["nilai_b"];
		$nilai_c    	= $_POST["nilai_c"];
		$admin 			= new Admin;

	// Mengecek informasi POST yang berisi informasi untuk menambahkan pertanyaan baru
	if ($soal!=null && $opsi_a!=null && $opsi_b!=null && $opsi_c!=null && $nilai_a!=null && $nilai_b!=null && $nilai_c!=null && $id_pertanyaan==null){
		// Perintah untuk menambahkan pengguna ke dalam basis data
		$admin->tambah_pertanyaan($soal, $opsi_a, $opsi_b, $opsi_c, $nilai_a, $nilai_b, $nilai_c);
		}

	// Mengecek informasi POST yang berisi informasi untuk memperbarui data pengguna
	if ($soal!=null && $opsi_a!=null && $opsi_b!=null && $opsi_c!=null && $nilai_a!=null && $nilai_b!=null && $nilai_c!=null && $id_pertanyaan!=null){
		// Perintah untuk mengedit pengguna ke dalam basis data
		$admin->ubah_pertanyaan($id_pertanyaan, $soal, $opsi_a, $opsi_b, $opsi_c, $nilai_a, $nilai_b, $nilai_c);
		} 
	}

	// Halaman Admin untuk menambahkan Pertanyaan
	if(isset($_GET['tambah'])){
	echo "<h2>Admin - Tambah Pertanyaan</h2>";
?>
 <form action="" method="post">
  <fieldset>
    <legend>Tambah Pertanyaan :</legend>
    Soal :<br>
    <input type="text" name="soal">
    <br>
    Pilihan A :<br>
    <input type="text" name="opsi_a">
    <br>
    Pilihan B :<br>
    <input type="text" name="opsi_b">
    <br>
    Pilihan C :<br>
    <input type="text" name="opsi_c">
    <br>
     Nilai A :<br>
    <input type="text" name="nilai_a">
    <br>
    Nilai B :<br>
    <input type="text" name="nilai_b">
    <br>
    Nilai C :<br>
    <input type="text" name="nilai_c">
    <br>
    <br>
    <input type="submit" value="Kirim">
  </fieldset>
</form> 
<?php
}
// Halaman Admin untuk menghapus Pertanyaan
if(isset($_GET['hapus'])){

	// Sudah berhasil bagian ini
	    //hapus
$id = $_GET['hapus'];
$hapus = new Admin;
$hapus->hapus_pertanyaan($id);
header('Location : admin.php?pertanyaan');
}

// Halaman Admin untuk mengedit Pertanyaan
if(isset($_GET['edit'])){
	$id = $_GET['edit'];
    $edit = new Admin;
    $sunting = $edit->edit_pertanyaan($id);
    while($data=$sunting->fetch(PDO::FETCH_OBJ)){
    ?>
    <form action="" method="post">
  <fieldset>
    <legend>Tambah Pengguna :</legend>
    opsi_a Pengguna :<br>
    <input type="text" name="soal" value="<?php echo $data->soal; ?>">
    <br>
    opsi_a Lengkap :<br>
    <input type="text" name="opsi_a" value="<?php echo $data->opsi_a; ?>">
    <br>
    opsi_b :<br>
    <input type="text" name="opsi_b" value="<?php echo $data->opsi_b; ?>">
    <br>
    Kata Sandi :<br>
    <input type="opsi_c" name="opsi_c" value="<?php echo $data->opsi_c; ?>">
    <br>
    Nilai A :<br>
    <input type="text" name="nilai_a" value="<?php echo $data->nilai_a; ?>">
    <br>
    Nilai B :<br>
    <input type="text" name="nilai_b" value="<?php echo $data->nilai_b; ?>">
    <br>
    Nilai C :<br>
    <input type="text" name="nilai_c" value="<?php echo $data->nilai_c; ?>">
    <br>
    <input type="hidden" name="id_pertanyaan" value="<?php echo $data->id_pertanyaan; ?>">
    <br>
    <input type="submit" value="Kirim">
  </fieldset>
</form> 
<?php
};
} else {

$admin = new Admin;
?>
<table border=1>
<th>No.</th>
<th>Soal</th>
<th>Opsi A</th>
<th>Opsi B</th>
<th>Opsi C</th>
<th>Nilai A</th>
<th>Nilai B</th>
<th>Nilai C</th>
<th colspan="2">Aksi</th>
<?php
$select = $admin->muncul_pertanyaan();
	$n=1;
	echo"
	<a href='admin.php?pertanyaan&tambah'> Tambah Pertanyaan</a>
	";
while($data=$select->fetch(PDO::FETCH_OBJ)){

    echo "
<tr>
<td>$n</td>
<td>$data->soal</td>
<td>$data->opsi_a</td>
<td>$data->opsi_b</td>
<td>$data->opsi_c</td>
<td>$data->nilai_a</td>
<td>$data->nilai_b</td>
<td>$data->nilai_c</td>
<td><a href='admin.php?pertanyaan&edit=$data->id_pertanyaan'>Edit</a></td>
<td><a href='admin.php?pertanyaan&hapus=$data->id_pertanyaan'>Hapus</a></td>
</tr>
    ";
    $n++;
};
echo "</table>";
}
		?>
