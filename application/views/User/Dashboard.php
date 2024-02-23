<!DOCTYPE html>
<html lang="en">


<body>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>My Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= base_url('home') ?>">Home</a></li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->



    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" alt="Profile" class="rounded-circle">
              <h2><?= $user['name']; ?></h2>
              <h3><?= $user['job']; ?></h3>
              <div class="social-links mt-2">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
              <div class="table-responsive">
                <div class="text-center">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3973.2986894504816!2d119.45897908465577!3d-5.21568316365998!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee16d4d7d03c1%3A0xc5dd56b8b2539cc1!2sWarung%20Dg.Kanang!5e0!3m2!1sen!2sus!4v1699769376788!5m2!1sen!2sus" width="450" height="290px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Settings</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">About</h5>
                  <p class="small fst-italic"><?= $user['about']; ?></p>

                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                    <div class="col-lg-9 col-md-8"><?= $user['name']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Agama</div>
                    <div class="col-lg-9 col-md-8"><?= $user['agama']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Negara</div>
                    <div class="col-lg-9 col-md-8"><?= $user['negara']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Job</div>
                    <div class="col-lg-9 col-md-8"><?= $user['job']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Alamat</div>
                    <div class="col-lg-9 col-md-8"><?= $user['alamat']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Phone</div>
                    <div class="col-lg-9 col-md-8"><?= $user['no_hp']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">KTP</div>
                    <div class="col-lg-9 col-md-8"></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Pendidikan Terakhir</div>
                    <div class="col-lg-9 col-md-8"></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">SKILL</div>
                    <div class="col-lg-9 col-md-8"></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Link</div>
                    <div class="col-lg-9 col-md-8"></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Discord</div>
                    <div class="col-lg-9 col-md-8"></div>
                  </div>

                </div>

                <?php echo $this->session->flashdata('pesan') ?>

                <div class="tab-pane fade profile-edit pt-2" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form method="post" action="<?= base_url('user/update_user'); ?>">
                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                      <div class="col-md-8 col-lg-9">
                        <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" alt="Profile">
                        <div class="pt-2">
                          <form action="upload.php" method="post" enctype="multipart/form-data">
                            Ubah Foto!
                            <input type="submit" value="Upload Image" name="submit" disabled>
                          </form>
                          <a input type="file" name="fileToUpload" id="fileToUpload" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                          <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                        </div>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="fullName" type="text" class="form-control" id="name" value="<?= $user['name']; ?>" disabled>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="about" type="text" class="form-control" id="about" value="<?= $user['about']; ?>" disabled>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-3 col-form-label">Agama</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="agama" type="text" class="form-control" id="agama" value="<?= $user['agama']; ?>" disabled>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Job" class="col-md-4 col-lg-3 col-form-label">Job</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="job" type="text" class="form-control" id="Job" value="<?= $user['job']; ?>" disabled>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label">Country</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="negara" type="text" class="form-control" id="negara" value="<?= $user['negara']; ?>" disabled>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="alamat" type="text" class="form-control" id="alamat" value="<?= $user['alamat']; ?>" disabled>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="no_hp" type="text" class="form-control" id="no_hp" value="<?= $user['no_hp']; ?>" disabled>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="Email" value="<?= $user['email']; ?>" disabled>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="twitter" type="text" class="form-control" id="Twitter" value="<?= $user['twitter']; ?>" disabled>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="facebook" type="text" class="form-control" id="Facebook" value="<?= $user['facebook']; ?>" disabled>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="instagram" type="text" class="form-control" id="Instagram" value="<?= $user['instagram']; ?>" disabled>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">Tiktok Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="tiktok" type="text" class="form-control" id="tiktok" value="<?= $user['tiktok']; ?>" disabled>
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary" data-bs-toggle="modal" href="#comingsoon">Changes</button>
                    </div>
                  </form>
                  <!-- End Profile Edit Form -->

                </div>

                <div class="tab-pane fade pt-3" id="profile-settings">

                  <!-- Settings Form -->
                  <form>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email Notifications</label>
                      <div class="col-md-8 col-lg-9">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="changesMade" checked>
                          <label class="form-check-label" for="changesMade">
                            Changes made to your account
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="newProducts" checked>
                          <label class="form-check-label" for="newProducts">
                            Information on new products and services
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="proOffers">
                          <label class="form-check-label" for="proOffers">
                            Marketing and promo offers
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled>
                          <label class="form-check-label" for="securityNotify">
                            Email Telah Diaktifasi
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="text-center">
                      <a type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#comingsoon">Save Changes</a>
                    </div>
                  </form><!-- End settings Form -->

                </div>

                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form>

                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="password" type="password" class="form-control" id="currentPassword" value="********" disabled>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="newpassword" type="password" class="form-control" id="newPassword" value="********" disabled>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="renewpassword" type="password" class="form-control" id="renewPassword" value="********" disabled>
                      </div>
                    </div>

                    <div class="text-center">
                      <a type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#comingsoon">Change Password</a>
                    </div>
                  </form><!-- End Change Password Form -->

                </div>

              </div><!-- End Bordered Tabs -->
            </div>
          </div>
        </div>
      </div>
      </div>
      </div>
    </section>

  </main><!-- End #main -->







</body>

</html>