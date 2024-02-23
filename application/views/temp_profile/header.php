<!-- ======= Header ======= -->
<header id="header">
  <div class="d-flex flex-column">


    <div class="profile">
      <img src="<?php echo base_url('assets/temp/img/sof7z.png') ?>" alt="" class="img-fluid rounded-circle">
      <h1 class="text-light"><a href="<?php echo base_url('dashboard/profile') ?>">SOF7z</a></h1>
      <div class="social-links mt-3 text-center">
        <a href="#" target="blank" class="twitter"><i class="bi bi-twitter-x"></i></a>
        <a href="https://www.facebook.com/fadligagah145/" target="blank" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/sof7z197_/?igshid=eG16aGJra2lpNG8z" target="blank" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.tiktok.com/@sof7z197_" target="blank" class="tiktok"><i class="bx bxl-tiktok"></i></a>
        <a href="https://wa.me/0895806614419" target="blank" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
        <a href="https://discord.gg/mXPuJMJ7" target="blank" class="discord"><i class="bx bxl-discord"></i></a>
      </div>
    </div>

    <div class="modal fade" id="pesan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Maaf akses ditolak..!</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Kamu tidak di beri izin!</div>
          <div class="modal-footer">
            <button class="btn btn-danger" type="tombol" data-dismiss="modal">Cancel</button>

          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="comingsoon" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="comingsoonLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="comingsoonLabel">COMING SOON!</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Mohon Maaf Masih Dalam Tahap Pengembangan!
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <nav id="navbar" class="nav-menu navbar">
      <ul>
        <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
        <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
        <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
        <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
        <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        <li><a href="<?= base_url('auth') ?>"><i class="bx bx-user"></i> <span>Login</span></a></li>

      </ul>
    </nav><!-- .nav-menu -->
  </div>
</header><!-- End Header -->