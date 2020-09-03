<?php 

    // OPERATOR MTK
    $a = 10;
    $b = 2 ;
    $c = $a+$b;
    echo $c;
echo "<br>";
    $c = $a - $b;
    echo $c;
echo "<br>";
    $c = $a*$b;
    echo $c;
echo "<br>";
    $c = $a/$b;
    echo $c;
echo "<br>";
    $c = $a%$b;
    echo $c.'<br>';

    //OPERATOR LOGIKA
    $c = $a<$b;
    echo $c;

    $c = $a>$b;
    echo $c;

    $c = $a == $b;
    echo $c.'<br>';

    $c = $a!=$b;
    echo $c.'<br>';

    //INCREMENT
    $a++;
    echo $a.'<br>';

    //OPERATOR STRING
    $kata = ' Kota ';
    $benda= ' Udang ';
    $hasil = $kata.$benda ;
    $hasil .= ' SIDOARJO ';
    echo $hasil;

?>