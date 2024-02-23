<main id="main" class="main">

  <div class="col-12">
    <div class="card recent-sales overflow-auto">
      <div class="card-body">
        <h5 class="card-title">Data Akun<span></span></h5>
        <a href="<?php echo base_url('admin/data_admin/tambah_admin') ?>" class="btn btn-sm btn-primary">Tambah Data Guru </a>
        <a href="<?php echo base_url('admin/data_customer/tambah_customer') ?>" class="btn btn-sm btn-success">Tambah Data Siswa </a>
        <a href="<?php echo base_url('admin/data_type/tambah_type') ?>" class="btn btn-sm btn-secondary">???</a>
        <a href="<?php echo base_url('admin/data_makanan/tambah_maknaan') ?>" style="color : black" class="btn btn-sm btn-info">??? </a>
        <a href="<?php echo base_url('admin/data_minuman/tambah_minuman') ?>" style="color : black" class="btn btn-sm btn-warning">??? </a>
      </div>
      <table class="table table-borderless datatable">
        <thead>
          <tr>
            <th>No</th>
            <th scope="col">Nama</th>
            <th scope="col">Username</th>
            <th scope="col">Alamat</th>
            <th scope="col">gender</th>
            <th scope="col">No Hp</th>
            <th scope="col">Password</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          foreach ($akun as $ak) : ?>
            <tr>
              <td>
                <h6><?php echo $no++ ?>.</h6>
              </td>
              <td>
                <h6><?php echo $ak->nama ?></h6>
              </td>
              <td>
                <h6><?php echo $ak->username ?></h6>
              </td>
              <td>
                <h6><?php echo $ak->alamat ?></h6>
              </td>
              <td>
                <h6><?php echo $ak->gender ?></h6>
              </td>
              <td>
                <h6><?php echo $ak->no_hp ?></h6>
              </td>
              <td>
                <h6><?php echo $ak->password ?></h6>
              </td>
              <td>
                <h5><?php
                    if ($ak->role_id <= "0") {
                      echo "<span class='badge bg-info'> Guru </span>";
                    } elseif ($ak->role_id == "1") {
                      echo "<span class='badge bg-primary'> Admin </span>";
                    } else {
                      echo "<span class='badge bg-success'> Siswa </span>";
                    }
                    ?>
                </h5>
              </td>
            <?php endforeach; ?>
            </tr>
        </tbody>
      </table>

    </div>

  </div>
  </div><!-- End Recent Sales -->


  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Active Table</h5>
      <p>Highlight a table row or cell by adding a <code>.table-active</code> class.</p>
      <div class="card recent-sales overflow-auto">
        <div class="card-body">
          <h5 class="card-title">Data Akun<span></span></h5>
          <a href="<?php echo base_url('admin/data_admin/tambah_admin') ?>" class="btn btn-sm btn-primary">Tambah Data Guru </a>
          <a href="<?php echo base_url('admin/data_customer/tambah_customer') ?>" class="btn btn-sm btn-success">Tambah Data Siswa </a>
          <a href="<?php echo base_url('admin/data_type/tambah_type') ?>" class="btn btn-sm btn-secondary">???</a>
          <a href="<?php echo base_url('admin/data_makanan/tambah_maknaan') ?>" style="color : black" class="btn btn-sm btn-info">??? </a>
          <a href="<?php echo base_url('admin/data_minuman/tambah_minuman') ?>" style="color : black" class="btn btn-sm btn-warning">??? </a>
        </div>
        <!-- Active Table -->
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">username</th>
              <th scope="col">aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($akun as $ak) : ?>
              <tr>
                <th scope="row"><?php echo $no++ ?>.</th>
                <td><?php echo $ak->nama ?></td>
                <td><?php echo $ak->username ?></td>
                <td>
                  <h5><?php
                      if ($ak->role <= "0") {
                        echo "<span class='badge bg-info'> Guru </span>";
                      } elseif ($ak->role == "1") {
                        echo "<span class='badge bg-primary'> Admin </span>";
                      } else {
                        echo "<span class='badge bg-success'> Siswa </span>";
                      }
                      ?>
                  </h5>
                </td>
              <?php endforeach; ?>
              </tr>
              </tr>
          </tbody>
        </table>
        <!-- End Active Table -->

      </div>
    </div>




    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Data Nilai Siswa</h5>
        <p>Use contextual classes <code>.table-primary .table-secondary .table-success .table-danger .table-warning .table-info .table-light .table-dark</code> to color tables, table rows or individual cells.</p>
        <!-- Table Variants -->
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Class</th>
              <th scope="col">Heading</th>
              <th scope="col">Heading</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Default</th>
              <td>Cell</td>
              <td>Cell</td>
            </tr>

            <tr class="table-primary">
              <th scope="row">Primary</th>
              <td>Cell</td>
              <td>Cell</td>
            </tr>
            <tr class="table-secondary">
              <th scope="row">Secondary</th>
              <td>Cell</td>
              <td>Cell</td>
            </tr>
            <tr class="table-success">
              <th scope="row">Success</th>
              <td>Cell</td>
              <td>Cell</td>
            </tr>
            <tr class="table-danger">
              <th scope="row">Danger</th>
              <td>Cell</td>
              <td>Cell</td>
            </tr>
            <tr class="table-warning">
              <th scope="row">Warning</th>
              <td>Cell</td>
              <td>Cell</td>
            </tr>
            <tr class="table-info">
              <th scope="row">Info</th>
              <td>Cell</td>
              <td>Cell</td>
            </tr>
            <tr class="table-light">
              <th scope="row">Light</th>
              <td>Cell</td>
              <td>Cell</td>
            </tr>
            <tr class="table-dark">
              <th scope="row">Dark</th>
              <td>Cell</td>
              <td>Cell</td>
            </tr>
          </tbody>
        </table>
        <!-- End Table Variants -->
</main><!-- End #main -->