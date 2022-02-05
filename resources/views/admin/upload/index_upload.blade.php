<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('template') }}/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('template') }}/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        @yield('title')Upload Jadwal | SPMP - Marhas
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <!-- CSS Files -->
    <link href="{{ asset('template') }}/assets/css/material-dashboard.min.css?v=2.2.1" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">
    @laravelPWA
</head>

<body class="">
    <div class="wrapper ">
        {{-- Sidebar --}}
        @include('_component.sidebar')
        <div class="main-panel">
            <!-- Navbar -->
            @include('_component.navbar')
            <div class="content">
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
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <button type="button" class="btn btn-primary mb-5" data-toggle="modal" data-target="#importExcel">
                                    IMPORT JADWAL
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Jadwal Pelajaran Produktif - RPL</h4>
                            <form action="{{ route('upload.truncate') }}" method="POST">
                            @csrf
                            @method('delete')
                                <button class="btn btn-danger" onclick="return confirm('Yakin Hapus Data?')">
                                    <i class="material-icons" style="color: white">delete</i>
                                Kosongkan Jadwal
                            </form>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table" id="tabel-data">
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
                        </div>
                        </div>
                    </div>
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
<script type="text/javascript">
	$(document).ready(function(){
		$('#tabel-data').DataTable({
      "language":{
        "url":"http://cdn.datatables.net/plug-ins/1.10.9/i18n/Indonesian.json",
      }
    });
	});
</script>
</body>

</html>
