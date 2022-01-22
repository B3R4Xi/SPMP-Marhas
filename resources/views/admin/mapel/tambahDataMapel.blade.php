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
                    <div class="col-md-5">
                        <div class="form-group">
                            <label class="bmd-label-floating">Kode Mata Pelajaran</label>
                            <input class="form-control" name="kode_mapel" type="text" value="{{ old('kode_mapel') }}">
                            @if($errors->has('kode_mapel'))
                                <span
                                    class="text-danger">{{ $errors->first('kode_mapel') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label class="bmd-label-floating">Nama Mata Pelajaran</label>
                            <input class="form-control" name="nama_mapel" type="text" value="{{ old('nama_mapel') }}">
                            @if($errors->has('nama_mapel'))
                                <span
                                    class="text-danger">{{ $errors->first('nama_mapel') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                                    <label class="bmd-label-floating">Jumlah Jam</label>
                                    <input class="select-text form-control"  name="jumlah_jam" type="text">
                                @if($errors->has('jumlah_jam'))
                                    <span
                                        class="text-danger">{{ $errors->first('jumlah_jam') }}</span>
                                @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            {{-- <label class="bmd-label-floating">Tingkat</label>
                                 <input  class="form-control" name="tingkat_mapel" type="text">
                                  @if($errors->has('tingkat_mapel'))
                                  <span class="text-danger">{{ $errors->first('tingkat_mapel') }}</span>
                                  @endif--}}
                                    <label class="select-label">Tingkat</label>
                                    <select class="select-text form-control" name="tingkat_mapel_id">
                                        <option value="" disabled selected>Pilih tingkat</option>
                                        @foreach ($tingkat_mapel as $tm => $data)
                                        <option value="{{ $tm }}">{{ $data }}</option>
                                        @endforeach
                                    </select>
                                @if($errors->has('tingkat_mapel_id'))
                                    <span
                                        class="text-danger">{{ $errors->first('tingkat_mapel_id') }}</span>
                                @endif
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            {{-- <label class="bmd-label-floating">Tingkat</label>
                                 <input  class="form-control" name="tingkat_mapel" type="text">
                                  @if($errors->has('tingkat_mapel'))
                                  <span class="text-danger">{{ $errors->first('tingkat_mapel') }}</span>
                                  @endif--}}
                                    <label class="select-label">Semester</label>
                                    <select class="select-text form-control" name="semester_id">
                                        <option value="" disabled selected>Pilih Semester</option>
                                        @foreach ($semester as $semester => $data)
                                        <option value="{{ $semester }}">{{ $data }}</option>
                                        @endforeach
                                    </select>
                                @if($errors->has('semester_id'))
                                    <span
                                        class="text-danger">{{ $errors->first('semester_id') }}</span>
                                @endif
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            {{-- <label class="bmd-label-floating">Tingkat</label>
                                 <input  class="form-control" name="tingkat_mapel" type="text">
                                  @if($errors->has('tingkat_mapel'))
                                  <span class="text-danger">{{ $errors->first('tingkat_mapel') }}</span>
                                  @endif--}}
                                    <label class="select-label">Jenis Mapel</label>
                                    <select class="select-text form-control"  name="jenis_mapel_id">
                                        <option value="" disabled selected>Pilih</option>
                                        @foreach ($jenis_mapel as $jenis_mapel => $data)
                                        <option value="{{ $jenis_mapel }}">{{ $data }}</option>
                                        @endforeach
                                    </select>
                                @if($errors->has('jenis_mapel_id'))
                                    <span
                                        class="text-danger">{{ $errors->first('jenis_mapel_id') }}</span>
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
