<?php
class Admin {

	// Otomatis mengeksekusi perintah di dalam contruct setiap memanggil class Admin
	public function __construct(){
	// Berfungsi untuk menghubungkan PHP dengan Basis Data, berisi informasi (nama_basis:host=nama_server_basis_data;dbname=nama_basis_data','nama_pengguna','kata_sandi')
	$this->db = new PDO('mysql:host=localhost;dbname=psikopat','root','root');
	}
	
	// Sintaks untuk mengontrol data di dalama tabel Pengguna
	// Berfungsi untuk menambahkan Pengguna baru
	public function tambah_pengguna($nama_pengguna, $kata_sandi, $nama, $email){
		// Mengubah teks ASCII menjadi teks enkripsi dengan metode MD5
		$katasandi_enkripsi = MD5($kata_sandi);
		$sql = "INSERT INTO pengguna (nama_pengguna, kata_sandi, nama, email) VALUES ('$nama_pengguna', '$katasandi_enkripsi', '$nama', '$email')";
		$query = $this->db->query($sql);
		if(!$query){
			return "Gagal";
			echo "<script>
        	alert('Gagal menambahkan pengguna baru!');
        	</script>
        	";
		} else {
			return $query;
			echo "<script>
        	alert('Berhasil menambahkan pengguna baru!');
        	</script>
        	";
		}
	}

	// Berfungsi untuk mengedit data Pengguna sehingga muncul data sebelumnya berdasarkan 'id_pengguna'
	public function edit_pengguna($id){
		$sql = "SELECT * FROM pengguna WHERE id_pengguna='$id'";
		$query = $this->db->query($sql);
		if(!$query){
			return "Gagal";
			echo "Gagal";
		} else {
			return $query;
			echo "Berhasil";
		}
	}

	// Berfungsi untuk mengubah Pengguna berdasarkan 'id_pengguna'
	public function ubah_pengguna($id, $nama_pengguna, $kata_sandi, $nama, $email){
		$sql = "UPDATE pengguna SET nama_pengguna='$nama_pengguna', kata_sandi='$kata_sandi', nama='$nama', email='$email' WHERE id_pengguna='$id'";
		$query = $this->db->query($sql);
		if(!$query){
			return "Gagal";
			echo "<script>
        	alert('Gagal mengubah data pengguna!');
        	</script>
        	";
		} else {
			return $query;
			echo "<script>
        	alert('Berhasil mengubah data pengguna!');
        	</script>
        	";
		}
	}

	// Berfungsi untuk memunculkan semua Pengguna yang telah terdaftar
	public function muncul_pengguna(){
		$sql = "SELECT * FROM pengguna";
		$query = $this->db->query($sql);
		if(!$query){
			return "Gagal";
			echo "Gagal";
		} else {
			return $query;
			echo "Berhasil";
		}
	}

	// Berfungsi untuk menghapus Pengguna berdasarkan 'id_pengguna'
	public function hapus_pengguna($id){
		$sql = "DELETE FROM pengguna WHERE id_pengguna='$id'";
		$query = $this->db->query($sql);
		if(!$query){
			return "Gagal";
			echo "<script>
        	alert('Gagal menghapus pengguna!');
        	</script>
        	";
		} else {
			return $query;
			echo "<script>
        	alert('Berhasil menghapus pengguna!');
        	</script>
        	";
		}
	}
	
	// Sintaks untuk mengontrol data di dalama tabel Pertanyaan
	// Berfungsi untuk menambahkan Pertanyaan baru
	public function tambah_pertanyaan($soal, $opsi_a, $opsi_b, $opsi_c, $nilai_a, $nilai_b, $nilai_c){
		$sql = "INSERT INTO pertanyaan (soal, opsi_a, opsi_b, opsi_c, nilai_a, nilai_b, nilai_c) VALUES('$soal', '$opsi_a', '$opsi_b', '$opsi_c', '$nilai_a', '$nilai_b', '$nilai_c')";
		$query = $this->db->query($sql);
		if(!$query){
			return "Gagal";
			echo "<script>
        	alert('Gagal menambahkan pertanyaan baru!');
        	</script>
        	";
		} else {
			return $query;
			echo "<script>
        	alert('Berhasil menambahkan pertanyaan baru!');
        	</script>
        	";
		}
	}
	
	// Berfungsi untuk mengedit data Pertanyaan sehingga muncul data sebelumnya berdasarkan 'id_pertanyaan'
	public function edit_pertanyaan($id_pertanyaan){
		$sql = "SELECT * FROM pertanyaan WHERE id_pertanyaan='$id_pertanyaan'";
		$query = $this->db->query($sql);
		if(!$query){
			return "Gagal";
			echo "Gagal";
		} else {
			return $query;
			echo "Berhasil";
		}
	}

	// Berfungsi untuk mengubah Pertanyaan berdasarkan 'id_pertanyaan'
	public function ubah_pertanyaan($id_pertanyaan, $soal, $opsi_a, $opsi_b, $opsi_c, $nilai_a, $nilai_b, $nilai_c){
		$sql = "UPDATE pertanyaan SET soal='$soal', opsi_a='$opsi_a', opsi_b='$opsi_b', opsi_c='$opsi_c', nilai_a='$nilai_a', nilai_b='$nilai_b', nilai_c='$nilai_c' WHERE id_pertanyaan='$id_pertanyaan'";
		$query = $this->db->query($sql);
		if(!$query){
			return "Gagal";
			echo "<script>
        	alert('Gagal mengubah data pertanyaan!');
        	</script>
        	";
		} else {
			return $query;
			echo "<script>
        	alert('Berhasil mengubah data pertanyaan!');
        	</script>
        	";
		}
	}
	
	// Berfungsi untuk memunculkan semua data Pertanyaan
	public function muncul_pertanyaan(){
		$sql = "SELECT * FROM pertanyaan";
		$query = $this->db->query($sql);
		if(!$query){
			return "Gagal";
			echo "Gagal";
		} else {
			return $query;
			echo "Berhasil";
		}
	}
	
	// Berfungsi untuk menghapus Pertanyaan berdasarkan 'id_pertanyaan'
	public function hapus_pertanyaan($id_pertanyaan){
		$sql = "DELETE FROM pertanyaan WHERE id_pertanyaan='$id_pertanyaan'";
		$query = $this->db->query($sql);
		if(!$query){
			return "Gagal";
			echo "<script>
        	alert('Gagal mengahapus pengguna!');
        	</script>
        	";
		} else {
			return $query;
			echo "<script>
        	alert('Berhasil menghapus pengguna!');
        	</script>
        	";
		}
	}
		
}
?>