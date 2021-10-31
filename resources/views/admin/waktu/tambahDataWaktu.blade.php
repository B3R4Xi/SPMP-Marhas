@extends('_component.master_apps')
@section('title', 'Tambah Data Waktu')
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Tambah Data waktu</h4>
            <small class="card-category ">Pastikan semua data tersisi dengan benar</small>
        </div>
        <div class="card-body">
            <form action="{{ route('waktu.store') }}" method="POST">
                @csrf
                <div class="row mb-2">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Kode Waktu</label>
                            <input class="form-control" name="kode_waktu" type="text">
                            @if($errors->has('kode_waktu'))
                                <span
                                    class="text-danger">{{ $errors->first('kode_waktu') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Waktu Mulai</label>
                            <input class="form-control" name="waktu_mulai" type="time">
                            @if($errors->has('waktu_mulai'))
                                <span
                                    class="text-danger">{{ $errors->first('waktu_mulai') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Waktu Selesai</label>
                            <input class="form-control" name="waktu_selesai" type="time">
                            @if($errors->has('waktu_selesai'))
                                <span
                                    class="text-danger">{{ $errors->first('waktu_selesai') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Jumlah Jam</label>
                            <input class="form-control" name="jumlah_jam" type="text">
                            @if($errors->has('jumlah_jam'))
                                <span
                                    class="text-danger">{{ $errors->first('jumlah_jam') }}</span>
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
