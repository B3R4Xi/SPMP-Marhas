<script src="{{ asset('template') }}/assets/js/core/jquery.min.js"></script>
<script src="{{ asset('template') }}/assets/js/core/popper.min.js"></script>
<script src="{{ asset('template') }}/assets/js/core/bootstrap-material-design.min.js"></script>
<script src="{{ asset('template') }}/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!-- Plugin for the momentJs  -->
<script src="{{ asset('template') }}/assets/js/plugins/moment.min.js"></script>
<!--  Plugin for Sweet Alert -->
<script src="{{ asset('template') }}/assets/js/plugins/sweetalert2.js"></script>
<!-- Forms Validations Plugin -->
<script src="{{ asset('template') }}/assets/js/plugins/jquery.validate.min.js"></script>
<!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="{{ asset('template') }}/assets/js/plugins/jquery.bootstrap-wizard.js"></script>
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="{{ asset('template') }}/assets/js/plugins/bootstrap-selectpicker.js"></script>
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="{{ asset('template') }}/assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
{{-- <script src="{{ asset('template') }}/assets/js/plugins/jquery.dataTables.min.js"></script> --}}
<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="{{ asset('template') }}/assets/js/plugins/bootstrap-tagsinput.js"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{ asset('template') }}/assets/js/plugins/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="{{ asset('template') }}/assets/js/plugins/fullcalendar.min.js"></script>
<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
{{-- <script src="{{ asset('template') }}/assets/js/plugins/jquery-jvectormap.js"></script> --}}
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{ asset('template') }}/assets/js/plugins/nouislider.min.js"></script>
<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
<!-- Library for adding dinamically elements -->
<script src="{{ asset('template') }}/assets/js/plugins/arrive.min.js"></script>
<!-- Chartist JS -->
<script src="{{ asset('template') }}/assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="{{ asset('template') }}/assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('template') }}/assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
<script>
    $(document).ready(function () {
        $(document).on('click', '#detail', function () {
            var kodemapel = $(this).data('kode_mapel');
            var namamapel = $(this).data('nama_mapel');
            var tingkatmapel = $(this).data('tingkat_mapel');
            $('#kode_mapel').text(kodemapel);
            $('#nama_mapel').text(namamapel);
            $('#tingkat_mapel').text(tingkatmapel);
        })
    })
</script>

<script>
  function editMapel(id_mapel) 
  {
      $.get('/daftarmapel/'+id_mapel,function(data) {
          $("#id_mapel").val(data.id_mapel);
          $("#kode_mapel2").val(data.kode_mapel2);
          $("#nama_mapel2").val(data.nama_mapel2);
          $("#tingkat_mapel2").val(data.tingkat_mapel2);
          $("#update").modal('toggle');
      })
  }
</script>
