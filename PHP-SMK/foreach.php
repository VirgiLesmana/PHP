<?php 

    // $Nama = array("Joni","Tejo","Budi","Siti");
    // var_dump($Nama);
    // echo "<br>";
    // foreach ($Nama as $key ) {   
    //     echo $key.'<br>';
    // }

    $Nama = array( 
    "Buz Lightyer" => "Surabaya",
    "Budi" => "Malang",
    "Tabuti" => "Sidoarjo",
    "Avatar" => "Ang"
    );
    var_dump($Nama);
echo "<br>";
    foreach ($Nama as $key => $value) {
        echo $key.'='.$value;
        echo "<br>";
    }
?>