<?php
    function hitungGaji($gol, $masaKerja){
        if($gol == "A"){
            if($masaKerja < 10){
                $gaji = 5000000;
            } else {
                $gaji = 7000000;
            }
        } else if ($gol == "B"){
            if($masaKerja < 10){
                $gaji = 6000000;
            } else {
                $gaji = 8000000;
            }
        }
        return $gaji;
    }
    echo hitungGaji("A", 6) . "<br>";
    echo hitungGaji("B", 12);
?>