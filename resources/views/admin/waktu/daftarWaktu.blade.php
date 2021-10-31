@extends('_component.master_apps')
@section('title', 'Daftar Waktu')
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
        <a href="{{ route('waktu.create') }}" class="btn btn-success btn-lg btn-fab btn-round">
            <i class="material-icons">add</i>
        </a>
    </div>
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title ">Waktu</h4>
            <p class="card-category"> Daftar waktu Produktif RPL</p>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table text-center table-hover">
                    <thead class=" text-primary">
                        <th>No</th>
                        <th>Kode Waktu</th>
                        <th>Waktu Mulai</th>
                        <th>Waktu Selesai</th>
                        <th>Range Waktu</th>
                        <th>Jumlah Jam Mata Pelajaran</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <?php $no=1;?>
                        @foreach($waktu as $data)
                            <tr id="sid{{ $data->id }}">
                                <td>{{($waktu->currentPage() - 1) * $waktu->perPage() + $loop->iteration}}</td>
                                <td class="kode_waktu">{{ $data->kode_waktu }}</td>
                                <td class="waktu_mulai">{{ $data->waktu_mulai }}</td>
                                <td class="waktu_selesai">{{ $data->waktu_selesai }}</td>
                                <td class="range">{{ $data->range }}</td>
                                <td class="range">{{ $data->jumlah_jam }}</td>
                                <td class="text-center">
                                    <form action="{{ route('waktu.destroy',$data->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('delete')
                                        <a href="{{ route('waktu.edit', $data->id) }}"
                                            class="btn btn-warning btn-fab btn-round">
                                            <i class="material-icons" style="color: white">edit</i>
                                        </a>
                                        <a href="#" class="btn btn-info btn-fab btn-round" id="detail7"
                                            data-toggle="modal" data-target="#modal-detail"
                                            data-kode_waktu="{{ $data->kode_waktu }}"
                                            data-waktu_mulai="{{ $data->waktu_mulai }}"
                                            data-waktu_selesai="{{ $data->waktu_selesai }}"
                                            data-range="{{ $data->range }}">
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
            {{$waktu->links()}}
            </nav>
        </div>
    </div>

    {{-- modal detail --}}
    <div class="modal fade" id="modal-detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><b>Detail Waktu</b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label class="bmd-label-floating">
                                <h6>Kode waktu</h6>
                            </label>
                            <b><span type="text" class="form-control" id="kode_waktu"></b>
                        </div>
                        <div class="form-group">
                            <label class="bmd-label-floating">
                                <h6>Waktu Mulai</h6>
                            </label>
                            <b><span type="text" class="form-control" id="waktu_mulai"></b>
                        </div>
                        <div class="form-group">
                            <label class="bmd-label-floating">
                                <h6>Waktu Selesai</h6>
                            </label>
                            <b><span type="text" class="form-control" id="waktu_selesai"></b>
                        </div>
                        <div class="form-group">
                            <label class="bmd-label-floating">
                                <h6>Range Waktu</h6>
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