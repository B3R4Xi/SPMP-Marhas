@extends('_component.master_apps')
@section('title', 'Management')
@section('content')
<div class="container-fluid">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9">
                    <div class="float-right mb-5">
                        <a href="{{ route('management.create') }}" class="btn btn-success btn-lg btn-fab btn-round">
                            <i class="material-icons">add</i>
                        </a>
                    </div>
                    @if(session('success'))
                    <div class="container " style="overflow-x: auto;"> 
                        <div class="alert alert-success">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="material-icons">close</i>
                            </button>
                        </div>
                    </div>
                    @endif
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Management User</h4>
                            <p class="card-category">Tambah Data User Guru</p>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover table-responsive">
                                <thead class=" text-primary text-center">
                                    <th>No</th>
                                    <th>Username</th>
                                    <th>Role</th>
                                    <th>Email</th>
                                    <th>Tanggal Daftar</th>
                                    <th>Tanggal Update</th>
                                    <th>Aksi</th>
                                </thead>
                                <tbody>
                                    <?php $no=1;?>
                                        @foreach ($users as $data)
                                        <tr id="sid{{ $data->id }}">
                                        <td>{{ ($users->currentPage() - 1) * $users->perPage() + $loop->iteration }}</td>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->level->level }}</td>
                                        <td>{{ $data->email }}</td>
                                        <td>{{ $data->created_at->format('d, M Y H:i') }}</td>
                                        <td>{{ $data->updated_at->diffForHumans() }}</td>
                                        <td>
                                            <form
                                                action="{{route('management.destroy', $data->id)}}"
                                                method="POST">
                                                @csrf
                                                @method('delete')
                                                <a href="{{route('management.edit', $data->id)}}"
                                                    class="btn btn-warning btn-fab btn-round">
                                                    <i class="material-icons" style="color: white">edit</i>
                                                </a>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection