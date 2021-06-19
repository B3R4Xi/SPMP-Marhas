@extends('_component.master_apps')
@section('title', 'Daftar Mata Pelajaran')
@section('content')
<div class="container-fluid">
    @if (session('success'))
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
                @if (session('success-update'))

                <div class="container">
                    <div class="alert alert-success">
                        {{ session('success-update') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="material-icons">close</i>
                        </button>
                    </div>
                </div>
                @endif
                <table class="table text-center table-shopping">
                    <thead class=" text-primary">
                        <th>NO</th>
                        <th>Kode Mapel</th>
                        <th>Nama Mata Pelajaran</th>
                        <th>Tingkat</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <?php $no=1;?>
                        @foreach ($mapel as $data)
                        <tr id="sid{{ $data->id_mapel }}">
                            <td>{{ $no++ }}</td>
                            <td class="kode_mapel">{{ $data->kode_mapel }}</td>
                            <td class="nama_mapel">{{ $data->nama_mapel }}</td>
                            <td class="tingkat_mapel">{{ $data->tingkat_mapel }}</td>
                            <td class="text-center">
                                <form action="{{ route('admin.delete',$data->id_mapel) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <a href="{{ route('admin.edit', $data->id_mapel) }}"
                                        class="btn btn-warning btn-fab btn-round">
                                        <i class="material-icons" style="color: white">edit</i>
                                    </a>
                                    <a href="#" class="btn btn-info btn-fab btn-round" id="detail" data-toggle="modal"
                                        data-target="#modal-detail" data-kode_mapel="{{ $data->kode_mapel }}"
                                        data-nama_mapel="{{ $data->nama_mapel }}"
                                        data-tingkat_mapel="{{  $data->tingkat_mapel }}">
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

{{-- modal edit --}}
@foreach ($mapel as $data)
<div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><b>Edit Mata Pelajaran</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action{{ route('admin.edit',$data->id_mapel) }}="" method="POST" id="editForm">
                @csrf
                <input type="hidden" id="id_mapel" name="id_mapel" />
                <div class="modal-body">
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">Kode Mata Pelajaran</label>
                                <input class="form-control" id="kode_mapel2" type="text"
                                    value="{{ $data->kode_mapel }}" />
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">Nama Mata Pelajaran</label>
                                <input class="form-control" id="nama_mapel2" type="text"
                                    value="{{ $data->nama_mapel }}" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">Tingkat</label>
                                <input class="form-control" id="tingkat_mapel2" type="text"
                                    value="{{ $data->tingkat_mapel}}" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success" data-dismiss="modal">Update</button>
                </div>
            </form>

        </div>
    </div>
</div>
@endforeach
@endsection
