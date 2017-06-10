
<link rel="stylesheet" href="<?= base_url('ass/datatables/css/dataTables.bootstrap4.css') ?>">

<script src="<?= base_url('ass/datatables/js/jquery.dataTables.js') ?>" charset="utf-8"></script>
<script src="<?= base_url('ass/datatables/js/dataTables.bootstrap4.js') ?>" charset="utf-8"></script>

<script type="text/javascript">
$(document).ready(function() {
  $('#transaksi').DataTable({
    "order": [[ 0, "desc" ]]
  });
  $('#barang').DataTable();
  $('#user').DataTable();
  $('#kasir').DataTable();
} );

</script>
