@extends('_component.master_apps')
@section('title', 'Algoritma Genetika - Generate')
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
            <div class="col-md-4" style="padding-bottom: 3%;">
                <a class="btn btn-info btn-block" href="{{ route('admin.genetic.result', $id) }}">
                    <span class="glyphicon glyphicon-download">
                    </span>
                    Export Excel Data Ini
                </a>
            </div>
            <div class="col-md-4" style="padding-bottom: 3%;">
                @if(!empty($data_kromosom))
                    <select class="form-control select2" id="myAction">
                    @foreach ($data_kromosom as $key => $kromosom)
                        <option value="{{ $key+1 }}"
                        @if ($id == ($key+1))
                            selected="selected">
                        @else
                            >
                        @endif
                                @if ($kromosom['value_jadwals'] == 1)
                                    Jadwal Terbaik
                                @else
                                    Jadwal {{ $key+1 }}
                                @endif
                        </li>
                        </option>
                    @endforeach
                    </select>
                @endif
            </div>
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
        </div>
    </div>
    <div class="card">
        <div class="card-header card-header-primary mt-4">
            <h4 class="card-title ">Jadwal Pelajaran</h4>
            <p class="card-category"> Hasil Generate Jadwal</p>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table text-center table-hover">
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
                        <?php $no=1;?>
                        @foreach($jadwals as $jd => $data)
                            {{-- <tr id="sid{{ $data->id }}"> --}}
                                <td>{{ $data->id }}</td>
                                <td class="">{{ $data->teach->guru->nama_lengkap }}</td>
                                <td class="">{{ $data->teach->mapel->nama_mapel }}</td>
                                <td class="">{{ $data->teach->kelas->nama_kelas }}</td>
                                {{-- <?php echo json_encode($data->kelas);exit;?> --}}
                                <td class="">{{ $data->hari->nama_hari }}</td>
                                <td class="">{{ $data->waktu->range }}</td>
                                <td class="">{{ $data->lab->nama_lab }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <nav class="pagination justify-content-center">
            {{$jadwals->links()}}
            </nav>
        </div>
    </div>
</div>
@endsection
