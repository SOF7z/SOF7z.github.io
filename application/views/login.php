<script src="<?php echo base_url('assets/css/script.js') ?>"></script>

<body>


    <main>
        <div class="container">

            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="" class="logo d-flex align-items-center w-auto">
                                    <img src="<?= base_url('assets/img/logo.png'); ?>" alt="">
                                    <span class="d-none d-lg-block">SOF7z</span>
                                </a>
                            </div><!-- End Logo -->

                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Silahkan Login</h5>
                                        <p class="card-title text-center" style="color : blue" id="teks">
                                            <script src="<?php echo base_url('assets/css/script.js') ?>"></script>
                                        </p>
                                    </div>

                                    <?php echo $this->session->flashdata('pesan') ?>

                                    <form class="row g-3 needs-validation" novalidate method="post" action="<?= base_url('auth'); ?>">
                                        <div class="col-12">
                                            <label for="yourUsername" class="form-label">Email</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <input type="text" name="email" class="form-control" id="email" required>
                                                <div class="invalid-feedback">Isi Email kamu terlebih dahulu.</div>
                                                <!-- <?= form_error('email', '<div class="text-small text-danger">', '</div>') ?> -->
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="password" required>
                                            <div class="invalid-feedback">Pastikan passowrd kamu benar!</div>
                                            <!-- <?= form_error('passowrd', '<div class="text-small text-danger">', '</div>') ?> -->
                                        </div>

                                        <!-- <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                                                <label class="form-check-label" for="rememberMe">Remember me</label>
                                            </div>
                                        </div> -->

                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Login</button>
                                        </div>
                                        <div class="col-12">
                                            <p class="small mb-0">Kamu tidak punya akun? <a href="<?php echo base_url('auth/register') ?>">Buat disini!</a></p>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="credits">
                                <!-- All the links in the footer should remain intact. -->
                                <!-- You can delete the links only if you purchased the pro version. -->
                                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                                Lihat <a href="<?= base_url('profile') ?>">Profile Dev</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main><!-- End #main -->
</body>

</html>