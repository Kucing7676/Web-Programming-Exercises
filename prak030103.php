<?php
    function buatBintangLagi($n){
        echo "<pre>";
        $k = $n;
        for($i = 0; $i < $n; $i++){
            for($j = 0; $j < $k; $j++){
                echo "*";
            }
            $k--;
            echo "\n";
        }
        echo "</pre>";
    }
    buatBintangLagi(4);
    buatBintangLagi(5);
?>