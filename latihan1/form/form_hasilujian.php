<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Hasil Ujian</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<?php
    $nilai_UTS = $_POST['nilaiUTS'];
    $nilai_UAS = $_POST['nilaiUAS'];

    include 'function2.php';

    $nilaiRata= nilaiRata($nilai_UTS, $nilai_UAS);
?>
<body>
    <div class="container">
    <table class="table table-bordered">
        <tr>
            <td>Nilai UTS</td>
            <td>:</td>
            <td><?php echo $nilai_UTS ?></td>
        </tr>
        <tr>
            <td>Nilai UAS</td>
            <td>:</td>
            <td><?php echo $nilai_UTS ?></td>
        </tr>
        <tr>
            <td>Nilai Rata-Rata</td>
            <td>:</td>
            <td><?php echo $nilaiRata['nilaiRata'] ?></td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td>:</td>
            <td><?php echo $nilaiRata['keterangan']?></td>
        </tr>
        <tr>
            <td>Message</td>
            <td>:</td>
            <td><?php echo $nilaiRata['message'] ?></td>
        </tr>
    </table>
    </div>
</body>

</html>