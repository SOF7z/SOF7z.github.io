<body></body>

<div class="modal fade" id="TambahRoleAccess" aria-hidden="true" aria-labelledby="TambahRoleAccessLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="TambahRoleAccessLabel">Tambah Role</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('role/role_access'); ?>" method="post">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Role</label>
                        <input type="text" class="form-control" name="role_id" id="role_id">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Nama Menu sidebar</label>
                        <input type="text" class="form-control" name="role_menu" id="role_menu">
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
                <li class="breadcrumb-item"><a href="<?= base_url('Role') ?>">Role</a></li>
                <li class="breadcrumb-item active">Role Access</li>
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

                    <a class="btn btn-success" data-bs-toggle="modal" href="#TambahRoleAccess" role="button">Tambah Role Akun</a>

                    <div class="table-responsive">

                        <!-- Table with stripped rows -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Role_ID</th>
                                    <th scope="col">Menu_ID</th>
                                    <th scope="col">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($user_role as $ua) : ?>
                                    <tr>
                                        <th scope="row"><?= $no++ ?>.</th>
                                        <td>
                                            <?php
                                            if ($ua->role_id <= "0") {
                                                echo "<span class='badge bg-dark mb-2'><i class='bi bi-stars me-1'> Devoloper </i></span>";
                                            } elseif ($ua->role_id == "1") {
                                                echo "<span class='badge bg-primary mb-2'><i class='bi bi-star-fill me-1'> Administrator </i></span>";
                                            } elseif ($ua->role_id == "2") {
                                                echo "<span class='badge bg-success mb-2'> user </span>";
                                            } elseif ($ua->role_id == "3") {
                                                echo "<span class='badge bg-primary mb-2'><i class='bi bi-star-fill me-1'> ? </i></span>";
                                            } else {
                                                echo "<span class='badge bg-primary mb-2'><i class='bi bi-star-fill me-1'> ? </i></span>";
                                            }
                                            ?>
                                        </td>
                                        <td><?php echo $ua->menu_id ?></td>
                                        <td>
                                            <button type="button" class="btn btn-primary"><i class="bi bi-pencil-square"></i></button>
                                            <!-- <button type="button" class="btn btn-secondary">Secondary</button>
                                            <button type="button" class="btn btn-success">Success</button> -->
                                            <a href="<?php echo base_url('role/delete_role_access/') . $ua->id ?>" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a>
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
                        <div class="btn-group" role="group" class="" aria-label="Basic mixed styles example">
                            <Center>
                                <a button type="button" class="btn btn-danger mb-2" href="<?= base_url('Role') ?>">KEMBALI</a>
                            </Center>
                        </div>
                        <nav aria-label="...">
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <span class="page-link">Previous</span>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active" aria-current="page">
                                    <span class="page-link">2</span>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

</main><!-- End #main -->

</body>

</html>