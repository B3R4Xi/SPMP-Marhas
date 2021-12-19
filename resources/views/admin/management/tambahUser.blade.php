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
                                    <label class="">Nama Lengkap</label>
                                    <select class="form-control" name="nama" id="nama">
                                        <option value="">Pilih Nama Guru</option>
                                         @foreach ($guru as $guru => $dt)
                                            <option value="{{ $guru }}">
                                                {{ $dt }}
                                            </option>
                                        @endforeach
                                        <input type="hidden" name="nama_" id="nama_" value=""/>
                                    </select>
                                    @if($errors->has('nama_'))
                                                <span class="text-danger">{{ $errors->first('nama_') }}</span>
                                    @endif
                                </div>
                            </div>
                            
                            {{-- <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Email</label>
                                    <select class="form-control" name="email" id="email" disabled>
                                    </select>
                                        @if($errors->has('email_'))
                                                <span class="text-danger">{{ $errors->first('email_') }}</span>
                                        @endif
                                    <input class="form-control" type="text" name="email_" id="email" value="" readonly/>
                                </div>
                            </div> --}}
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="">Email</label>
                                    <input class="form-control" name="email" id="emailid_" readonly>
                                    {{-- </input> --}}
                                    {{-- <input type="text" name="alamat_" id="emailid_" value=""/> --}}
                                    @if($errors->has('alamat_'))
                                                <span class="text-danger">{{ $errors->first('alamat_') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="">Alamat</label>
                                    <input class="form-control" name="alamat" id="alamatid_" readonly/>
                                    {{-- <input type="text" name="alamat_" id="alamatid_" value=""/> --}}
                                    @if($errors->has('alamat_'))
                                                <span class="text-danger">{{ $errors->first('alamat_') }}</span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="">Nomor Handphone</label>
                                    <input class="form-control" name="no_hp" id="nohpid_" readonly>
                                    {{-- </input> --}}
                                    {{-- <input type="text" name="no_hp_" id="nohpid_" value=""/> --}}
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