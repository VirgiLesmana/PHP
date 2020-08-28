<?php 

    $buah=['apel',600,'mangga',300,'pisang',700];
    var_dump($buah);
    echo "<br>";
    echo $buah[2];

    foreach ($buah as $key => $value) {
        echo $key."=>".$value;
        echo "<br>";
    }

    // array asosiatif
    $harga=['mangga'=>300,'pisang'=>200];
    var_dump($harga);
    echo "<br>";

    foreach ($harga as $key => $value) {
        echo $key . " harganya " . $value;
        echo "<br>";
    }

    echo $harga['mangga'];
    echo "<br>";
    $isi=array_keys($harga);
    var_dump($isi);
    echo "<br>";
    echo $isi[0];
?>