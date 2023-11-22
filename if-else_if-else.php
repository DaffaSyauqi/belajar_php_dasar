<?php
    $nilai = 88;
    
    if ($nilai > 90) {
        $grade = "A";
    } else if ($nilai > 80) {
        $grade = "B";
    } else if ($nilai > 70) {
        $grade = "C";
    } else if ($nilai > 60) {
        $grade = "D";
    } else if ($nilai > 50) {
        $grade = "Tidak Lulus";
    }

    echo"Nilai anda : $nilai<br>";
    echo"Grade : $grade";
?>