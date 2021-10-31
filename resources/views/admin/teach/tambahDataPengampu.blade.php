@extends('_component.master_apps')
@section('title', 'Tambah Data Guru')
@section('content')
<div class="container-fluid">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Tambah Data Pengampu</h4>
                            <p class="card-category">Pastikan data yang diinputkan benar</p>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('teach.store') }}" enctype="multipart/form-data" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Tingkat Kelas</label>
                                            <select name="tm" class="form-control" id="tm">
                                            <option value=""> Pilih Tingkat </option>
                                                @foreach ($tingkat_mapel as $tingkat_mapel => $data)
                                                    <option value="{{ $tingkat_mapel }}">
                                                    {{ $data }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @if($errors->has('mapel'))
                                                <span
                                                    class="text-danger">{{ $errors->first('mapel') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Mata Pelajaran</label>
                                            <select name="mapel" class="form-control" id="mapel">
                                            <option value=""> Pilih Mata Pelajaran </option>
                                                @foreach ($mapel as $mapel => $data)
                                                    <option value="{{ $data }}">
                                                    {{ $data }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @if($errors->has('mapel'))
                                                <span
                                                    class="text-danger">{{ $errors->first('mapel') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Kelas</label>
                                            {{-- <input type="email" class="form-control" name="kelas" value="{{old('kelas')}}"> --}}
                                            <select class="form-control" name="kelas_dept" id="kelas_dept">
                                                {{-- <option value="">Pilih Kelas</option> --}}
                                                {{-- @foreach ($kelas as $kelas => $data)
                                                <option value="{{ $kelas }}">
                                                    {{ $data }}
                                                </option>
                                                @endforeach --}}
                                                <option>Kelas</option>
                                            </select>
                                            @if($errors->has('kelas'))
                                                <span
                                                    class="text-danger">{{ $errors->first('kelas') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Nama Guru</label>
                                            <select class="form-control" name="nama_guru" id="nama_guru">
                                                <option value="">Pilih Guru</option>
                                                @foreach ($guru as $guru => $data)
                                                    <option value="{{ $guru }}">
                                                    {{ $data }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @if($errors->has('nama_guru'))
                                                <span
                                                    class="text-danger">{{ $errors->first('nama_guru') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Tahun Ajaran</label>
                                            <input type="text" class="form-control" name="tahun_ajaran" value="{{old('tahun_ajaran')}}">
                                            @if($errors->has('tahun_ajaran'))
                                                <span
                                                    class="text-danger">{{ $errors->first('tahun_ajaran') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Tambah Data Pengampu</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection