<body>

    <main>
        <div class="container">

            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="https://sof7z.online" class="logo d-flex align-items-center w-auto">
                                    <img src="assets/img/logo.png" alt="">
                                    <span class="d-none d-lg-block">Bunda Shop & SOF7z</span>
                                </a>
                            </div><!-- End Logo -->

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Buat Akun</h5>
                                        <p class="text-center small">Silahkan isi data dibawah!</p>
                                    </div>

                                    <form class="row g-3 needs-validation" novalidate method="post" action="<?= base_url('auth/register') ?>">
                                        <div class="col-12">
                                            <label for="yourName" class="form-label">Nama Lengkap</label>
                                            <input type="text" name="name" class="form-control" id="name" placeholder="Nama Lengkap" value="<?php set_value('name'); ?>" required>
                                            <?php echo form_error('name', '<div class="text-small text-danger">', '</div>') ?>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourEmail" class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control" id="email" placeholder="example@sof7z.online" required>
                                            <?php echo form_error('email', '<div class="text-small text-danger">', '</div>') ?>
                                        </div>

                                        <div class="col-12">
                                            <div class="col-12">
                                                <label for="yourPassword" class="form-label">Password</label>
                                                <input type="password" name="password1" class="form-control" id="password1" placeholder="***" required>
                                                <?php echo form_error('password1', '<div class="text-small text-danger">', '</div>') ?>
                                            </div>
                                            <div class="col-12">
                                                <label for="yourPassword" class="form-label">Repeat Password</label>
                                                <input type="password" name="password2" class="form-control" id="password2" placeholder="***" required>
                                                <?php echo form_error('password2', '<div class="text-small text-danger">', '</div>') ?>
                                            </div>
                                        </div>

                                        <!-- <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                                                <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                                                <div class="invalid-feedback">You must agree before submitting.</div>
                                            </div>
                                        </div> -->

                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Buat Akun</button>
                                        </div>

                                        <div class="col-12">
                                            <p class="small mb-0">Akun sudah memiliki akun? <a href="<?php echo base_url('auth') ?>">Log in</a></p>
                                        </div>
                                    </form>

                                </div>
                            </div>

                            <div class="credits">
                                <!-- All the links in the footer should remain intact. -->
                                <!-- You can delete the links only if you purchased the pro version. -->
                                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                                Lihat <a href="https://sof7z.online/">Profile Dev</a>
                            </div>

                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->

</body>

</html>