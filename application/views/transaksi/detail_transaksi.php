<main>
  <div class="col-md-8 offset-md-2">

    <!--Panel-->
    <div class="card text-center">
      <div class="card-header default-color-dark white-text">
        Detail Transaksi
      </div>
      <div class="card-block">
        <table class="table">
          <thead>
            <tr>
              <th>#</th>
              <th>Nama Barang</th>
              <th>Harga Barang</th>
              <th>Jumlah Barang</th>
            </tr>
          </thead>

          <tbody>
            <?php foreach ($transaksi as $key) { ?>
            <tr>
              <td><?= $key->id_transaksi ?></td>
              <td><?= $key->nama_barang ?></td>
              <td><?= $key->harga_barang ?></td>
              <td><?= $key->jumlah_barang ?></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>

      </div>
    </div>
    <!--/.Panel-->

</main>
