<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('template') }}/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('template') }}/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        @yield('title') | SPMP - Marhas
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"> --}}
    <!-- CSS Files -->
    <link href="{{ asset('template') }}/assets/css/material-dashboard.min.css?v=2.2.1" rel="stylesheet" />
    {{-- <link href="{{ asset('template') }}/assets/css/animateload.css" rel="stylesheet" /> --}}
    {{-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css"> --}}
    {{-- JS --}}
</head>

<body class="">
    <div class="wrapper ">
        {{-- Sidebar --}}
        @include('_component.sidebar')
        <div class="main-panel">
            <!-- Navbar -->
            @include('_component.navbar')
            <!-- End Navbar -->
            {{-- Content section --}}
            <style>
                .progress { position:relative; width:100%; height: 20px; }
                .bar      { background-color: #008000; width:0%; height:20px; }
                .percent { position:absolute; display:inline-block; left:49%; color: #7F98B2;}
            </style>
            <div class="container-fluid">
                {{-- notifikasi form validasi --}}
                @if ($errors->has('file'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('file') }}</strong>
                </span>
                @endif
            
                {{-- notifikasi sukses --}}
                @if ($sukses = Session::get('sukses'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{{ $sukses }}</strong>
                </div>
                @endif
            
                <button type="button" class="btn btn-primary mb-5" data-toggle="modal" data-target="#importExcel">
                    IMPORT JADWAL
                </button>
            
                <!-- Import Excel -->
                <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <form method="post" action="{{ route('upload.jadwal') }}" enctype="multipart/form-data">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Import Jadwal</h5>
                                </div>
                                <div class="modal-body">
                                    {{ csrf_field() }}
                                    <div class="form-group form-file-upload form-file-multiple">
                                        <input type="file" multiple="" class="inputFileHidden" name="file" required>
                                        <div class="input-group">
                                            <input type="text" class="form-control inputFileVisible" placeholder="Masukan file jadwal">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-fab btn-round btn-primary">
                                                    <i class="material-icons">attach_file</i>
                                                </button>
                                            </span>
                                            <div class="progress mt-4">
                                                <div class="bar"></div >
                                                <div class="percent">0%</div >
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Import</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <table class="table text-center table-hover table-bordered">
                    <thead class=" text-primary">
                        <th>No</th>
                        <th>Guru</th>
                        <th>Mata Pelajaran</th>
                        <th>Kelas</th>
                        <th>Hari</th>
                        <th>Waktu</th>
                        <th>Ruangan</th>
                    </thead>
                    <tbody>
                        {{-- {{ $no=1 }} --}}
                        @foreach($upload as $up)
                            <tr id="sid{{ $up->id }}">
                            <td>{{ $loop->iteration }}</td>
                            <td class="">{{ $up->pengajar}}</td>
                            <td class="">{{ $up->mata_pelajaran}}</td>
                            <td class="">{{ $up->kelas}}</td>
                            <td class="">{{ $up->hari}}</td>
                            <td class="">{{ $up->waktu}}</td>
                            <td class="">{{ $up->ruangan}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{-- footer --}}
            @include('_component.footer')
        </div>
    </div>
    {{-- plugin-sidebar --}}
    <!--   Core JS Files   -->
<script src="{{ asset('template') }}/assets/js/core/jquery.min.js"></script>
<script src="{{ asset('template') }}/assets/js/core/popper.min.js"></script>
<script src="{{ asset('template') }}/assets/js/core/bootstrap-material-design.min.js"></script>
<script src="{{ asset('template') }}/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<script src="{{ asset('template') }}/assets/js/plugins/moment.min.js"></script>
<script src="{{ asset('template') }}/assets/js/plugins/jquery.bootstrap-wizard.js"></script>
<script src="{{ asset('template') }}/assets/js/plugins/bootstrap-selectpicker.js"></script>
<script src="{{ asset('template') }}/assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>


{{-- loading animate upload --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
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
</script>
</body>

</html>
