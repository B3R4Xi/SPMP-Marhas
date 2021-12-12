@extends('_component.master_apps')
@section('title', 'Tambah Users')
@section('content')
<div class="container-fluid">
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Management User</h4>
                    <p class="card-category">Tambah Data User Guru</p>
                </div>
                <div class="card-body">
                    <form action="{{ route('management.store') }}" enctype="form-data" method="post" id="formInput">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Nama Lengkap</label>
                                    <select class="form-control" name="nama" id="nama">
                                        <option value="">Pilih Nama Guru</option>
                                         @foreach ($guru as $guru => $dt)
                                            <option value="{{ $guru }}">
                                                {{ $dt }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <input type="hidden" name="nama_" id="nama_" value=""/>
                                    @if($errors->has('nama_'))
                                                <span class="text-danger">{{ $errors->first('nama_') }}</span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Email</label>
                                    <select class="form-control" name="email" id="email" disabled>
                                        @if($errors->has('email_'))
                                                <span class="text-danger">{{ $errors->first('email_') }}</span>
                                        @endif
                                    </select>
                                    <input type="hidden" name="email_" id="email_" value=""/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Alamat</label>
                                    <select class="form-control" name="alamat" id="alamat" disabled>
                                    </select>
                                    <input type="hidden" name="alamat_" id="alamat_" value=""/>
                                    @if($errors->has('alamat_'))
                                                <span class="text-danger">{{ $errors->first('alamat_') }}</span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Nomor Handphone</label>
                                    <select class="form-control" name="no_hp" id="no_hp" disabled>
                                    </select>
                                    <input type="hidden" name="no_hp_" id="no_hp_" value=""/>
                                    @if($errors->has('no_hp_'))
                                                <span class="text-danger">{{ $errors->first('no_hp_') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Password</label>
                                    <input type="password" class="form-control" name="password" value="{{old('password')}}">
                                    @if($errors->has('password'))
                                        <span
                                            class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Confirmed Password</label>
                                    <input type="password" class="form-control" name="conf-password">
                                    @if($errors->has('conf-password'))
                                        <span
                                            class="text-danger">{{ $errors->first('conf-password') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Level</label>
                                    <select class="form-control" name="level" id="level">
                                        <option value="">Pilih Level</option>
                                         @foreach ($level as $level => $dt)
                                        <option value="{{ $level }}">
                                            {{ $dt }}
                                        </option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('level'))
                                        <span
                                            class="text-danger">{{ $errors->first('level') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary pull-right">Tambah User</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection