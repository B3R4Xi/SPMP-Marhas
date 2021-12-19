<script src="{{ asset('template') }}/assets/js/core/jquery.min.js"></script>
<script src="{{ asset('template') }}/assets/js/core/popper.min.js"></script>
<script src="{{ asset('template') }}/assets/js/core/bootstrap-material-design.min.js"></script>
<script src="{{ asset('template') }}/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!-- Plugin for the momentJs  -->
<script src="{{ asset('template') }}/assets/js/plugins/moment.min.js"></script>
<!--  Plugin for Sweet Alert -->
{{-- <script src="{{ asset('template') }}/assets/js/plugins/sweetalert2.js"></script> --}}
<!-- Forms Validations Plugin -->
{{-- <script src="{{ asset('template') }}/assets/js/plugins/jquery.validate.min.js"></script> --}}
<!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="{{ asset('template') }}/assets/js/plugins/jquery.bootstrap-wizard.js"></script>
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="{{ asset('template') }}/assets/js/plugins/bootstrap-selectpicker.js"></script>
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
{{-- <script src="{{ asset('template') }}/assets/js/plugins/bootstrap-datetimepicker.min.js"></script> --}}
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
{{-- <script src="{{ asset('template') }}/assets/js/plugins/jquery.dataTables.min.js"></script> --}}
<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
{{-- <script src="{{ asset('template') }}/assets/js/plugins/bootstrap-tagsinput.js"></script> --}}
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
{{-- <script src="{{ asset('template') }}/assets/js/plugins/jasny-bootstrap.min.js"></script> --}}
<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
{{-- <script src="{{ asset('template') }}/assets/js/plugins/fullcalendar.min.js"></script> --}}
<!-- Select JS -->
{{-- <script src="{{ asset('template') }}/assets/js/plugins/select.js"></script> --}}
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
{{-- <script src="{{ asset('template') }}/assets/js/plugins/nouislider.min.js"></script> --}}
<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script> --}}
<!-- Library for adding dinamically elements -->
{{-- <script src="{{ asset('template') }}/assets/js/plugins/arrive.min.js"></script> --}}
<!-- Chartist JS -->
{{-- <script src="{{ asset('template') }}/assets/js/plugins/chartist.min.js"></script> --}}
<!--  Notifications Plugin    -->
{{-- <script src="{{ asset('template') }}/assets/js/plugins/bootstrap-notify.js"></script> --}}
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('template') }}/assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
<!-- Time Picker -->
{{-- <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script> --}}

{{-- loading animate upload --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
<script type="text/javascript">
    $(function() {
         $(document).ready(function()
         {
            var bar = $('.bar');
            var percent = $('.percent');

      $('form').ajaxForm({
        beforeSend: function() {
            var percentVal = '0%';
            bar.width(percentVal)
            percent.html(percentVal);
        },
        uploadProgress: function(event, position, total, percentComplete) {
            var percentVal = percentComplete + '%';
            bar.width(percentVal)
            percent.html(percentVal);
        },
        complete: function(xhr) {
            alert('Jadwal Berhasil Diupload !');
            window.location.href = "/upload";
        }
      });
   }); 
 });
</script> --}}



<script>
    //DOM untuk PAGE MAPEL
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

    //DOM untuk PAGE GURU
    $(document).ready(function () {
        $(document).on('click', '#detail2', function () {
            var nip = $(this).data('nip');
            var kodeguru = $(this).data('kode_guru');
            var namalengkap = $(this).data('nama_lengkap');
            var nohp = $(this).data('no_hp');
            var email = $(this).data('email');
            var alamat = $(this).data('alamat');
            $('#nip').text(nip);
            $('#kode_guru').text(kodeguru);
            $('#nama_lengkap').text(namalengkap);
            $('#no_hp').text(nohp);
            $('#email').text(email);
            $('#alamat').text(alamat);
        })
    })


    //DOM untuk PAGE LAB
    $(document).ready(function () {
        $(document).on('click', '#detail3', function () {
            var kodelab = $(this).data('kode_lab');
            var namalab = $(this).data('nama_lab');
            var kapasitas = $(this).data('kapasitas');
            $('#kode_lab').text(kodelab);
            $('#nama_lab').text(namalab);
            $('#kapasitas').text(kapasitas);
        })
    })

    //DOM untuk PAGE KELAS
    $(document).ready(function () {
        $(document).on('click', '#detail4', function () {
            var kodekelas = $(this).data('kode_kelas');
            var namakelas = $(this).data('nama_kelas');
            $('#kode_kelas').text(kodekelas);
            $('#nama_kelas').text(namakelas);
        })
    })

    //DOM PAGE HARI
    $(document).ready(function(){
        $(document).on('click', '#detail5',function(){
            // var id = $(this).data('id');
            var kodehari = $(this).data('kode_hari');
            var namahari = $(this).data('nama_hari');
            // $('#id').text(id);
            $('#kode_hari').text(kodehari);
            $('#nama_hari').text(namahari);
        })
    })

        //DOM PAGE HARI & JAM
        $(document).ready(function(){
        $(document).on('click', '#detail6',function(){
            // var id = $(this).data('id');
            var kodetimedays = $(this).data('kode_timedays');
            var hari = $(this).data('hari');
            var range = $(this).data('range');
            // $('#id').text(id);
            $('#kode_timedays').text(kodetimedays);
            $('#hari').text(hari);
            $('#range').text(range);
        })
    })

            //DOM PAGE WAKTU
            $(document).ready(function(){
            $(document).on('click', '#detail7',function(){
            // var id = $(this).data('id');
            var kode_waktu = $(this).data('kode_waktu');
            var waktu_mulai = $(this).data('waktu_mulai');
            var waktu_selesai = $(this).data('waktu_selesai');
            var range = $(this).data('range');
            // $('#id').text(id);
            $('#kode_waktu').text(kode_waktu);
            $('#waktu_mulai').text(waktu_mulai);
            $('#waktu_selesai').text(waktu_selesai);
            $('#range').text(range);
        })
    })

            //DOM PAGE WAKTU
            $(document).ready(function(){
            $(document).on('click', '#detail8',function(){
            var mapel = $(this).data('mapel');
            var nama_lengkap = $(this).data('nama_lengkap');
            var kelas = $(this).data('kelas');
            var tahun_ajaran = $(this).data('tahun_ajaran');
            $('#mapel').text(mapel);
            $('#nama_lengkap').text(nama_lengkap);
            $('#kelas').text(kelas);
            $('#tahun_ajaran').text(tahun_ajaran);
        })
    })
