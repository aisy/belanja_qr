<!--Main layout-->

<main>
  <div class="container-fluid">

    <table id="kasir" class="table table-striped table-hover" cellspacing="0" width="100%">
      <thead class="thead-inverse">
        <tr>
          <th>Id.Kasir</th>
          <th>Nama</th>
          <th>ttl</th>
          <th>alamat</th>
          <th>No.HP</th>
          <th>Username</th>
          <th>Password</th>
          <th>Pilihan</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($kasir as $key) { ?>
          <tr>
            <td><?= $key->id_kasir ?></td>
            <td><?= $key->nama ?></td>
            <td><?= $key->ttl ?></td>
            <td><?= $key->alamat ?></td>
            <td><?= $key->no_hp ?></td>
            <td><?= $key->username ?></td>
            <td><?= $key->password ?></td>
            <td>
              <div class="btn-group" data-toggle="buttons">
                <a href="" class="btn btn-sm btn-success btn-rounded btn-table waves-effect waves-light">
                  <i class="fa fa-check"></i>
                </a>
                <a href="" class="btn btn-sm btn-default btn-rounded btn-table waves-effect waves-light">
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
