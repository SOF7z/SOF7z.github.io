<body></body>

<div class="modal fade" id="TambahRole" aria-hidden="true" aria-labelledby="TambahRoleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="TambahRoleLabel">Tambah Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('role'); ?>" method="post">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Nama Role Baru</label>
                        <input type="text" class="form-control" name="role" id="role">
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
        <h1>Menu Management</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('home') ?>">Home</a></li>
                <li class="breadcrumb-item active">Role</li>
                <li class="breadcrumb-item"><a href="<?= base_url('Role/Role_Access') ?>">Role Access</a></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="row">
        <div class="col-lg-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Role Management</h5>

                    <?= form_error(
                        'menu',
                        '<div class="alert alert-danger bg-danger text-light alert-dismissible fade show" role="alert">',

                        '<button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>'
                    ); ?>

                    <?php echo $this->session->flashdata('pesan') ?>

                    <a class="btn btn-success" data-bs-toggle="modal" href="#TambahRole" role="button">Tambah Role</a>

                    <div class="table-responsive">

                        <!-- Table with stripped rows -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Menu</th>
                                    <th scope="col">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($user_role as $ur) : ?>
                                    <tr>
                                        <th scope="row"><?= $no++ ?>.</th>
                                        <td><?php echo $ur->role ?></td>
                                        <td>
                                            <button type="button" class="btn btn-primary"><i class="bi bi-pencil-square"></i></button>
                                            <!-- <button type="button" class="btn btn-secondary">Secondary</button>
                                            <button type="button" class="btn btn-success">Success</button> -->
                                            <a href="<?php echo base_url('menu/delete_menu/') . $ur->id ?>" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a>
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
                </div>
            </div>

</main><!-- End #main -->

</body>

</html>