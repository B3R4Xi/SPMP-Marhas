@extends('_component.master_apps')
@section('title', 'Daftar Data Pengampu')
@section('content')
<div class="container-fluid">
    <div class="row">
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
        <div class="col-md-12 mb-5">
            <a href="{{ route('teach.create') }}" class="btn btn-info float-right">Tambah Data Pengampu</a>
        </div>
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title ">Pengampu</h4>
                <p class="card-category"> Daftar Guru Pengampu Mata Pelajaran</p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table text-center table-hover">
                        <thead class=" text-primary">
                            <th>No</th>
                            <th>Mata Pelajaran</th>
                            <th>Kelas</th>
                            <th>Nama Guru</th>
                            <th>Tahun Ajaran</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <?php $no=1;?>
                            @foreach($teach as $data)
                                <tr id="sid{{ $data->id }}">
                                    <td>{{ ($teach->currentPage() - 1) * $teach->perPage() + $loop->iteration }}
                                    </td>
                                    <td class="mapel">{{ $data->mapel->nama_mapel }}</td>
                                    <td class="kelas">{{ $data->kelas->nama_kelas }}</td>
                                    <td class="nama_lengkap">{{ $data->guru->nama_lengkap }}</td>
                                    <td class="tahun_ajaran">{{ $data->tahun_ajaran }}</td>
                                    <td class="text-center">
                                        <form
                                            action="{{ route('teach.destroy',$data->id) }}"
                                            method="POST">
                                            @csrf
                                            @method('delete')
                                            <a href="{{ route('teach.edit', $data->id) }}"
                                                class="btn btn-warning btn-fab btn-round">
                                                <i class="material-icons" style="color: white">edit</i>
                                            </a>
                                            <a href="#" class="btn btn-info btn-fab btn-round" id="detail8"
                                                data-toggle="modal" data-target="#modal-detail"
                                                data-mapel="{{ $data->mapel->nama_mapel }}"
                                                data-nama_lengkap="{{ $data->guru->nama_lengkap }}"
                                                data-kelas="{{ $data->kelas->nama_kelas }}"
                                                data-tahun_ajaran="{{ $data->tahun_ajaran }}">
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
                    {{ $teach->links() }}
                </nav>
            </div>
        </div>
    </div>
        {{-- modal detail --}}
        <div class="modal fade" id="modal-detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document" style="width: 550px">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><b>Detail Data Pengajaran</b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">                 
                    <form class="mx-3">
                        <div class="row">
                          <div class="col-md-5">
                            <div class="form-group">
                              <label class="bmd-label-floating" style="font-size: 12px">Mata Pelajaran</label>
                              <span type="text" class="form-control" id="mapel">
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <label class="bmd-label-floating" style="font-size: 12px">Kelas</label>
                              <span type="text" class="form-control" id="kelas">
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label class="bmd-label-floating" style="font-size: 12px">Nama Guru</label>
                              <span type="text" class="form-control" id="nama_lengkap">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label class="bmd-label-floating" style="font-size: 12px">Tahun Ajaran</label>
                              <span type="email" class="form-control" id="tahun_ajaran">
                            </div>
                          </div>
                        </div>
                        <div class="clearfix"></div>
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
