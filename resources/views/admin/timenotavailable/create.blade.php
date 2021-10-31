@extends('_component.master_apps')
@section('title', 'Tambah Data Waktu Berhalangan')
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Tambah Data Time Not Available</h4>
            <small class="card-category ">Manajemen waktu berhalangan guru</small>
        </div>
        <div class="card-body">
            <form action="{{ route('timenotavailable.store') }}" method="POST">
                @csrf
                <div class="row mb-2">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Nama Guru</label>
                            <select name="nama_lengkap" class="form-control" id="hari">
                                <option value=""> Pilih Nama Guru </option>
                                @foreach ($guru as $guru => $data)
                                    <option value="{{ $guru }}">
                                    {{ $data }}
                                    </option>
                                @endforeach
                            </select>
                            @if($errors->has('nama_lengkap'))
                                <span
                                    class="text-danger">{{ $errors->first('nama_lengkap') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Hari</label>
                            <select name="hari" class="form-control" id="hari">
                                <option value=""> Pilih hari </option>
                                @foreach ($hari as $hari => $data)
                                    <option value="{{ $hari }}">
                                    {{ $data }}
                                    </option>
                                @endforeach
                            </select>
                            @if($errors->has('hari'))
                                <span
                                    class="text-danger">{{ $errors->first('hari') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Waktu</label>
                            <select name="waktu" class="form-control" id="waktu">
                                <option value=""> Pilih waktu </option>
                                @foreach ($waktu as $waktu => $data)
                                    <option value="{{ $waktu }}">
                                    {{ $data }}
                                    </option>
                                @endforeach
                            </select>
                            @if($errors->has('waktu'))
                                <span
                                    class="text-danger">{{ $errors->first('waktu') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success pull-right">
                    <i class="material-icons">save</i> Sim                                                  pan</button>
            </form>
        </div>
    </div>
</div>

@endsection
