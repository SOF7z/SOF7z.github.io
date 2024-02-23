</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $title; ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<div class="modal fade" id="tambahmenusidebar" aria-hidden="true" aria-labelledby="tambahmenusidebarLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahmenusidebarLabel">Tambah Menu Sidebar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('menu/submenu'); ?>" method="post">
                    <div class="col-sm-3">
                        <label>Menu ID</label>
                        <!-- <select name="menu_id" class="form-control">
                            <option value="">--Pilih Status--</option>
                            <?php
                            $no = 1;
                            foreach ($sub_menu as $usm) : ?>
                                <option value="<?= $no++ ?>"><?php echo $usm->menu_id ?></option>
                            <?php endforeach; ?>
                        </select> -->
                        <input type="text" class="form-control" name="menu_id" id="menu_id">
                    </div>

                    <div class="mb-2">
                        <label for="recipient-name" class="col-form-label">Title</label>
                        <input type="text" class="form-control" name="title" id="title">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Url Pengiriman</label>
                        <input type="text" class="form-control" name="url" id="url">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Icon</label>
                        <input type="text" class="form-control" name="icon" id="icon">
                    </div>
                    <div class="col-sm-4">
                        <label>Status</label>
                        <select name="is_active" class="form-control">
                            <option value="">--Pilih Status--</option>
                            <option value="0">Not Active!</option>
                            <option value="1">Active!</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" type="submit">Buat</button>
            </div>
        </div>
    </div>
</div>


<body>
    <div class="col-lg-10">

        <main id="main" class="main">

            <div class="pagetitle">
                <h1>Menu Management</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('home') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('menu') ?>">Menu</a></li>
                        <li class="breadcrumb-item active">Sub Menu</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Menu</h5>

                            <?= form_error(
                                'menu_id',
                                '<div class="alert alert-danger bg-danger text-light alert-dismissible fade show" role="alert">',

                                '<button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>'
                            ); ?>

                            <?php echo $this->session->flashdata('pesan') ?>

                            <a class="btn btn-success" data-bs-toggle="modal" href="#tambahmenusidebar" role="button">Tambah Menu</a>
                            <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Open modal for @mdo</button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat">Open modal for @fat</button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Open modal for @getbootstrap</button> -->
                            <div class="table-responsive">
                                <!-- Table with stripped rows -->
                                <table class="table table-striped">
                                    <thead>
                                        <center>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Role</th>
                                                <th scope="col">Menu_ID</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">Url</th>
                                                <th scope="col">icon</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">action</th>
                                            </tr>
                                        </center>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($sub_menu as $usm) : ?>
                                            <tr>
                                                <th scope="row"><?= $no++ ?>.</th>
                                                <!-- <td><?php echo $usm->menu_id ?></td> -->
                                                <td>
                                                    <?php
                                                    if ($usm->menu_id <= "0") {
                                                        echo "<span class='badge bg-dark mb-2'><i class='bi bi-stars me-1'> Devoloper </i></span>";
                                                    } elseif ($usm->menu_id == "1") {
                                                        echo "<span class='badge bg-primary mb-2'><i class='bi bi-star-fill me-1'> Admin </i></span>";
                                                    } elseif ($usm->menu_id == "2") {
                                                        echo "<span class='badge bg-success mb-2'> user </span>";
                                                    } elseif ($usm->menu_id == "3") {
                                                        echo "<span class='badge bg-primary mb-2'><i class='bi bi-star-fill me-1'> Admin </i></span>";
                                                    } else {
                                                        echo "<span class='badge bg-primary mb-2'><i class='bi bi-star-fill me-1'> Admin </i></span>";
                                                    }
                                                    ?>
                                                </td>
                                                <td><?php echo $usm->menu_id ?></td>
                                                <td><?php echo $usm->title ?></td>
                                                <td><?php echo $usm->url ?></td>
                                                <td><?php echo $usm->icon ?></td>
                                                <!-- <td><?php echo $usm->is_active ?></td> -->
                                                <td><?php
                                                    if ($usm->is_active <= "0") {
                                                        echo "<span class='badge bg-danger text-light'><i class='bi bi-exclamation-triangle me-1'> Not Active </i></span>";
                                                    } elseif ($usm->is_active == "1") {
                                                        echo "<span class='badge bg-success'><i class='bi bi-star me-1'> Active </i></span>";
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <a type="button" href="<?php echo base_url('menu/Update_Submenu/') . $usm->id ?>" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>

                                                    <a href="<?php echo base_url('menu/delete_submenu/') . $usm->id ?>" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                                <!-- End Table with stripped rows -->

                            </div>
                            <div class="btn-group" role="group" class="" aria-label="Basic mixed styles example">
                                <Center>
                                    <a button type="button" class="btn btn-danger mb-2" href="<?= base_url('menu') ?>">KEMBALI</a>
                                </Center>
                            </div>
                        </div>
                    </div>



        </main><!-- End #main -->
    </div>
</body>



</html>