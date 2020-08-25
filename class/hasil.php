<?php

class Hasil{
	function persentase($nilai) {
		$persen=(($nilai / 60) * 100);
		echo 'Persentasi kepsikopatan Anda '.$persen.'%';
	}
	function psikopat($nilai) {
		if ($nilai<=20)
		{
			return "Rendah";
		} 
		if ($nilai>21 || $nilai<=30) 
		{
			return "Di Bawah Rata-rata";
		} 
			if ($nilai>31 || $nilai<=40) 
		{
			return "Sedang";
		} 
		if ($nilai>41 || $nilai<=50) 
		{
			return "Tinggi";
		} 
		else 
		{
			return "Sangat Tinggi";
		}
	}
}
?>
