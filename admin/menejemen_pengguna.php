<?php include "../class/admin.php";

// Mengecek informasi dari POST
    if (empty($_POST) === false) {
        if(isset($_POST["id_pengguna"])) {
            $id_pengguna  = $_POST["id_pengguna"];
        } else {
            $id_pengguna = null;
        }
        $nama_pengguna = $_POST["nama_pengguna"];
        $kata_sandi = $_POST["kata_sandi"];
        $nama     = $_POST["nama"];
        $email    = $_POST["email"];
        $admin    = new Admin;

// Mengecek informasi POST yang berisi informasi untuk menambahkan pengguna baru
    if ($nama_pengguna!=null && $kata_sandi!=null && $nama!=null && $email!=null && $id_pengguna==null){
        // Perintah untuk menambahkan pengguna ke dalam basis data
        $admin->tambah_pengguna($nama_pengguna, $kata_sandi, $nama, $email);
    } 

// Mengecek informasi POST yang berisi informasi untuk memperbarui data pengguna
if ($nama_pengguna!=null && $kata_sandi!=null && $nama!=null && $email!=null && $id_pengguna!=null){
        // Perintah untuk mengedit pengguna ke dalam basis data
        $admin->ubah_pengguna($id_pengguna, $nama_pengguna, $kata_sandi, $nama, $email);

    } 
}

// Halaman Admin untuk menambahkan Pengguna
if(isset($_GET['tambah'])){
echo "<h2>Admin - Tambah Pengguna</h2>";
?>
 <form action="" method="post">
  <fieldset>
    <legend>Tambah Pengguna :</legend>
    Nama Pengguna :<br>
    <input type="text" name="nama_pengguna">
    <br>
    Nama Lengkap :<br>
    <input type="text" name="nama">
    <br>
    Email :<br>
    <input type="text" name="email">
    <br>
    Kata Sandi :<br>
    <input type="password" name="kata_sandi">
    <br>
    <input type="reset" value="Reset">
    <br>
    <input type="submit" value="Kirim">
  </fieldset>
</form> 
<?php
} 

// Halaman Admin untuk mengedit Pengguna
if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $edit = new Admin;
    $sunting = $edit->edit_pengguna($id);
    while($data=$sunting->fetch(PDO::FETCH_OBJ)){
    ?>
    <form action="" method="post">
  <fieldset>
    <legend>Tambah Pengguna :</legend>
    Nama Pengguna :<br>
    <input type="text" name="nama_pengguna" value="<?php echo $data->nama_pengguna; ?>">
    <br>
    Nama Lengkap :<br>
    <input type="text" name="nama" value="<?php echo $data->nama; ?>">
    <br>
    Email :<br>
    <input type="text" name="email" value="<?php echo $data->email; ?>">
    <br>
    Kata Sandi :<br>
    <input type="password" name="kata_sandi" value="<?php echo $data->kata_sandi; ?>">
    <br>
    <input type="hidden" name="id_pengguna" value="<?php echo $data->id_pengguna; ?>">
    <br>
    <input type="submit" value="Kirim">
  </fieldset>
</form> 
<?php
};

}
// Halaman Admin untuk menghapus Pengguna
if(isset($_GET['hapus'])){
    
    //hapus
$id = $_GET['hapus'];
$hapus = new Admin;
$hapus->hapus_pengguna($id);
header('Location : admin.php?pengguna');


} else {
// Halaman Utama Administrasi Menejemen Pengguna
    echo"
    <a href='admin.php?pengguna&tambah'> Tambah Pengguna</a>
    ";
$admin = new Admin;
?>
<table border='1'>
<th>No.</th>
<th>Nama Pengguna</th>
<th>Nama Lengkap</th>
<th>Email</th>
<th colspan="2">Aksi</th>
<?php
$select = $admin->muncul_pengguna();
while($data=$select->fetch(PDO::FETCH_OBJ)){
    echo "
<tr>
<td>$data->id_pengguna</td>
<td>$data->nama_pengguna</td>
<td>$data->nama</td>
<td>$data->email</td>
<td><a href='admin.php?pengguna&edit=$data->id_pengguna'>Edit</a></td>
<td><a href='admin.php?pengguna&hapus=$data->id_pengguna'>Hapus</a></td>
</tr>
    ";
};
echo "</table>";
}
?>