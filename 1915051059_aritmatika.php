<h1>ARITMATIKA<h1>
<br>
<form  method="POST" action="">
    Input Pertama               :  <input type="text" name="na" value="<?=isset($_POST['na']) ? $_POST['na'] : ''?>"><br><br>
    Input Kedua                 :  <input type="text" name="nb" value="<?=isset($_POST['nb']) ? $_POST['nb'] : ''?>"><br><br>
    Nilai dari Suku yang di cari:  <input type="text" name="nc" value="<?=isset($_POST['nc']) ? $_POST['nc'] : ''?>"><br><br>
    <input type="submit" name="submit" value="Hasil">
</form>
<h3>Hasil Perhitungan</h3>
<?php
    if (isset($_POST['submit'])){
        $na = $_POST['na'];
        $nb = $_POST['nb'];
        $nc = $_POST['nc'];
        echo "Input Pertama = ". $na;
        echo "<br> Input Kedua = ". $nb;
        echo "<br> Hasil Perhitungan " ;
            for ($i=1 ; $i<=$nc; $i++){
                $hasil = $na + ($nb*($i-1));
                echo "<br>".$hasil;
            }
        $hasilsuku = $na + ($nc-1) * $nb;
        echo "<br> <br> Nilai Suku ke- ". $nc;
        echo "<br>".$hasilsuku;
    }
?>