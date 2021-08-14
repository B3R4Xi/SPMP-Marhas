@extends('_component.master_apps')
@section('title', 'Daftar Mata Pelajaran')
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
        <a href="/daftarmapel/add" class="btn btn-success btn-lg btn-fab btn-round">
            <i class="material-icons">add</i>
        </a>
    </div>
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title ">Mata Pelajaran</h4>
            <p class="card-category"> Daftar Mata Pelajaran Produktif RPL</p>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table text-center table-hover">
                    <thead class=" text-primary">
                        <th>No</th>
                        <th>Kode Mapel</th>
                        <th>Nama Mata Pelajaran</th>
                        <th>Tingkat</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <?php $no=1;?>
                        @foreach($mapel as $data)
                            <tr id="sid{{ $data->id_mapel }}">
                                <td>{{($mapel->currentPage() - 1) * $mapel->perPage() + $loop->iteration}}</td>
                                <td class="kode_mapel">{{ $data->kode_mapel }}</td>
                                <td class="nama_mapel">{{ $data->nama_mapel }}</td>
                                <td class="tingkat_mapel">{{ $data->tingkat_mapel }}</td>
                                <td class="text-center">
                                    <form action="{{ route('admin.delete',$data->id_mapel) }}"
                                        method="POST">
                                        @csrf
                                        @method('delete')
                                        <a href="{{ route('admin.edit', $data->id_mapel) }}"
                                            class="btn btn-warning btn-fab btn-round">
                                            <i class="material-icons" style="color: white">edit</i>
                                        </a>
                                        <a href="#" class="btn btn-info btn-fab btn-round" id="detail"
                                            data-toggle="modal" data-target="#modal-detail"
                                            data-kode_mapel="{{ $data->kode_mapel }}"
                                            data-nama_mapel="{{ $data->nama_mapel }}"
                                            data-tingkat_mapel="{{ $data->tingkat_mapel }}">
                                            <i class="material-icons">visibility</i></a>

                                        <button href="" onclick="return confirm('Yakin Hapus Data?')"
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
            {{$mapel->links()}}
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
                    <form class="mx-3">
                        <div class="form-group">
                            <label class="bmd-label-floating">
                                <h6>Kode Mata Pelajaran</h6>
                            </label>
                            <b><span type="text" class="form-control" id="kode_mapel"></b>
                        </div>
                        <div class="form-group">
                            <label class="bmd-label-floating">
                                <h6>Nama Mata Pelajaran</h6>
                            </label>
                            <b><span type="text" class="form-control" id="nama_mapel"></b>
                        </div>
                        <div class="form-group">
                            <label class="bmd-label-floating">
                                <h6>Tingkat Mata Pelajaran</h6>
                            </label>
                            <b><span type="text" class="form-control" id="tingkat_mapel"></b>
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
