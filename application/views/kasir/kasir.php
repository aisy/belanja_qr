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
          </tr>
          <?php } ?>
        </tbody>
      </table>

    </div>


  </div>
</main>




<!--/Main layout-->
