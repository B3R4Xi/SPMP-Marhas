@extends('_component.master_apps')
@section('title', 'Daftar Data Guru')
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
            <a href="{{ route('daftarguru.create') }}" class="btn btn-info float-right">Tambah Data
                Guru</a>
        </div>
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title ">Daftar Guru</h4>
                <p class="card-category"> Tenaga Pengajar RPL</p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table text-center table-hover">
                        <thead class=" text-primary">
                            <th>No</th>
                            <th>Kode Guru</th>
                            <th>Nama Guru</th>
                            <th>Nomor Handphone</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <?php $no=1;?>
                            @foreach($guru as $data)
                                <tr id="sid{{ $data->id }}">
                                    <td>{{ ($guru->currentPage() - 1) * $guru->perPage() + $loop->iteration }}
                                    </td>
                                    <td class="kode_guru">{{ $data->kode_guru }}</td>
                                    <td class="nama_lengkap">{{ $data->nama_lengkap }}</td>
                                    <td class="no_hp">{{ $data->no_hp }}</td>
                                    <td class="text-center">
                                        <form
                                            action="{{ route('daftarguru.destroy',$data->id) }}"
                                            method="POST">
                                            @csrf
                                            @method('delete')
                                            <a href="{{ route('daftarguru.edit', $data->id) }}"
                                                class="btn btn-warning btn-fab btn-round">
                                                <i class="material-icons" style="color: white">edit</i>
                                            </a>
                                            <a href="#" class="btn btn-info btn-fab btn-round" id="detail2"
                                                data-toggle="modal" data-target="#modal-detail"
                                                data-nip="{{ $data->nip }}"
                                                data-kode_guru="{{ $data->kode_guru }}"
                                                data-nama_lengkap="{{ $data->nama_lengkap }}"
                                                data-no_hp="{{ $data->no_hp }}"
                                                data-email="{{ $data->email }}"
                                                data-alamat="{{ $data->alamat }}">
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
                    {{ $guru->links() }}
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
                    <h5 class="modal-title"><b>Detail Data Guru</b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">                 
                    <form class="mx-3">
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group">
                              <label class="bmd-label-floating" style="font-size: 12px">Nomor Induk Pengajar</label>
                              <span type="text" class="form-control" id="nip">
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <label class="bmd-label-floating" style="font-size: 12px">Kode Guru</label>
                              <span type="text" class="form-control" id="kode_guru">
                            </div>
                          </div>
                          <div class="col-md-5">
                            <div class="form-group">
                              <label class="bmd-label-floating" style="font-size: 12px">Nama Lengkap</label>
                              <span type="text" class="form-control" id="nama_lengkap">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="bmd-label-floating" style="font-size: 12px">Email</label>
                              <span type="email" class="form-control" id="email">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="bmd-label-floating" style="font-size: 12px">Nomer Handphone</label>
                              <span type="text" class="form-control" id="no_hp">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label class="bmd-label-floating" style="font-size: 12px">Alamat</label>
                              <span type="text" class="form-control" id="alamat">
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
