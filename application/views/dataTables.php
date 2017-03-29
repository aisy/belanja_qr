
<link rel="stylesheet" href="<?= base_url('ass/datatables/css/dataTables.bootstrap4.css') ?>">

<script src="<?= base_url('ass/datatables/js/jquery.dataTables.js') ?>" charset="utf-8"></script>
<script src="<?= base_url('ass/datatables/js/dataTables.bootstrap4.js') ?>" charset="utf-8"></script>

<script type="text/javascript">
$(document).ready(function() {
  $('#transaksi').DataTable();
  $('#barang').DataTable();
  $('#user').DataTable();
  $('#kasir').DataTable();
} );

</script>
