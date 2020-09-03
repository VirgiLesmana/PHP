<?php 

    $hari = 1;

    switch ($hari) {
        case 1:
            echo 'minggu';
            break;
        case 2:
            echo 'senin';
            break;
        case 3:
            echo 'selasa';
            break;
        
        default:
            echo 'Hari belom di buat';
            break;
    }
echo "<br>";
    $pilihan = 'simpan';
    switch ($pilihan) {
        case 'Tambah':
            echo 'anda memilih tambah';
            break;
        case 'ubah':
            echo 'anda memilih  ubah';
            break;
        case 'hapus':
            echo 'anda memilih  hapus';
            break;
        
        default:
            echo 'pilihan belom ada';
            break;
    }

?>