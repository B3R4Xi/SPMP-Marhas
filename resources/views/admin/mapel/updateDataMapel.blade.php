@extends('_component.master_apps')
@section('title', 'Update Data Mata Pelajaran')
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Update Data Mapel</h4>
            <small class="card-category ">Pastikan semua data tersisi dengan benar</small>
        </div>
        @foreach($mapel as $data)
            <div class="card-body">
                <form action="/daftarmapel/update/{{ $data->id_mapel }}" method="POST">
                    @csrf
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">Kode Mata Pelajaran</label>
                                <input class="form-control" name="kode_mapel" id="kode_mapel" type="text"
                                    value="{{ $data->kode_mapel }}">
                                @if($errors->has('kode_mapel'))
                                    <span
                                        class="text-danger">{{ $errors->first('kode_mapel') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">Nama Mata Pelajaran</label>
                                <input class="form-control" name="nama_mapel" id="nama_mapel" type="text"
                                    value="{{ $data->nama_mapel }}">
                                @if($errors->has('nama_mapel'))
                                    <span
                                        class="text-danger">{{ $errors->first('nama_mapel') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {{-- <label class="bmd-label-floating">Tingkat</label>
                                     <input  class="form-control" name="tingkat_mapel" type="text">
                                      @if($errors->has('tingkat_mapel'))
                                      <span class="text-danger">{{ $errors->first('tingkat_mapel') }}</span>
                                      @endif--}}
                                      <div class="select">
                                        <select class="select-text" required name="tingkat_mapel">
                                            <option value="X RPL">X RPL</option>
                                            <option value="XI RPL">XI RPL</option>
                                            <option value="XII RPL">XII RPL</option>
                                        </select>
                                        <span class="select-highlight"></span>
                                        <span class="select-bar"></span>
                                        <label class="select-label">Pilih Tingkat</label>
                                    </div>
                                    @if($errors->has('tingkat_mapel'))
                                        <span
                                            class="text-danger">{{ $errors->first('tingkat_mapel') }}</span>
                                    @endif
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success pull-right">
                        <i class="material-icons">save</i> Update</button>
                </form>
            </div>
        @endforeach
    </div>
</div>
@endsection




{{-- modal
            <div class="modal fade" id="modalSave" tabindex="-1" role="dialog"  aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-success">Simpan Data</button>
                  </div>
                </div>
              </div>
 </div> --}}
