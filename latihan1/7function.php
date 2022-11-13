<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 7(Function/method)</title>
</head>
<body>
    <?php
    function cetakHello(){
        echo"Hallooooo";
    }

    function luasSegitiga($alas,$tinggi){
        $luas = $alas * $tinggi/2;

        return $luas;
    }

    function getData(){
        return"Data berhasil diget";
    }

    function luasPersegi($sisi_a,$sisi_b){
        $luas = $sisi_a * $sisi_b;

        return $luas;
        
    }
    ?>
    <h1>Panggil function cetakHello() : <?php cetakHello(); ?></h1>
    <p>Panggil function getData() : <?php echo getData(); ?></p>
    <h5>Panggil function luasSegitiga($alas,$tinggi) : <?php echo luasSegitiga(20,35); ?></h5>
    <h5>Panggil function luasPersegi($sisi1,$sisi2) : <?php echo luasPersegi(20,20); ?></h5>
</body>
</html>