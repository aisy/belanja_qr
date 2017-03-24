<!--Main layout-->

<main>
  <div class="container-fluid">

    <div class="text-xs-center">
      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-register">
        <i class="fa fa-plus-circle"></i> Tambah Barang
      </button>
    </div>

    <table id="barang" class="table table-striped table-hover" cellspacing="0" width="100%">
      <thead class="thead-inverse">
        <tr>
          <th>#</th>
          <th>Nama</th>
          <th>Distributor</th>
          <th>Masa Berlaku</th>
          <th>Tgl Masuk</th>
          <th>Berat</th>
          <th>Harga</th>
          <th>Stok</th>
          <th>Pilihan</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($barang as $key) { ?>
          <tr>
            <td><?= $key->id_barang ?></td>
            <td><?= $key->nama_barang ?></td>
            <td><?= $key->distributor ?></td>
            <td><?= $key->masa_berlaku ?></td>
            <td><?= $key->tanggal_masuk_barang?></td>
            <td><?= $key->berat ?></td>
            <td>Rp. <?= $key->harga ?></td>
            <td><?= $key->stok ?></td>
            <td>

                <a href="<?= base_url('barang/ubah_data/'.$key->id_barang) ?>" class="btn btn-sm btn-warning btn-rounded btn-table waves-effect waves-light">
                  <i class="fa fa-pencil"></i>
                </a>
                <a href="<?= base_url('barang/hapus_data/'.$key->id_barang) ?>" class="btn btn-sm btn-danger btn-rounded btn-table waves-effect waves-light">
                  <i class="fa fa-trash"></i>
                </a>

            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>

    </div>

    <!-- Modal Register -->
    <div class="modal fade modal-ext" id="modal-register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">
          <!--Header-->
          <div class="modal-header flex-column">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h3 class="w-100"><i class="fa fa-plus-circle"></i> Tambah Barang</h3>
          </div>
          <!--Body-->
          <form class="" action="<?= base_url('barang/tambah') ?>" method="post">

            <div class="modal-body">
              <div class="md-form">
                <input name="nama_barang" type="text" id="form2" class="form-control">
                <label for="form2">Nama Barang</label>
              </div>

              <div class="md-form">
                <input name="distributor" type="text" id="form2" class="form-control">
                <label for="form2">Distributor</label>
              </div>

              <div class="md-form">
                <input name="masa_berlaku" type="text" id="masa_berlaku" class="form-control datepicker">
                <label for="masa_berlaku">Masa Berlaku</label>
              </div>

              <div class="md-form">
                <input name="tanggal_masuk_barang" type="text" id="tanggal_masuk" class="form-control datepicker">
                <label for="tanggal_masuk">Tanggal Masuk</label>
              </div>

              <div class="md-form">
                <input name="berat" type="number" id="form2" class="form-control">
                <label for="form2">Berat</label>
              </div>

              <div class="md-form">
                <input name="harga" type="number" id="form2" class="form-control">
                <label for="form2">Harga</label>
              </div>

              <div class="md-form">
                <input name="stok" type="number" id="form2" class="form-control">
                <label for="form2">Stok</label>
              </div>

          </div>
          <!--Footer-->
          <div class="modal-footer">
            <button name="" type="submit" class="btn btn-success btn-block">Tambah Data</button>
          </div>
        </div>
        </form>
        <!--/.Content-->
      </div>
    </div>

  </div>
</main>




<!--/Main layout-->