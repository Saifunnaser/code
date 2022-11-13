<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4(If else)</title>
</head>
<body>
    <?php 
    $nilai_UTS = 120;
    $nilai_UAS = 97;
    $nilai_rata = ($nilai_UTS + $nilai_UAS)/2;

    //percabangan 2 kondisi
    if($nilai_rata == 100){// ==membndingkan suatu nilai bukan memberikan nilai ===membandingkan suatu nilai (isinya) dan juga tipe datanya)
        $keterangan ="LULUS";
    } else {
        $keterangan1 ="SEMANGAT, BELAJAR LAGI!";
    }
    if($nilai_rata >= 100){
        $keterangan2 ="KET 2 : LULUS";
    } else if ($nilai_rata >= 90 && $nilai_rata <= 99){
        $keterangan2 ="KET 2 : RATA-RATA";
    }else{
        $keterangan2 ="KET 2 : TIDAK LULUS";
    }

    $username="Sydemy";
    $password="123";

    if($username === "Sydemy" && $password === 123){
        $succes ="Ya";
    } else {
        $succes ="Tidak";
    }

    $data = "DATA";
    if($data == "DATA"):
        $valid = true;
    else:
        $valid = false;
    endif;

    
    ?>
    <p>Keterangan 1: <?= $keterangan1; ?> </p> 
    <p>Keterangan 2: <?= $keterangan2; ?> </p> 
    <p>Password benar ? <?= $succes; ?> </p>
    <p>VALID? : <?= $valid; ?> </p>
</body>
</body>
</html>