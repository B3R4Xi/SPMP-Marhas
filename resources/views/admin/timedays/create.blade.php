@extends('_component.master_apps')
@section('title', 'Tambah Data timedays')
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Tambah Data Timedays</h4>
            <small class="card-category ">Manajemen waktu, pastikan semua data tersisi dengan benar</small>
        </div>
        <div class="card-body">
            <form action="{{ route('timedays.store') }}" method="POST">
                @csrf
                <div class="row mb-2">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Kode timedays</label>
                            <input class="form-control" name="kode_timedays" type="text">
                            @if($errors->has('kode_timedays'))
                                <span
                                    class="text-danger">{{ $errors->first('kode_timedays') }}</span>
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
                    <i class="material-icons">save</i> Simpan</button>
            </form>
        </div>
    </div>
</div>

@endsection
