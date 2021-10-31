@extends('_component.master_apps')
@section('title', 'Ruangan Laboratorium')
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
    <div class="float-right mb-5">
        <a href="{{ route('lab.create') }}" class="btn btn-success btn-lg btn-fab btn-round">
            <i class="material-icons">add</i>
        </a>
    </div>
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title ">Laboratorium</h4>
            <p class="card-category"> Daftar Ruangan Lab Produktif RPL</p>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table text-center table-hover">
                    <thead class=" text-primary">
                        <th>No</th>
                        <th>Kode Lab</th>
                        <th>Nama Laboratorium</th>
                        <th>Kapasitas Ruangan</th>
                        <th>Jenis Ruangan</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <?php $no=1;?>
                        @foreach($lab as $data)
                            <tr id="sid{{ $data->id }}">
                                <td>{{($lab->currentPage() - 1) * $lab->perPage() + $loop->iteration}}</td>
                                <td class="kode_lab">{{ $data->kode_lab }}</td>
                                <td class="nama_lab">{{ $data->nama_lab }}</td>
                                <td class="kapasitas">{{ $data->kapasitas }}</td>
                                <td class="jenis_lab">{{ $data->jenislab->jenis_mapel }}</td>
                                <td class="text-center">
                                    <form action="{{ route('lab.destroy',$data->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('delete')
                                        <a href="{{ route('lab.edit', $data->id) }}"
                                            class="btn btn-warning btn-fab btn-round">
                                            <i class="material-icons" style="color: white">edit</i>
                                        </a>
                                        <a href="#" class="btn btn-info btn-fab btn-round" id="detail3"
                                            data-toggle="modal" data-target="#modal-detail"
                                            data-kode_lab="{{ $data->kode_lab }}"
                                            data-nama_lab="{{ $data->nama_lab }}"
                                            data-kapasitas="{{ $data->kapasitas }}">
                                            <i class="material-icons">visibility</i></a>

                                        <button href="" onclick="return confirm('Beneran mau dihapus?')"
                                            class="btn btn-danger btn-fab btn-round">
                                            <i class="material-icons" style="color: white">delete</i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <nav class="pagination justify-content-center">
            {{$lab->links()}}
            </nav>
        </div>
    </div>

    {{-- modal detail --}}
    <div class="modal fade" id="modal-detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><b>Detail Mata Pelajaran</b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label class="bmd-label-floating">
                                <h6>Kode Lab</h6>
                            </label>
                            <b><span type="text" class="form-control" id="kode_lab"></b>
                        </div>
                        <div class="form-group">
                            <label class="bmd-label-floating">
                                <h6>Nama Laboratorium</h6>
                            </label>
                            <b><span type="text" class="form-control" id="nama_lab"></b>
                        </div>
                        <div class="form-group">
                            <label class="bmd-label-floating">
                                <h6>Kapasitas</h6>
                            </label>
                            <b><span type="text" class="form-control" id="kapasitas"></b>
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