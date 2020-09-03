<?php 

    $tanggal = 34;
    if($tanggal < 32){
        if ($tanggal > 0) {
            echo 'benar';
        }else {
            echo 'Salah';
        }
    }
    else {
        echo 'Salah';
    }
echo "<br>";


    $nilai = 0;

    if ($nilai<=100) {
        if ($nilai >=0) {
            echo 'Nilai Benar';
        }else {
            echo 'Nilai salah';
        }
    }else {
        echo 'Nilai salah';
    }
echo "<br>";

    if ($nilai >=0 && $nilai <=100) {
        echo 'Nilai Benar';
    }else {
        echo 'Nilai Salah';
    }
echo "<br>";

    if ($nilai >=100 || $nilai <=0) {
        echo 'Nilai Benar';
    }else {
        echo 'Nilai Salah';
    }

?>