@extends('_component.master_apps')
@section('title', 'Tambah Data Mata Pelajaran')
@section('content')    
<div class="container-fluid">
    <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Tambah Data Mapel</h4>
          <small class="card-category ">Pastikan semua data tersisi dengan benar</small>
        </div>
        <div class="card-body">
          <form>
            <div class="row mb-2">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="bmd-label-floating">Kode Mata Pelajaran</label>
                  <input type="text" class="form-control" >
                </div>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="bmd-label-floating">Nama Mata Pelajaran</label>
                  <input type="text" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="bmd-label-floating">Tingkat</label>
                  <input type="text" class="form-control">
                </div>
              </div>
            </div>
            <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#modalSave">
                <i class="material-icons">save</i>  Simpan</button>
          </form>
        </div>
      </div>
    {{-- modal --}}
    <div class="modal fade" id="modalSave" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Peringatan !</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Apakah data yang anda input sudah benar, dan akan menyimpannya?
            </div>
            <div class="modal-footer">
              <a type="button" class="btn btn-secondary" data-dismiss="modal">Batal</a>
              <a type="button" class="btn btn-success" href="{{ url('/daftarmapel') }}">Simpan Data</a>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection