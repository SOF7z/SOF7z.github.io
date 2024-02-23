<body>

</body>

<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel">Tambah Sub Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('menu'); ?>" method="post">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Nama Menu</label>
                        <input type="text" class="form-control" name="menu" id="menu">
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

                    <?php echo $this->session->flashdata('pesan') ?>

                    <a class="btn btn-success" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Tambah Menu</a>
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
                                            <button type="button" class="btn btn-primary"><i class="bi bi-pencil-square"></i></button>
                                            <!-- <button type="button" class="btn btn-secondary">Secondary</button>
                                            <button type="button" class="btn btn-success">Success</button> -->
                                            <a href="<?php echo base_url('menu/delete_menu/') . $usm->id ?>" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a>
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
                            <a button type="button" class="btn btn-danger mb-2" href="<?= base_url('menu') ?>">KEMBALI</a>
                        </Center>
                    </div>
                </div>
            </div>



</main><!-- End #main -->

</body>

</html>