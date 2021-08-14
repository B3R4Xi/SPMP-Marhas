@extends('_component.master_apps')
@section('title', 'Tambah Data Kelas')
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Tambah Data Kelas</h4>
            <small class="card-category ">Pastikan semua data tersisi dengan benar</small>
        </div>
        <div class="card-body">
            <form action="{{ route('kelas.store') }}" method="POST">
                @csrf
                <div class="row mb-2">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Kode Ruangan Lab</label>
                            <input class="form-control" name="kode_kelas" type="text">
                            @if($errors->has('kode_kelas'))
                                <span
                                    class="text-danger">{{ $errors->first('kode_kelas') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Nama Kelas</label>
                            <input class="form-control" name="nama_kelas" type="text">
                            @if($errors->has('nama_kelas'))
                                <span
                                    class="text-danger">{{ $errors->first('nama_kelas') }}</span>
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
