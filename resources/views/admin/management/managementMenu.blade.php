@extends('_component.master_apps')
@section('title', 'Management')
@section('content')
<div class="container-fluid">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Management User</h4>
                            <p class="card-category">Tambah Data User Guru</p>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('management.store') }}" enctype="multipart/form-data" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Kode Guru</label>
                                            <select name="tm" class="form-control" id="tm">
                                            <option value=""> Pilih Kode Guru </option>
                                                {{-- @foreach ($tingkat_mapel as $tingkat_mapel => $data)
                                                    <option value="{{ $tingkat_mapel }}">
                                                    {{ $data }}
                                                    </option>
                                                @endforeach --}}
                                            </select>
                                            @if($errors->has('mapel'))
                                                <span
                                                    class="text-danger">{{ $errors->first('mapel') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Nama Guru</label>
                                            <select class="form-control" name="nama_guru" id="nama_guru">
                                                <option value="">Nama Guru</option>
                                                {{-- @foreach ($guru as $guru => $data)
                                                    <option value="{{ $guru }}">
                                                    {{ $data }}
                                                    </option>
                                                @endforeach --}}
                                            </select>
                                            @if($errors->has('nama_guru'))
                                                <span
                                                    class="text-danger">{{ $errors->first('nama_guru') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Email</label>
                                                <select class="form-control" name="email" id="email">
                                                <option value="">Email Guru</option>
                                                {{-- @foreach ($mapel as $mapel => $data)
                                                    <option value="{{ $data }}">
                                                    {{ $data }}
                                                    </option>
                                                @endforeach --}}
                                                </select>
                                            @if($errors->has('mapel'))
                                                <span
                                                    class="text-danger">{{ $errors->first('mapel') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Level</label>
                                            {{-- <input type="email" class="form-control" name="role" value="{{old('kelas')}}"> --}}
                                            <select class="form-control" name="role" id="role">
                                                {{-- <option value="">Pilih Kelas</option> --}}
                                                {{-- @foreach ($kelas as $kelas => $data)
                                                <option value="{{ $kelas }}">
                                                    {{ $data }}
                                                </option>
                                                @endforeach --}}
                                                <option>Pilih Level</option>
                                            </select>
                                            @if($errors->has('kelas'))
                                                <span
                                                    class="text-danger">{{ $errors->first('kelas') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Password</label>
                                            <input type="text" class="form-control" name="password" value="{{old('password')}}">
                                            @if($errors->has('password'))
                                                <span
                                                    class="text-danger">{{ $errors->first('password') }}</span>
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