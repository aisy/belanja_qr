<main>
  <div class="col-md-8 offset-md-2">
    <form class="" action=" " method="post">

      <div class="modal-body">
        <div class="md-form">
          <input name="nama_barang" type="text" id="form2" class="form-control" value="<?= $barang->nama_barang ?>">
          <label for="form2">Nama Barang</label>
        </div>

        <div class="md-form">
          <input name="distributor" type="text" id="form2" class="form-control" value="<?= $barang->distributor ?>">
          <label for="form2">Distributor</label>
        </div>

        <div class="md-form">
          <input name="masa_berlaku" type="text" id="masa_berlaku" class="form-control datepicker" value="<?= $barang->masa_berlaku ?>">
          <label for="masa_berlaku">Masa Berlaku</label>
        </div>

        <div class="md-form">
          <input name="tanggal_masuk_barang" type="text" id="tanggal_masuk" class="form-control datepicker" value="<?= $barang->tanggal_masuk_barang ?>">
          <label for="tanggal_masuk">Tanggal Masuk</label>
        </div>

        <div class="md-form">
          <input name="berat" type="number" id="form2" class="form-control" value="<?= $barang->berat ?>">
          <label for="form2">Berat</label>
        </div>

        <div class="md-form">
          <input name="harga" type="number" id="form2" class="form-control" value="<?= $barang->harga ?>">
          <label for="form2">Harga</label>
        </div>

        <div class="md-form">
          <input name="stok" type="number" id="form2" class="form-control" value="<?= $barang->stok ?>">
          <label for="form2">Stok</label>
        </div>

      <button name="ubah" type="submit" class="btn btn-success btn-block">Ubah Data</button>

    </form>
  </div>
</main>
