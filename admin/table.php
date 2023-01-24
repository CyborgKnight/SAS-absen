<?php
require_once '/xampp/htdocs/sas2/admin/inc/config.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link href="sidebar/css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>User || Admin</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-light"><b>admin</b></div>

            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="index.php">Dashboard</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="users.php">The Users</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="table.php">The Index</a>
            </div>
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <button class="btn btn-primary" id="sidebarToggle">Menu</button>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            <a class="btn btn-primary me-3" href="add_table.php"> Add Data </a>
                            <li class="nav-item dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Setting
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#!">Profile</a>
                                    <a class="dropdown-item" href="#!">Change Password</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="../logout.php">Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Page content-->
            <div class="container-fluid">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $query = mysqli_query($conn, "SELECT tb_master_kelas.kelas, tb_index.id as IdIndex, tb_index.tanggal FROM tb_index LEFT JOIN tb_master_kelas ON tb_index.master_kelas_id = tb_master_kelas.id ;");
                        $fetches = mysqli_fetch_all($query, MYSQLI_ASSOC);


                        ?>
                        <?php foreach ($fetches as $fetch) : ?>
                            <tr>
                                <td><?= $fetch['IdIndex'] ?></td>
                                <td><?= $fetch['tanggal'] ?></td>
                                <td><?= $fetch['kelas'] ?></td>
                                <?php ?>
                                <td>
                                    <a class="badge bg-primary" href=""><i class="bi bi-eye"></i></a>
                                    <a class="badge bg-warning" href=""><i class="bi bi-pencil-square"></i></a>
                                    <a class="badge bg-danger" href=""><i class="bi bi-trash"></i></a></>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="sidebar/js/scripts.js"></script>

</html>