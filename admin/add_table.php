<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css1/login.css" />
    <title>Add Data Table</title>
</head>

<?php
require_once 'inc/config.php';


if (isset($_POST['submit'])) {
    $kelas = stripslashes($_POST['kelas']);
    $kelas = mysqli_real_escape_string($conn, $kelas);

    $query = mysqli_query($conn, "INSERT INTO tb_index (, 'tanggal', 'master_kelas_id') VALUES (current_timestamp(), $kelas;");
}


?>

<body>
    <div class="container">
        <div class="card-header text-center">
            <h3>Add Data</h3>
        </div>
        <br>
        <form method="post" action="">
            <div class="form-grup">
                <div class="row">
                    <div class="col">
                        <select class="form-select" name="kelas" id="kelas" aria-label="Disabled select example">
                            <option selected>Pilih Kelas...</option>
                            <option value="1">X</option>
                            <option value="2">XI</option>
                            <option value="3">XII</option>
                        </select>
                    </div>
                </div>
                <div class="d-grid gap-2">
                    <button class="d-block btn btn-danger mt-3" type="submit" name="submit"> Simpan </button>
                    <a href="table.php" class="btn btn-primary d-block"> Kembali </a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>