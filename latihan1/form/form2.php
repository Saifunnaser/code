<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<div class="container">
    <form method="POST">
        <div class="row mb-3 mt-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" name="email" class="form-control" id="inputEmail3" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" name="password" class="form-control" id="inputPassword3" required>
            </div>
        </div>
        <fieldset class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="gridRadios1" value="Pria" checked>
                    <label class="form-check-label" for="gridRadios1">
                        Pria
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Wanita">
                    <label class="form-check-label" for="gridRadios2">
                        Wanita
                    </label>
                </div>
            </div>
        </fieldset>
        <button type="submit" name="submit" class="btn btn-primary">Sign in</button>
    </form>
    <!-- aksi button -->
    <?php
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = sha1($_POST['password']);
        $jenis_kelamin =$_POST['jenis_kelamin'];

    
    ?>
    <table class="table table-bordered">
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><?php echo $email ?></td>
        </tr>
        <tr>
            <td>password</td>
            <td>:</td>
            <td><?php echo $password ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><?php echo $jenis_kelamin ?></td>
        </tr>
    </table>


    <?php
    }
    ?>
</div>

<body>

</body>

</html>