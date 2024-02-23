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
    z
    <div class="col-lg-10">

        <main id="main" class="main">

            <div class="pagetitle">
                <h1>Menu Management</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('home') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('menu') ?>">Menu</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('submenu') ?>">Sub Menu</li>
                        <li class="breadcrumb-item active">-> Update Sub Menu</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->

            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Update Menu</h5>

                            <?= form_error(
                                'menu_id',
                                '<div class="alert alert-danger bg-danger text-light alert-dismissible fade show" role="alert">',

                                '<button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>'
                            ); ?>

                            <?php echo $this->session->flashdata('pesan') ?>

                            <!-- <a class="btn btn-success" data-bs-toggle="modal" href="#tambahmenusidebar" role="button">Tambah Menu</a> -->
                            <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Open modal for @mdo</button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat">Open modal for @fat</button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Open modal for @getbootstrap</button> -->
                            <div class="table-responsive">
                                <!-- Table with stripped rows -->
                                <table class="table table-striped">
                                    <?php foreach ($sub_menu as $usm) : ?>
                                        <form method="POST" action="<?php echo base_url('admin/data_makanan/update_makanan_aksi') ?>" enctype="multipart/form-data">

                                            <div class="row">
                                                <div class="col-10">
                                                    <!-- <div class="form-group">
                                                    <label>Type Makanan</label>
                                                    <input type="hidden" name="id_makanan" value="<?php echo $usm->menu_id ?>">
                                                    <select name="kode_type" class="form-control">
                                                        <option value="<?php echo $usm->menu_id ?>"><?php echo $mk->kode_type ?></option>
                                                        <?php foreach ($type as $tp) : ?>
                                                            <option value="<?php echo $tp->kode_type ?>">
                                                                <?php echo $tp->nama_type ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                    <?php echo form_error('kode_type', '<div class="text-small text-danger">', '</div>') ?>
                                                </div> -->

                                                    <div class="form-group">
                                                        <label>Menu ID</label>
                                                        <input type="text" name="nama_makanan" class="form-control" value="<?php echo $usm->menu_id ?>">
                                                        <?php echo form_error('nama_makanan', '<div class="text-small text-danger">', '</div>') ?>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Title</label>
                                                        <input type="text" name="harga" class="form-control" value="<?php echo $usm->title ?>">
                                                        <?php echo form_error('harga', '<div class="text-small text-danger">', '</div>') ?>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Url</label>
                                                        <input type="text" name="url" class="form-control" value="<?php echo $usm->url ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Icon</label>
                                                        <input type="text" name="icon" class="form-control" value="<?php echo $usm->icon ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Status</label>
                                                        <select name="is_active" class="form-control">
                                                            <option <?php if ($usm->is_active == "1") {
                                                                        echo "selected='selected'";
                                                                    }
                                                                    echo $mk->status; ?> value="1">Active</option>
                                                            <option <?php if ($usm->is_active == "0") {
                                                                        echo "selected='selected'";
                                                                    }
                                                                    echo $mk->status; ?> value="0">Not Active</option>
                                                        </select>
                                                        <?php echo form_error('status', '<div class="text-small text-danger">', '</div>') ?>
                                                    </div>

                                                    <div class="col-9">
                                                        <button type="submit" class="btn btn-success mt-4">Simpan</button>
                                                        <button type="submit" class="btn btn-danger mt-4">Reset</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </form>
                                    <?php endforeach; ?>
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