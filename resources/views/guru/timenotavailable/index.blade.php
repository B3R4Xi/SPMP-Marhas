@extends('_component.master_apps')
@section('title', 'Daftar Waktu Tidak Tersedia Guru')
@section('content')    
<div class="container-fluid">
    @if(session('success'))
        <div class="container" style="overflow-x: auto;">
            <div class="alert alert-success">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="material-icons">close</i>
                </button>
            </div>
        </div>
    @endif
    @if(session('danger'))
    <div class="container" style="overflow-x: auto;">
        <div class="alert alert-danger">
            {{ session('danger') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="material-icons">close</i>
            </button>
        </div>
    </div>
    @endif
    <div class="float-right mb-5">
        <a href="{{ route('timenotavailable.create') }}" class="btn btn-success btn-lg btn-fab btn-round">
            <i class="material-icons">add</i>
        </a>
    </div>
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title ">Waktu Tidak Tersedia</h4>
            <p class="card-category"> Daftar Waktu Tidak Tersedia Guru</p>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table text-center table-hover">
                    <thead class=" text-primary">
                        <th>No</th>
                        <th>Nama Guru</th>
                        <th>Hari</th>
                        <th>Waktu</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <?php $no=1;?>
                        @foreach($timenotavailable as $data)
                        @if ($data->user->id == Auth::user()->id)    
                            <tr id="sid{{ $data->id }}">
                                <td>{{$no++}}</td>
                                <td class="guru">{{ $data->guru->nama_lengkap }}</td>
                                <td class="hari">{{ $data->hari->nama_hari }}</td>
                                <td class="range">{{ $data->waktu->range }}</td>
                                <td class="text-center">
                                    <form action="{{ route('timenotavailable.destroy',$data->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('delete')
                                        <a href="{{ route('timenotavailable.edit', $data->id) }}"
                                            class="btn btn-warning btn-fab btn-round">
                                            <i class="material-icons" style="color: white">edit</i>
                                        </a>
                                        <a href="#" class="btn btn-info btn-fab btn-round" id="detail6"
                                            data-toggle="modal" data-target="#modal-detail"
                                            data-kode_timenotavailable="{{ $data->kode_timenotavailable }}"
                                            data-hari="{{ $data->hari->nama_hari }}"
                                            data-range="{{ $data->waktu->range }}">
                                            <i class="material-icons">visibility</i></a>

                                        <button href="" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data ini?')"
                                            class="btn btn-danger btn-fab btn-round">
                                            <i class="material-icons" style="color: white">delete</i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
            <nav class="pagination justify-content-center">
            {{$timenotavailable->links()}}
            </nav>
        </div>
    </div>

    {{-- modal detail --}}
    <div class="modal fade" id="modal-detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><b>Detail</b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label class="bmd-label-floating">
                                <h6>Kode timenotavailable</h6>
                            </label>
                            <b><span type="text" class="form-control" id="kode_timenotavailable"></b>
                        </div>
                        <div class="form-group">
                            <label class="bmd-label-floating">
                                <h6>Hari</h6>
                            </label>
                            <b><span type="text" class="form-control" id="hari"></b>
                        </div>
                        <div class="form-group">
                            <label class="bmd-label-floating">
                                <h6>Range</h6>
                            </label>
                            <b><span type="text" class="form-control" id="range"></b>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection