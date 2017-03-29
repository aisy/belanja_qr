<!--Main layout-->

<main>
  <div class="container-fluid">

    <div class="text-xs-center">
      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-register">
        <i class="fa fa-plus-circle"></i> Tambah Member
      </button>
    </div>

    <table id="user" class="table table-striped table-hover" cellspacing="0" width="100%">
      <thead class="thead-inverse">
        <tr>
          <th>Id.User</th>
          <th>Nama</th>
          <th>alamat</th>
          <th>No.HP</th>
          <th>No.KTP</th>
          <th>Username</th>
          <th>Pilihan</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($user as $key) { ?>
          <tr>
            <td><?= $key->id_user ?></td>
            <td><?= $key->nama ?></td>
            <td><?= $key->alamat ?></td>
            <td><?= $key->no_hp ?></td>
            <td><?= $key->no_ktp ?></td>
            <td><?= $key->username ?></td>
            <td>
              <a href="" class="btn btn-sm btn-success btn-rounded btn-table waves-effect waves-light">
                <i class="fa fa-check"></i>
              </a>
              <a href="" class="btn btn-sm btn-default btn-rounded btn-table waves-effect waves-light">
                <i class="fa fa-list"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>

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
              <h3 class="w-100"><i class="fa fa-plus-circle"></i> Tambah Member</h3>
            </div>
            <!--Body-->
            <form class="" action="<?= base_url('user/tambah') ?>" method="post">

              <div class="modal-body">
                <div class="md-form">
                  <input name="nama" type="text" id="nama" class="form-control">
                  <label for="nama">Nama Lengkap</label>
                </div>

                <div class="md-form">
                  <textarea type="text" name="alamat" id="alamat" class="md-textarea"></textarea>
                  <label for="alamat">Alamat</label>
                </div>

                <div class="md-form">
                  <input name="ttl" type="text" id="ttl" class="form-control datepicker">
                  <label for="ttl">Tanggal Lahir</label>
                </div>

                <div class="md-form">
                  <input name="no_hp" type="number" id="no_hp" class="form-control">
                  <label for="no_hp">No. Hp</label>
                </div>

                <div class="md-form">
                  <input name="no_ktp" type="number" id="no_ktp" class="form-control">
                  <label for="no_ktp">No. KTP</label>
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


  </div>
</main>




<!--/Main layout-->
