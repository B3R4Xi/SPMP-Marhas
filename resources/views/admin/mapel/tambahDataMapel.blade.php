@extends('_component.master_apps')
@section('title', 'Tambah Data Mata Pelajaran')
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Tambah Data Mapel</h4>
            <small class="card-category ">Pastikan semua data tersisi dengan benar</small>
        </div>
        <div class="card-body">
            <form action="/daftarmapel/insert" method="POST">
                @csrf
                <div class="row mb-2">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Kode Mata Pelajaran</label>
                            <input class="form-control" name="kode_mapel" type="text">
                            @if($errors->has('kode_mapel'))
                                <span
                                    class="text-danger">{{ $errors->first('kode_mapel') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Nama Mata Pelajaran</label>
                            <input class="form-control" name="nama_mapel" type="text">
                            @if($errors->has('nama_mapel'))
                                <span
                                    class="text-danger">{{ $errors->first('nama_mapel') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            {{-- <label class="bmd-label-floating">Tingkat</label>
                                 <input  class="form-control" name="tingkat_mapel" type="text">
                                  @if($errors->has('tingkat_mapel'))
                                  <span class="text-danger">{{ $errors->first('tingkat_mapel') }}</span>
                                  @endif--}}
                                  <div class="select">
                                    <select class="select-text" required name="tingkat_mapel">
                                        <option value="" disabled selected></option>
                                        <option value="X RPL">X RPL</option>
                                        <option value="XI RPL">XI RPL</option>
                                        <option value="XII RPL">XII RPL</option>
                                    </select>
                                    <span class="select-highlight"></span>
                                    <span class="select-bar"></span>
                                    <label class="select-label">Pilih Tingkat</label>
                                </div>
                                @if($errors->has('tingkat_mapel'))
                                    <span
                                        class="text-danger">{{ $errors->first('tingkat_mapel') }}</span>
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
