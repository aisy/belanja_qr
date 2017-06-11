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
          <th>Gambar</th>
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
        <?php $i=1; foreach ($barang as $key) { ?>
          <tr>
            <td><?= $i ?></td>
            <td><?= $key->nama_barang ?></td>
            <td>
              <img src="https://api.qrserver.com/v1/create-qr-code/?data=<?= base_url('barang/get_json/').$key->id_barang ?>&amp;size=100x100" alt="" title="" />
            </td>
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
          <?php $i++; } ?>
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
          <form class="" action="<?= base_url('barang/tambah') ?>" method="post" enctype="multipart/form-data">

            <div class="modal-body">
              <div class="md-form">
                <input name="nama_barang" type="text" id="nama_barang" class="form-control">
                <label for="nama_barang">Nama Barang</label>
              </div>

              <div class="md-form">
                <input name="distributor" type="text" id="distributor" class="form-control">
                <label for="distributor">Distributor</label>
              </div>

              <div class="md-form">
                <input name="masa_berlaku" type="text" id="masa_berlaku" class="form-control datepicker">
                <label for="masa_berlaku">Masa Berlaku</label>
              </div>

              <div class="md-form">
                <input name="tanggal_masuk_barang" type="text" id="tanggal_masuk" class="form-control datepicker">
                <label for="tanggal_masuk">Tanggal Masuk</label>
              </div>

              <div class="form-inline form-group">
                <div class="md-form form-group">
                  <input name="berat" type="number" id="berat" class="form-control">
                  <label for="berat">Berat</label>
                </div>

                <div class="md-form form-group">
                  <select name="satuan" class="mdb-select">
                    <option value="" disabled selected>Satuan</option>
                    <option value="gram">Gram</option>
                    <option value="ml">Ml</option>
                    <option value="liter">Liter</option>
                  </select>
                </div>
              </div>

              <div class="md-form form-group">
                <input name="harga" type="number" id="harga" class="form-control">
                <label for="harga">Harga</label>
              </div>

              <div class="md-form">
                <input name="stok" type="number" id="stock" class="form-control">
                <label for="stock">Stok</label>
              </div>

              <div class="md-form">
                <div class="file-field">
                  <div class="btn btn-primary btn-sm">
                    <span>Choose file</span>
                    <input type="file" name="gambar-upload">
                  </div>
                  <div class="file-path-wrapper">
                    <input class="file-path validate" name="gambar" type="text" placeholder="Upload your file">
                  </div>
                </div>
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
