@extends('_component.master_apps')
@section('title', 'Update Data Guru')
@section('content')
<div class="container-fluid">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Update Data Pengampu</h4>
                            <p class="card-category">Pastikan data yang diinputkan benar</p>
                        </div>
                        @foreach ($teach as $data)
                        <div class="card-body">
                            <form action="{{ route('teach.update' ,$data->id) }}" enctype="multipart/form-data" method="post">
                                @csrf
                                @method('POST')
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Tingkat Kelas</label>
                                            <select name="tm" class="form-control" id="tm" disabled>
                                            <option value=""> Pilih Tingkat </option>
                                                @foreach ($tingkat_mapel as $tingkat_mapel)
                                                    <option value="{{ $tingkat_mapel->id }}" {{ $tingkat_mapel->id == $data->id_tingkat ? 'selected' : ''}}>
                                                    {{ $tingkat_mapel->tingkat_mapel }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @if($errors->has('mapel'))
                                                <span
                                                    class="text-danger">{{ $errors->first('mapel') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Kelas</label>
                                            {{-- <input type="email" class="form-control" name="kelas" value="{{old('kelas')}}"> --}}
                                            <select class="form-control" name="id_kelas" id="id_kelas">
                                                <option value="">Pilih Kelas</option>
                                                @foreach ($kelas as $kls)
                                                <option value="{{ $kls->id }}" {{ $kls->id == $data->id_kelas ? 'selected' : '' }}>
                                                    {{ $kls->nama_kelas }}
                                                </option>
                                                @endforeach
                                            </select>
                                            @if($errors->has('id_kelas'))
                                                <span
                                                    class="text-danger">{{ $errors->first('id_kelas') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Mata Pelajaran</label>
                                            <select name="id_mapel" class="form-control" id="id_mapel">
                                            <option value="" disabled selected> Pilih Mata Pelajaran </option>
                                                @foreach ($mapel as $mp)
                                                    <option value="{{ $mp->id_mapel }}" {{ $mp->id_mapel == $data->id_mapel ? 'selected' : ''}}>
                                                        {{ $mp->nama_mapel }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @if($errors->has('id_mapel'))
                                                <span
                                                    class="text-danger">{{ $errors->first('id_mapel') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Nama Guru</label>
                                            <select class="form-control" name="id_guru" id="id_guru">
                                                <option value="">Pilih Guru</option>
                                                @foreach ($guru as $guru)
                                                    <option value="{{ $guru->id }}" {{ $guru->id == $data->id_guru ? 'selected' : ''}}>
                                                    {{ $guru->nama_lengkap }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @if($errors->has('id_guru'))
                                                <span
                                                    class="text-danger">{{ $errors->first('id_guru') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Tahun Ajaran</label>
                                            {{-- <input type="text" class="form-control" name="tahun_ajaran" value="{{$data->tahun_ajaran}}"> --}}
                                            <select class="select-text form-control"  name="tahun_ajaran">
                                                <option value="" disabled selected>{{ $data->tahun_ajaran }}</option>
                                                <option value="2021-2022">2021-2022</option>
                                                <option value="2022-2023">2022-2023</option>
                                                <option value="2024-2025">2024-2025</option>
                                                <option value="2025-2026">2025-2026</option>
                                                <option value="2027-2028">2027-2028</option>
                                            </select>
                                            @if($errors->has('tahun_ajaran'))
                                                <span
                                                    class="text-danger">{{ $errors->first('tahun_ajaran') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Update Data Pengampu</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
