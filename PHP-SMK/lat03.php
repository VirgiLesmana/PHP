<?php 



function belajar (){
    echo "saya belajar php";
}
echo belajar().'<br>';


function luas(){
    $k=4;
    $l=9;
    $luas= $k*$l;
    return $luas;
}
echo luas()*10 .'<br>';


function output()
{
    return "Belajar Function";
}
echo output();
?>