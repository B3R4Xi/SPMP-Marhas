@extends('_component.master_apps')
@section('title', 'Tambah Data Ruangan Lab')
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Tambah Data Mapel</h4>
            <small class="card-category ">Pastikan semua data tersisi dengan benar</small>
        </div>
        <div class="card-body">
            <form action="{{ route('lab.store') }}" method="POST">
                @csrf
                <div class="row mb-2">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Kode Ruangan Lab</label>
                            <input class="form-control" name="kode_lab" type="text">
                            @if($errors->has('kode_lab'))
                                <span
                                    class="text-danger">{{ $errors->first('kode_lab') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Nama Ruangan Laboratorium</label>
                            <input class="form-control" name="nama_lab" type="text">
                            @if($errors->has('nama_lab'))
                                <span
                                    class="text-danger">{{ $errors->first('nama_lab') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Kapasitas</label>
                            <input type="text" class="form-control" name="kapasitas" value="{{old('kapasitas')}}">
                            @if($errors->has('kapasitas'))
                                <span
                                    class="text-danger">{{ $errors->first('kapasitas') }}</span>
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
