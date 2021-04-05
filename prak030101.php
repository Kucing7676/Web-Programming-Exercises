<?php

    function gandakanString($s, $n){
        $teks = "";
        for($i = 0; $i < $n; $i++){
            $teks .= $s;
        }
        echo $teks;
    }
    gandakanString("Hello", 3);
?>