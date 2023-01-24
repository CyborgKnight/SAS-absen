<?php
$conn = mysqli_connect("localhost", "root", "", "sasabsen_db");

//cek koneksi
if (mysqli_connect_errno()) {
	echo "koneksi database gagal : " . mysqli_connect_error();
}
