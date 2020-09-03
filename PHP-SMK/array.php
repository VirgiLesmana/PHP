<?php 

    //ARRAY DIMENSI
//     $Nama = array("Joni","Tejo","Budi","Siti",50, 2.5);
//     var_dump($Nama);
// echo "<br>";    
//     echo $Nama[2].'<br>';
//     for ($i=0; $i <6 ; $i++) { 
//        echo $Nama[$i].'<br>';
//     }
//     foreach ($Nama as $key ) {
//         echo $key.'<br>';
//     }


    //ARRAY ASOSIATIF
//     $Nama = array( 
//         "Buz Lightyer" => "Surabaya",
//         "Budi" => "Malang",
//         "Tabuti" => "Sidoarjo",
//         "Avatar" => "Ang"
// );

$Nama["Buz Lightyer"]="Surabaya";
$Nama["Budi"]="Malang";
$Nama["Tabuti"]="Sidoarjo";
$Nama["Avatar"]="Ang";
$Nama["Ada Wong"]="Racoon City";


var_dump($Nama);
echo "<br>";
echo $Nama['Avatar'].'<br>';
foreach ($Nama as $key => $value) {
    echo $key." => ".$value;
    echo "<br>";
}
?>