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
                            <h4 class="card-title">Tambah Data Guru</h4>
                            <p class="card-category">Pastikan data yang diinputkan benar</p>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('daftarguru.store') }}" enctype="multipart/form-data" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">NIP</label>
                                            <input type="text" class="form-control" name="nip" value="{{ old('nip')}}">
                                            @if($errors->has('nip'))
                                                <span
                                                    class="text-danger">{{ $errors->first('nip') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Kode Guru</label>
                                            <input type="text" class="form-control" name="kode_guru" value="{{old('kode_guru')}}">
                                            @if($errors->has('kode_guru'))
                                                <span
                                                    class="text-danger">{{ $errors->first('kode_guru') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Email</label>
                                            <input type="email" class="form-control" name="email" value="{{old('email')}}">
                                            @if($errors->has('email'))
                                                <span
                                                    class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Nama Lengkap</label>
                                            <input type="text" class="form-control" name="nama_lengkap" value="{{old('nama_lengkap')}}">
                                            @if($errors->has('nama_lengkap'))
                                                <span
                                                    class="text-danger">{{ $errors->first('nama_lengkap') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Alamat</label>
                                            <input type="text" class="form-control" name="alamat" value="{{old('alamat')}}">
                                            @if($errors->has('alamat'))
                                                <span
                                                    class="text-danger">{{ $errors->first('alamat') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Telepon</label>
                                            <input type="text" class="form-control" name="no_hp" value="{{old('no_hp')}}">
                                            @if($errors->has('no_hp'))
                                                <span
                                                    class="text-danger">{{ $errors->first('no_hp') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info pull-right">Tambah Data Guru</button>
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
