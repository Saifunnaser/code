<?php
function nilaiRata($nilai_UTS, $nilai_UAS){
    $nilaiRata = ($nilai_UTS+$nilai_UAS)/2;
    if($nilaiRata >= 81 AND $nilaiRata <= 100){
        $keterangan ="A";
        $message = "Excellent";
    } elseif ($nilaiRata >= 78 AND $nilaiRata <= 80.99){
        $keterangan ="A-";
        $message = "Good";
    }elseif ($nilaiRata >= 75 AND $nilaiRata <= 77.99){
        $keterangan ="b+";
        $message = "Not Bad";
    }elseif ($nilaiRata < 75){
        $keterangan ="Tidak Lulus";
        $message = "Keep Spirit!";
    } else {
        $keterangan ="Tidak Terdefinisi";  
        $message = "undefined";
    }

    $data = array(
        'nilaiRata' => $nilaiRata,
        'keterangan' => $keterangan,
        'message' => $message
    );

    return $data;
}
?>