</script>
<script type="text/javascript">
    $('#myAction').change(function(){
        var action =  $(this).val();
        window.location = action;
    });
</script>
<script>
    //AJAX FOR MAPEL
    jQuery(document).ready(function()
    {
        jQuery('select[name="tm"]').on('change', function(){
            var tmID = jQuery(this).val();
            if(tmID)
            {
                jQuery.ajax({
                    url         : '/teach/create/getMapel/' +tmID,
                    type        : "GET",
                    dataType    : "json",
                    success     : function(data){
                        console.log(data);
                        jQuery('select[name="mapel"]').empty();
                        jQuery.each(data, function(key,value){
                            $('select[name="mapel"]').append('<option value="'+key+'">'+value+'</option>');
                        });
                        jQuery('select[name="id_mapel"]').empty();
                        jQuery.each(data, function(key,value){
                            $('select[name="id_mapel"]').append('<option value="'+key+'">'+value+'</option>');
                        });
                    } 
                });
                jQuery.ajax({
                    url         : '/teach/create/getKelas/' +tmID,
                    type        : "GET",
                    dataType    : "json",
                    success     : function(data){
                        console.log(data);
                        jQuery('select[name="kelas_dept"]').empty();
                        jQuery.each(data, function(key,value){
                            $('select[name="kelas_dept"]').append('<option value="'+key+'">'+value+'</option>');
                        });
                        jQuery('select[name="id_kelas"]').empty();
                        jQuery.each(data, function(key,value){
                            $('select[name="id_kelas"]').append('<option value="'+key+'">'+value+'</option>');
                        });
                    } 
                });
                
            }else{
                $('select[name="mapel"]').empty();
                $('select[name="kelas_dept"]').empty();
                $('select[name="id_kelas"]').empty();
                $('select[name="id_mapel"]').empty();
            }
        });
    });

    //JQUERY GURU
    jQuery(document).ready(function()
    {
        jQuery('select[name="nama"]').on('change', function(){
            var grID = jQuery(this).val();
            if(grID)
            {
                jQuery.ajax({
                    url         : '/management/create/getGuru/' +grID,
                    type        : "GET",
                    dataType    : "json",
                    success     : function(data){
                        console.log(data.getGuru);
                        // jQuery('select[name="email"]').empty();
                            $('#nama_').val(data.getGuru.nama_lengkap);
                            $('#emailid_').val(data.getGuru.email);
                            $('#alamatid_').val(data.getGuru.alamat);
                            $('#nohpid_').val(data.getGuru.no_hp);
                    } 
                });
            }
        });
    });

    // $("#nama").change(function()
    // {
    //     var $value  = $(this).val();
    //     var $text   = $(this).children('option[value='+$value+']').html();

    //     $('input#nama_').val($text);
    // });

    // $("#email").change(function()
    // {
    //     var $value  = $(this).val();
    //     var $text   = $('select[name="email"]').children('option[value='+$value+']').html();

    //     $('input#email_').val($text);
    // });
    

    // $('#nama').change(function(){
    // var id = $(this).find(':selected')[0].id;
    // $('#nama_').val(id);
    // });
    // $('#formInput').submit(function(e){
    //     e.preventDefault();
    //     let nama    = $("input[name=nama]").val();
    //     let email   = $("input[name=email]").val();
    //     let alamat  = $("input[name=alamat]").val();
    //     let no_hp   = $("input[name=no_hp]").val();
    //     let password = $("input[name=password]").val();
    //     let _token   = $("input[name=_token]").val();

    //     $.ajax({
    //         url     :"/management/store",
    //         type    :"POST",
    //         data    :{
    //                 nama:nama,
    //                 email:email,
    //                 alamat:alamat,
    //                 no_hp:no_hp,
    //                 password:password,
    //                 _token:_token
    //         },
    //         success:function(respone){
    //             console.log(respone)
    //             $('#formInput')[0].reset();
    //         }
    //     })
    // });
    //AJAX FOR KELAS
    // jQuery(document).ready(function()
    // {
    //     jQuery('select[name="tm"]').on('change', function(){
    //         var tmID = jQuery(this).val();
    //         if(tmID)
    //         {
    //             jQuery.ajax({
    //                 url         : '/teach/create/getKelas/' +tmID,
    //                 type        : "GET",
    //                 dataType    : "json",
    //                 success     : function(data){
    //                     console.log(data);
    //                     jQuery('select[name="kelas_dept"]').empty();
    //                     jQuery.each(data, function(key,value){
    //                         $('select[name="kelas_dept"]').append('<option value="'+key+'">'+value+'</option>');
    //                     });
    //                 } 
    //             });
    //         }else{
    //             $('select[name="kelas_dept"]').empty();
    //         }
    //     });
    // });
</script>