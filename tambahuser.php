<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/css1/login.css" />
    <title>Add Users</title>
</head>

<body>
    <?php
    require('config.php');
    // If form submitted, insert values into the database.
    if (isset($_POST['submit'])) {

        $nama = stripslashes($_POST['nama']);
        $nama = mysqli_real_escape_string($conn, $nama);

        $nis = stripslashes($_POST['nis']);
        $nis = mysqli_real_escape_string($conn, $nis);

        // removes backslashes
        $jenis_kelamin = stripslashes($_POST['jenis_kelamin']);
        // escapes special characters in a string
        $jenis_kelamin = mysqli_real_escape_string($conn, $jenis_kelamin);

        $kelas = stripslashes($_POST['kelas']);
        $kelas = mysqli_real_escape_string($conn, $kelas);

        $jurusan = stripslashes($_POST['jurusan']);
        $jurusan = mysqli_real_escape_string($conn, $jurusan);

        $password = stripslashes($_POST['password']);
        $password = mysqli_real_escape_string($conn, $password);

        $level = stripslashes($_POST['level']);
        $level = mysqli_real_escape_string($conn, $level);

        $query = "INSERT into `tb_multi_user` (nama_lengkap, nis, jenis_kelamin, kelas, jurusan, password, level)
		VALUES ('$nama', '$nis', '$jenis_kelamin', '$kelas', '$jurusan', '$password', '$level')";
        $result = mysqli_query($conn, $query);
        if ($result) {
            echo "<script>
            alert('account registered successfully')
            window.location.href = 'index.php' 
           </script>";
        }
    } else {
    ?>
        <div class="container">
            <center>
                <h4>Add Users</h4>
            </center>
            <form name="" action="" method="post">
                <div class="form-group">
                    <label for=""></label>
                    <div class="input-group">
                        <div class="input-group-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="25" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                            </svg>
                        </div>
                        <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" autocomplete="off" id="nama" onkeyup="myFunction()" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for=""></label>
                    <div class="input-group">
                        <div class="input-group-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-at" viewBox="0 0 16 16">
                                <path d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z" />
                            </svg>
                        </div>
                        <input type="number" name="nis" class="form-control" placeholder="NIS" autocomplete="off" onKeyPress="if(this.value.length==6) return false;" required>
                    </div>
                </div>
                <p></p>
                <div class="form-group">
                    <tr>
                        <td bgcolor="#ffc0cb">
                            <select class="form-select" name="jenis_kelamin" aria-label="Disabled select example">
                                <option selected> Pilih Jenis Kelamin... </option>
                                <option value="L"> Laki - laki </option>
                                <option value="P"> Perempuan </option>
                            </select>
                        </td>
                    </tr>
                </div>
                <p></p>
                <div class="form-group">
                    <tr>
                        <td bgcolor="#ffc0cb">
                            <select class="form-select" name="kelas" aria-label="Disabled select example">
                                <option selected> Pilih Kelas... </option>
                                <option value="X"> X </option>
                                <option value="XI"> XI </option>
                                <option value="XII"> XII </option>
                            </select>
                        </td>
                    </tr>
                </div>
                <p></p>
                <div class="form-group">
                    <tr>
                        <td bgcolor="#ffc0cb">
                            <select class="form-select" name="jurusan" aria-label="Disabled select example">
                                <option selected> Pilih Jurusan... </option>
                                <option value="rpl"> Rekayasa Perangkat Lunak </option>
                                <option value="mm"> Multimedia </option>
                            </select>
                        </td>
                    </tr>
                </div>
                <div class="form-group">
                    <label for=""></label>
                    <div class="input-group">
                        <div class="input-group-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
                                <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z" />
                            </svg>
                        </div>
                        <input type="password" name="password" class="form-control" autocomplete="off" placeholder="Password" required>
                    </div>
                </div>
                <p></p>
                <div class="form-group">
                    <tr>
                        <td bgcolor="#ffc0cb">
                            <select class="form-select" name="level" aria-label="Disabled select example">
                                <option selected> Pilih Roles... </option>
                                <option value="siswa"> Siswa </option>
                                <option value="tatausaha"> Tata Usaha </option>
                                <option value="admin"> Admin </option>
                            </select>
                        </td>
                    </tr>
                </div>
                <br>
                <tr>
                    <td>
                        <button class="btn btn-danger" type="submit" name="submit"> Tambah </button>
                    </td>
                </tr>
            </form>
        </div>
    <?php } ?>

    <br><br><br><br>

</body>

<script>
    function myFunction() {
        var x = document.getElementById("nama");
        x.value = x.value.toUpperCase();
    }
</script>

</html>