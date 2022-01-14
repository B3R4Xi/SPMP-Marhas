@extends('_component.master_apps')
@section('title', 'Algoritma Genetika - Result')
@section('content')
<div class="container-fluid">
    @if(session('success'))
        <div class="container" style="overflow-x: auto;">
            <div class="alert alert-success">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="material-icons">close</i>
                </button>
            </div>
        </div>
    @endif
    @if(session('danger'))
    <div class="container" style="overflow-x: auto;">
        <div class="alert alert-danger">
            {{ session('danger') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="material-icons">close</i>
            </button>
        </div>
    </div>
    @endif
    <div class="card">
        <div class="card-body">
            <div class="alert alert-success alert-dismissable">
                <button aria-hidden="true" class="close" data-dismiss="alert" type="button">
                    ×
                </button>
                <h4>
                    Nilai Fitness : 1 / 1 + ( 0 {{ $value_jadwal->value_process }} ) = {{ $value_jadwal->value }}
                    <br>
                </h4>
                <h4>
                    Crossover : {{ $crossover->value }} 
                    <br>
                </h4>
                <h4>
                    Mutasi : {{ $mutasi->value }}
                    <br>
                </h4>
            </div>
            <div class="row">
                <div class="col-md-4" style="padding-bottom: 3%; padding-left:3%;">
                    @if(!empty($data_kromosom))
                        <label class="bmd-label-floating">Pilih Jadwal</label>
                        <select class="form-control select2" id="myAction">
                        @foreach ($data_kromosom as $key => $kromosom)
                            <option value="{{ $key+1 }}"
                            @if ($id == ($key+1))
                                selected="selected">
                            @else
                                >
                            @endif
                                    {{-- @if ($kromosom['value_jadwals'] == 1)
                                        Jadwal Terbaik
                                    @else --}}
                                        Jadwal {{ $key+1 }}
                                    {{-- @endif --}}
                            </li>
                            </option>
                        @endforeach
                        </select>
                    @endif
                    @if(!empty($data_kromosom))
                <ul class="nav nav-tabs nav-justified">
                    @foreach ($data_kromosom as $key => $kromosom)
                        @if ($id == ($key+1))
                            <li class="bg-primary">
                        @else
                            <li>
                        @endif
                                <a href="{{ Route('admin.genetic.showClass', $key+1) }}">
                                    {{-- @if ($kromosom['value_jadwals'] == 1)
                                        Jadwal Terbaik
                                    @else --}}
                                        Lihat Jadwal {{ $key+1 }}
                                    {{-- @endif --}}
                                </a>
                            </li>
                    @endforeach
                </ul>
                @endif
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4" style="padding-bottom: 3%;">
                    <label class="bmd-label-floating">Export Jadwal Berdasarkan Type</label>
                    <a class="btn btn-info btn-sm" href="{{ route('admin.genetic.export', $id) }}">
                        <i class="material-icons">
                            file_download
                        </i>
                        Export Jadwal
                    </a>
                    <a class="btn btn-danger btn-sm" href="{{ route('admin.genetic.exportPDF', $id) }}" target="_blank">
                        <i class="material-icons">
                            file_download
                        </i>
                        Export Jadwal PDF
                    </a>
                    <label class="bmd-label-floating">Export Jadwal Semua Jenis Jadwal</label>
                    <a class="btn btn-info btn-sm" href="{{ route('admin.genetic.exportAll') }}">
                        <i class="material-icons">
                            file_download
                        </i>
                        Export Semua Jadwal
                    </a>
                    <a class="btn btn-danger btn-sm" href="{{ route('admin.genetic.exportAllPDF') }}">
                        <i class="material-icons">
                            file_download
                        </i>
                        Export Semua Jadwal PDF
                    </a>
                </div>

                <div class="col-md-4" style="padding-bottom: 3%;">
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header card-header-primary mt-4">
            <h4 class="card-title ">Jadwal Pelajaran</h4>
            <p class="card-category"> Hasil Generate Jadwal</p>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            @include('admin.genetic.table_result', $jadwals)
            </div>
            <nav class="pagination justify-content-center">
                {{$jadwals->links()}}
            </nav>
        </div>
    </div>
</div>
@endsection
