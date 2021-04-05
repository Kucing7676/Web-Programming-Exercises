<?php
    function hitungdenda($tglHarusKembali, $tglKembali){
        # Pecah Tanggal Harus Kembali
        $split1 = explode("-", $tglHarusKembali);
        $date1 = $split1[2];
        $month1 = $split1[1];
        $year1 = $split1[0];
        # Pecah Tanggal Kembali
        $split2 = explode("-", $tglKembali);
        $date2 = $split2[2];
        $month2 = $split2[1];
        $year2 = $split2[0];
        # Menghitung JDN
        $jd1 = GregorianToJD($month1, $date1, $year1);
        $jd2 = GregorianToJD($month2, $date2, $year2);
        # Hitung Selisih Hari
        $selisih = $jd2 - $jd1;
        # Hitung Denda
        if($selisih > 0){
            $denda = $selisih * 3000;
        } else {
            $denda = 0;
        }
        return $denda;
    }
    echo "Besarnya denda adalah: Rp ".hitungDenda("2021-01-03", "2021-01-05").",-";