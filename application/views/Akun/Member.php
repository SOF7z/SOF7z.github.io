<body>

</body>

<div class="modal fade" id="accoutn" aria-hidden="true" aria-labelledby="acountnToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="acountnToggleLabel">Tambah Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('akun'); ?>" method="post">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Nama Menu</label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="emai">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                    <div class="form grub">
                        <div class="row mb-3">
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck1" value="0" name="is_active" id="is_active" checked>
                                    <label class="form-check-label" for="is_active">
                                        Active?
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" type="sumbit">Buat</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="update" aria-hidden="true" aria-labelledby="updateLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateLabel">Tambah Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('akun/update'); ?>" method="post">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Nama Menu</label>
                        <input type="text" class="form-control" name="name" id="name" value="<?= $user['name']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="emai" value="<?= $user['name']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password" value="<?= $user['name']; ?>">
                    </div>
                    <div class="form grub">
                        <div class="row mb-3">
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck1" value="0" name="is_active" id="is_active" checked>
                                    <label class="form-check-label" for="is_active">
                                        Active?
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" type="sumbit">Buat</button>
            </div>
        </div>
    </div>
</div>






<main id="main" class="main">

    <div class="pagetitle">
        <h1>Account</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Home</a></li>
                <li class="breadcrumb-item active">Account</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Account Member</h5>

                    <?= form_error(
                        'menu',
                        '<div class="alert alert-danger bg-danger text-light alert-dismissible fade show" role="alert">',

                        '<button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>'
                    ); ?>

                    <!-- <?= form_error('menu', 'div class="alert alert-danger" role="alert">', '</div>'); ?> -->

                    <!-- <?= form_error(
                                'menu',
                                '<div class="alert alert-danger text-black alert-dismissible fade show " role="alert" >',
                                '</div>'
                            ); ?>

                    <?= form_error(
                        'menu',
                        '<div class="alert aalert-danger bg-danger text-light" role="alert">
                        Nama menu belum dibuat!
                      </div>'
                    ); ?> -->

                    <!-- $this->session->set_flashdata('pesan', '<div class="alert alert-success bg-success text-light alert-dismissible fade show" role="alert">
                        Menu berhasil dibuat!
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>');
                    redirect('menu'); -->
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif ?>

                    <!-- <?php echo $this->session->flashdata('pesan') ?> -->
                    <?php echo $this->session->flashdata('pesan') ?>
                    <a class="btn btn-success" data-bs-toggle="modal" href="#accoutn" role="button">Tambah Account</a>
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
                                        <th scope="col">name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Password</th>
                                        <th scope="col">aktifasi</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Pembuatan</th>
                                        <th scope="col">action</th>
                                    </tr>
                                </center>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($users as $u) : ?>
                                    <tr>
                                        <th scope="row"><?= $no++ ?>.</th>
                                        <td><?php echo $u->name ?></td>
                                        <td><?php echo $u->email ?></td>
                                        <td><?php echo $u->password ?></td>
                                        <td><?php
                                            if ($u->is_active <= "0") {
                                                echo "<span class='badge bg-warning text-black'><i class='bi bi-stars me-1'> Not Active </i></span>";
                                            } elseif ($u->is_active == "1") {
                                                echo "<span class='badge bg-primary'><i class='bi bi-star me-1'> Active </i></span>";
                                            }
                                            ?>
                                        </td>

                                        <td><?php
                                            if ($u->role_id <= "0") {
                                                echo "<span class='badge bg-dark'><i class='bi bi-stars me-1'> Devoloper </i></span>";
                                            } elseif ($u->role_id == "1") {
                                                echo "<span class='badge bg-primary'><i class='bi bi-star me-1'> admin </i></span>";
                                            } else {
                                                echo "<span class='badge bg-success'><i class='bi bi-check-circle me-1'> user </i></span>";
                                            }
                                            ?></td>
                                        <!-- <td><?php echo $u->date_created ?></td> -->
                                        <td><?php
                                            // $date_created = time();
                                            // $time = date('d-m-Y H:i:s', $date_created);

                                            // date_default_timezone_get('Asia/Jakarta');
                                            // echo $time;

                                            // date_default_timezone_set('Asia/Jakarta');
                                            // echo $time;

                                            // round(microtime(true) * $date_created)

                                            // $timestamp = 1394003958;
                                            // echo (date("d-m-Y h:i:s", $timestamp));

                                            $date_created = time();
                                            echo (date("d-m-Y H:i:s", $date_created));
                                            ?>

                                        </td>
                                        <td>
                                            <a type="button" class="btn btn-primary" href="<?php echo base_url('Akun/User_Update/') . $u->id ?>"><i class="bi bi-pencil-square"></i></a>
                                            <!-- <button type="button" class="btn btn-secondary">Secondary</button>
                                            <button type="button" class="btn btn-success">Success</button> -->
                                            <a type="button" href="<?php echo base_url('akun/delete_user/') . $u->id ?>" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a>
                                            <!-- <button type="button" href="<?php echo base_url('menu/delete_menu/') . $u->id ?>" class="btn btn-outline-primary" disabled><i class="bi bi-trash3-fill">Disabled</a></i> -->
                                            <!-- <button type="button" class="btn btn-warning">Warning</button>
                                            <button type="button" class="btn btn-info">Info</button>
                                            <button type="button" class="btn btn-light">Light</button>
                                            <button type="button" class="btn btn-dark">Dark</button>
                                            <button type="button" class="btn btn-link">Link</button> -->
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->
                    </div>
                    <div class="btn-group" role="group" class="" aria-label="Basic mixed styles example">
                        <Center>
                            <a button type="button" class="btn btn-danger" href="<?= base_url('admin') ?>">KEMBALI</a>
                        </Center>
                    </div>
                </div>
            </div>



</main><!-- End #main -->

</body>

</html>