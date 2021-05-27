@extends('_component.master_apps')
@section('title', 'Daftar Mata Pelajaran')
@section('content')    
<div class="container-fluid">
    <div class="float-right mb-5">
        <a href="{{ url('/tambahDataMapel') }}" class="btn btn-success btn-lg btn-fab btn-round">
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
                <tr>         
                  <td>{{ $no++ }}</td>
                  <td>{{ $data->kode_mapel }}</td>
                  <td>{{ $data->nama_mapel }}</td>
                  <td>{{ $data->tingkat_mapel }}</td>
                  <td class="text-center">
                    <a href="#" class="btn btn-warning btn-fab btn-round ">
                        <i class="material-icons ">edit</i>
                    </a>
                    <a href="#" class="btn btn-danger btn-fab btn-round">
                        <i class="material-icons">delete</i>
                    </a>
                    <a href="#" class="btn btn-info btn-fab btn-round" 
                    id="detail"
                    data-toggle="modal" 
                    data-target="#modal-detail"
                    data-kode_mapel="{{ $data->kode_mapel }}"
                    data-nama_mapel="{{ $data->nama_mapel }}"
                    data-tingkat_mapel="{{  $data->tingkat_mapel }}">
                      <i class="material-icons">visibility</i>
                  </a>
                  </td>
                </tr>
                  @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modal-detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                  <label class="bmd-label-floating"><h6>Kode Mata Pelajaran</h6></label>
                  <b><span type="text" class="form-control"  id="kode_mapel"></b>
                </div>
                <div class="form-group">
                  <label class="bmd-label-floating" ><h6>Nama Mata Pelajaran</h6></label>
                  <b><span type="text" class="form-control" id="nama_mapel"></b>
                </div>
                <div class="form-group">
                  <label class="bmd-label-floating" ><h6>Tingkat Mata Pelajaran</h6></label>
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

    
@endsection