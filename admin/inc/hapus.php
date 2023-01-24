<?php
include '/xampp/htdocs/sas2/admin/inc/config.php';

$id = $_GET["id"];

if (isset($id)) {
    global $conn;

    $query = mysqli_query($conn, "DELETE FROM tb_multi_user WHERE id = $id");

    echo "<script>
    alert('Berhasil di hapus!')
    window.location.href = ''
  </script>";
}
