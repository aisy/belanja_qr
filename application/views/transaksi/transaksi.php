<!--Main layout-->

<main>
  <div class="container-fluid">

    <table id="transaksi" class="table table-striped table-hover" cellspacing="0" width="100%">
      <thead class="thead-inverse">
        <tr>
          <th>No.Transaksi</th>
          <th>Id User</th>
          <th>Nomor Antrian</th>
          <th>Status Trasaksi</th>
          <th>Total Harga</th>
          <th>Pilihan</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($transaksi as $key) { ?>
          <tr>
            <td><?= $key->id_transaksi ?></td>
            <td><?= $key->id_user ?></td>
            <td><?= $key->no_antrian ?></td>
            <td><?= $key->status_transaksi ?></td>
            <td>Rp. <?= $key->total_harga ?></td>
            <td>
              <div class="btn-group">
                <a href="<?= base_url('Transaksi/confirm/'.$key->id_transaksi) ?>" class="btn btn-sm btn-success btn-rounded btn-table waves-effect waves-light">
                  <i class="fa fa-check"></i>
                </a>
                <a href="<?= base_url('Transaksi/detail/'.$key->id_transaksi) ?>" class="btn btn-sm btn-default btn-rounded btn-table waves-effect waves-light">
                  <i class="fa fa-list"></i>
                </a>
              </div>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>

    </div>


  </div>
</main>




<!--/Main layout-->
