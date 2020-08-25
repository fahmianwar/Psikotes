<?php
include "class/tes_psikopat.php";
$pertanyaan = new Tes_Psikopat;
$kode = $_GET['soal'];
$select = $pertanyaan->munculkan_tes_psikopat($kode);
while($data=$select->fetch(PDO::FETCH_OBJ)){
?>

        <h3><?php echo "$kode. "; echo $data->soal; ?></h3>
        <div id="quiz_wrapper" align="left">
            <br />        
            <input type="radio" name="pertanyaan-<?php echo $kode; ?>" id="pertanyaan-<?php echo $data->id_pertanyaan; ?>-A" value="<?php echo $data->nilai_a; ?>" required />
            <label for="pertanyaan-<?php echo $data->id_pertanyaan; ?>-A">A) <?php echo $data->opsi_a; ?></label>
            <br />
            <input type="radio" name="pertanyaan-<?php echo $kode; ?>" id="pertanyaan-<?php echo $data->id_pertanyaan; ?>-B" value="<?php echo $data->nilai_b; ?>" required />
            <label for="pertanyaan-<?php echo $data->id_pertanyaan; ?>-B">B) <?php echo $data->opsi_b; ?></label>
            <br />
            <input type="radio" name="pertanyaan-<?php echo $kode; ?>" id="pertanyaan-<?php echo $data->id_pertanyaan; ?>-C" value="<?php echo $data->nilai_c; ?>" required />
            <label for="pertanyaan-<?php echo $data->id_pertanyaan; ?>-C">C) <?php echo $data->opsi_c; ?></label>
            <br />
            </div>
<?php
};
?>