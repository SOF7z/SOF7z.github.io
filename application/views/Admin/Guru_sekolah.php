<main id="main" class="main">

  <div class="col-12">
    <div class="card recent-sales overflow-auto">
      <div class="card-body">
        <h5 class="card-title">Data Akun<span></span></h5>
        <a href="<?php echo base_url('pageadmin/data_admin/tambah_admin') ?>" class="btn btn-sm btn-primary">Tambah Data Guru </a>
        <a href="<?php echo base_url('admin/data_customer/tambah_customer') ?>" class="btn btn-sm btn-success">Tambah Data Siswa </a>
        <a href="<?php echo base_url('admin/data_type/tambah_type') ?>" class="btn btn-sm btn-secondary">???</a>
        <a href="<?php echo base_url('admin/data_makanan/tambah_maknaan') ?>" style="color : black" class="btn btn-sm btn-info">??? </a>
        <a href="<?php echo base_url('admin/data_minuman/tambah_minuman') ?>" style="color : black" class="btn btn-sm btn-warning">??? </a>
      </div>
      <table class="table table-borderless datatable">
        <thead>
          <tr>
            <th>No</th>
            <th scope="col">ID Guru</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">kelas</th>
            <th scope="col">Jenis kelamin</th>
            <th scope="col">No Hp</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          foreach ($guru as $gr) : ?>
            <tr>
              <td>
                <h6><?php echo $no++ ?>.</h6>
              </td>
              <td>
                <h6><?php echo $gr->id_guru ?></h6>
              </td>
              <td>
                <h6><?php echo $gr->nama ?></h6>
              </td>
              <td>
                <h6><?php echo $gr->alamat ?></h6>
              </td>
              <td>
                <h6><?php echo $gr->kelas ?></h6>
              </td>
              <td>
                <h6><?php echo $gr->gender ?></h6>
              </td>
              <td>
                <h6><?php echo $gr->no_hp ?></h6>
              </td>
              <td>
                <h5><?php
                    if ($gr->status <= "0") {
                      echo "<span class='badge bg-info'> Dosen </span>";
                    } elseif ($gr->status == "1") {
                      echo "<span class='badge bg-success'> Guru </span>";
                    } else {
                      echo "<span class='badge bg-warning'> Pelajar </span>";
                    }
                    ?>
                </h5>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>

    </div>

  </div>
  </div><!-- End Recent Sales -->

</main><!-- End #main -->