
<link rel="stylesheet" href="<?= base_url('ass/datatables/css/dataTables.bootstrap4.css') ?>">

<script src="<?= base_url('ass/datatables/js/jquery.dataTables.js') ?>" charset="utf-8"></script>
<script src="<?= base_url('ass/datatables/js/dataTables.bootstrap4.js') ?>" charset="utf-8"></script>

<script type="text/javascript">
$(document).ready(function() {
  $('#transaksi').DataTable();
} );

	$(document).ready(function() {
  $('#barang').DataTable();
} );

$(document).ready(function() {
  $('#user').DataTable();
} );

</script>
