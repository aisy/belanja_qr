<!-- JQuery -->
<script type="text/javascript" src="<?= base_url('ass/js/jquery-3.1.1.min.js') ?>"></script>

<!-- Tooltips -->
<script type="text/javascript" src="<?= base_url('ass/js/tether.min.js') ?>"></script>

<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="<?= base_url('ass/js/bootstrap.min.js') ?>"></script>

<!-- MDB core JavaScript -->
<script type="text/javascript" src="<?= base_url('ass/js/mdb.js') ?>"></script>

<script>
// SideNav init
$(".button-collapse").sideNav();
var el = document.querySelector('.custom-scrollbar');
Ps.initialize(el);

$('#modal-register').on('shown.bs.modal', function () {
  // $('#myInput').focus();
});

$('.datepicker').pickadate({
  monthsFull: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
  format: 'yyyy-mm-dd',
  formatSubmit: 'yyyy/mm/dd',
  selectMonths: true, // Creates a dropdown to control month
  selectYears: 50, // Creates a dropdown of 50 years to control year
  min: [1961,0,1],
  max: [2017,7,14]
});
</script>

<script>
new WOW().init();
</script>

<script>
$(function() {
  var data = {
    labels: ["January", "February", "March", "April", "May", "June", "July"],
    datasets: [{
      label: "My First dataset",
      fillColor: "rgba(220,220,220,0.2)",
      strokeColor: "rgba(220,220,220,1)",
      pointColor: "rgba(220,220,220,1)",
      pointStrokeColor: "#fff",
      pointHighlightFill: "#fff",
      pointHighlightStroke: "rgba(220,220,220,1)",
      data: [65, 59, 80, 81, 56, 55, 40]
    }, {
      label: "My Second dataset",
      fillColor: "rgba(151,187,205,0.2)",
      strokeColor: "rgba(151,187,205,1)",
      pointColor: "rgba(151,187,205,1)",
      pointStrokeColor: "#fff",
      pointHighlightFill: "#fff",
      pointHighlightStroke: "rgba(151,187,205,1)",
      data: [28, 48, 40, 19, 86, 27, 90]
    }]
  };

  var option = {
    responsive: true,
  };

  // Chart-1
  var ctx = document.getElementById("myChart-1").getContext('2d');
  var myLineChart = new Chart(ctx).Line(data, option);

  // Chart-2
  var ctx = document.getElementById("myChart-2").getContext('2d');
  var myLineChart = new Chart(ctx).Line(data, option);

  // Chart-3
  var ctx = document.getElementById("myChart-3").getContext('2d');
  var myLineChart = new Chart(ctx).Line(data, option);
});
</script>
