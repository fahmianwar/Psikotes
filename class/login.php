<?php
class Login {

	// Otomatis mengeksekusi perintah di dalam contruct setiap memanggil class Admin
	public function __construct(){
	// Berfungsi untuk menghubungkan PHP dengan Basis Data, berisi informasi (nama_basis:host=nama_server_basis_data;dbname=nama_basis_data','nama_pengguna','kata_sandi')
	$this->db = new PDO('mysql:host=localhost;dbname=psikopat','root','root');
	}

	public function daftar_pengguna($nama_pengguna,$kata_sandi,$nama,$email)
	{
		$kata_sandi_enkripsi = MD5($kata_sandi);
			
		$sql = "INSERT INTO pengguna (nama_pengguna,nama,kata_sandi,email) VALUES ($nama_pengguna, $nama, $kata_sandi_enkripsi, $email)";					  
		$query = $this->db->query($sql);
			if(!$query){
				return "Gagal";
				echo "<script>
        		alert('Gagal mendaftarkan pengguna baru!');
        		</script>
        		";
		} else {
			return $query;
			echo "<script>
        	alert('Berhasil mendaftarkan pengguna baru!');
        	</script>
        	";
		}
	}
			
	
	public function login($nama_pengguna,$kata_sandi)
	{
        $kata_sandi_enkripsi = MD5($kata_sandi);
		$sql = "SELECT * FROM pengguna WHERE nama_pengguna='$nama_pengguna' AND kata_sandi='$kata_sandi_enkripsi'";
		$query = $this->db->query($sql);
		$data_pengguna=$query->fetch(PDO::FETCH_ASSOC);
			if(!$query==1){
				return "Gagal";
				echo "<script>
        		alert('Gagal Login!');
        		</script>
        		";
			} else {
				$_SESSION['sesi_pengguna'] = $data_pengguna['id_pengguna'];
				return true;
				echo "<script>
        		alert('Berhasil Login!');
        		</script>
        		";
			}

	}
	
	public function cek_login()
	{
		if(isset($_SESSION['sesi_pengguna']))
		{
			return true;
		}
	}
	
	public function redirect($url)
	{
		header("Location: $url");
	}
	
	public function logout()
	{
		session_destroy();
		unset($_SESSION['sesi_pengguna']);
		return true;
	}
}
?>