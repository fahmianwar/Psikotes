<?php
class Jawaban{
	        $kode      	 = $_POST['kode']+1;
            $jawaban[1]  = $_POST['pertanyaan-1'];
            $jawaban[2]  = $_POST['pertanyaan-2'];
            $jawaban[3]  = $_POST['pertanyaan-3'];
            $jawaban[4]  = $_POST['pertanyaan-4'];
            $jawaban[5]  = $_POST['pertanyaan-5'];
            $jawaban[6]  = $_POST['pertanyaan-6'];
            $jawaban[7]  = $_POST['pertanyaan-7'];
            $jawaban[8]  = $_POST['pertanyaan-8'];
            $jawaban[9]  = $_POST['pertanyaan-9'];
            $jawaban[10] = $_POST['pertanyaan-10'];
            $jawaban[11] = $_POST['pertanyaan-11'];
            $jawaban[12] = $_POST['pertanyaan-12'];
            $jawaban[13] = $_POST['pertanyaan-13'];
            $jawaban[14] = $_POST['pertanyaan-14'];
            $jawaban[15] = $_POST['pertanyaan-15'];
            $jawaban[16] = $_POST['pertanyaan-16'];
            $jawaban[17] = $_POST['pertanyaan-17'];
            $jawaban[18] = $_POST['pertanyaan-18'];
            $jawaban[19] = $_POST['pertanyaan-19'];
            $jawaban[20] = $_POST['pertanyaan-20'];
            $jawaban[21] = $_POST['pertanyaan-21'];
            $jawaban[22] = $_POST['pertanyaan-22'];
            $jawaban[23] = $_POST['pertanyaan-23'];
            $jawaban[24] = $_POST['pertanyaan-24'];
            $jawaban[25] = $_POST['pertanyaan-25'];
            $jawaban[26] = $_POST['pertanyaan-26'];
            $jawaban[27] = $_POST['pertanyaan-27'];
            $jawaban[28] = $_POST['pertanyaan-28'];
            $jawaban[29] = $_POST['pertanyaan-29'];
            $jawaban[30] = $_POST['pertanyaan-30'];

	public function kumpul_jawaban(){
            $Nilai_Benar = 0;
            for($n=1;$n<=30;$n++){
            $Nilai_Benar=$Nilai_Benar+$jawaban[$n];     
	}

	public function test(){
		if($kode==31){
                  
        echo "<div id='results'>Benar $Nilai_Benar / 30 Pertanyaan</div>";
		$oke = new Hasil();

		echo "<strong>Tingkat Kepsikopatan Anda </strong>".$oke->psikopat($Nilai_Benar);
		echo '<br>';
		echo $oke->persentase($Nilai_Benar);
		            } else {
		header("Location: pertanyaan.php?soal=".$kode."");
            }
	}
}
?>