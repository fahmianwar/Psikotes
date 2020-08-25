<?php
class Tes_Psikopat{
    public function __construct(){
    $this->db = new PDO('mysql:host=localhost;dbname=psikopat','root','root');
    }
    public function munculkan_tes_psikopat($id){
    $sql = "SELECT * FROM pertanyaan ORDER BY RAND() LIMIT 1";
    $query = $this->db->query($sql);
		if(!$query){
			return "Gagal";
			echo "<script>
        	alert('Gagal memunculkan tes psikopat!');
        	</script>
        	";
		} else {
			return $query;

		}
    }
}
?>