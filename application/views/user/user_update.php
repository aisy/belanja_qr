<main>
  <div class="col-md-8 offset-md-2">
    <form class="" action="" method="post">

      <div class="modal-body">
        <div class="md-form">
          <input name="nama" type="text" id="nama" class="form-control" value="<?= $update->nama ?>">
          <label for="nama">Nama Lengkap</label>
        </div>

        <div class="md-form">
          <textarea type="text" name="alamat" id="alamat" class="md-textarea"><?= $update->alamat ?></textarea>
          <label for="alamat">Alamat</label>
        </div>

        <div class="md-form">
          <input name="ttl" type="text" id="ttl" class="form-control datepicker" value="<?= $update->ttl ?>">
          <label for="ttl">Tanggal Lahir</label>
        </div>

        <div class="md-form">
          <input name="no_hp" type="number" id="no_hp" class="form-control" value="<?= $update->no_hp ?>">
          <label for="no_hp">No. Hp</label>
        </div>

        <div class="md-form">
          <input name="no_ktp" type="number" id="no_ktp" class="form-control" value="<?= $update->no_ktp ?>">
          <label for="no_ktp">No. KTP</label>
        </div>

      </div>
      <!--Footer-->
      <div class="modal-footer">
        <button name="update" type="submit" class="btn btn-success btn-block">Ubah Data</button>
      </div>
    </div>
  </form>
</div>
</main>
