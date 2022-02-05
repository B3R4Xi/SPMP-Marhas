@extends('_component.master_apps')
@section('title', 'Update Users')
@section('content')
<div class="container-fluid">
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Management User</h4>
                    <p class="card-category">Update Data User Guru</p>
                </div>
                <div class="card-body">
                    @foreach ($users as $data)
                        <form action="{{ route('management.update', $data->id) }}" enctype="form-data" method="post" id="formInput">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="">Nama Lengkap</label>
                                        <select class="form-control" name="name" id="name">
                                            <option value="">Pilih Nama Guru</option>
                                            {{-- @foreach ($guru as $guru) --}}
                                                <option value="{{ $data->name }}" {{$data->id == $data->id ? 'selected' :''}}>
                                                    {{ $data->name }}
                                                </option>
                                            {{-- @endforeach --}}
                                            {{-- <input type="hidden" name="nama_" id="nama_" value="{{$data->name}}"/> --}}
                                        </select>
                                        @if($errors->has('name'))
                                                    <span class="text-danger">{{ $errors->first('name') }}</span>
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
                                        <input class="form-control" name="email" id="emailid_" readonly
                                        value="{{ $data->email }}"/>
                                        {{-- </input> --}}
                                        {{-- <input type="text" name="alamat_" id="emailid_" value=""/> --}}
                                        @if($errors->has('emailid_'))
                                                    <span class="text-danger">{{ $errors->first('emailid_') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="">Alamat</label>
                                        <input class="form-control" name="alamat" id="alamatid_" readonly
                                        value="{{ $data->alamat }}"/>
                                        {{-- <input type="text" name="alamat_" id="alamatid_" value=""/> --}}
                                        @if($errors->has('alamat_'))
                                                    <span class="text-danger">{{ $errors->first('alamat_') }}</span>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="">Nomor Handphone</label>
                                        <input class="form-control" name="no_hp" id="nohpid_" readonly value="{{ $data->no_hp }}"/>
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
                                        <input type="password" class="form-control">
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
                                        <select class="form-control" name="level_id" id="level_id">
                                            <option value="">Pilih Level</option>
                                            @foreach ($level as $lvl)
                                            <option value="{{ $lvl->id }}" {{$lvl->id == $data->level_id ? 'selected' : ''}}>
                                                {{ $lvl->level }}
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
                            <button type="submit" class="btn btn-primary pull-right">Update data</button>
                            <div class="clearfix"></div>
                        </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection