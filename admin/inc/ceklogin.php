<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'config.php';

// menangkap data yang dikirim dari form login
$nis      = $_POST['nis'];
$password = $_POST['password'];

// menyeleksi data user dengan nis dan password yang sesuai
$login = mysqli_query($conn, "select * from tb_multi_user where nis='$nis' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah nis dan password di temukan pada database
if ($cek > 0) {
	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if ($data['level'] == "admin") {

		// buat session login dan nis
		$_SESSION['nis'] = $nis;
		$_SESSION['level'] = "admin";

		// alihkan ke halaman dashboard admin
		header("location: admin/index.php");

		// cek jika user login sebagai pegawai
	} else if ($data['level'] == "tatausaha") {
		// buat session login dan nis
		$_SESSION['nis'] = $nis;
		$_SESSION['level'] = "tatausaha";
		// alihkan ke halaman dashboard pegawai
		header("location: tatausaha/index.php");

		// cek jika user login sebagai pengurus
	} else if ($data['level'] == "siswa") {
		// buat session login dan nis
		$_SESSION['nis'] = $nis;
		$_SESSION['level'] = "siswa";
		// alihkan ke halaman dashboard pengurus
		header("location: siswa/index.php");
	} else {

		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}
} else {
	header("location:index.php?pesan=berhasil");
}
