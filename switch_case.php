<?php
    $kelas = 4;
    switch($kelas) {
        case 1 :
            echo"Anda kategori Novice Programmer";
            break;
        case 2 :
            echo"Anda kategori Advence Beginner Programmer";
            break;                
        case 3 :
            echo"Anda kategori Competent Programmer";
            break;
        case 4 :
            echo"Anda kategori Expert Programmer";
            break;
        default :
            echo"Input masukan salah";
    }
?>