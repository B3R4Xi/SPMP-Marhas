@extends('_component.master_apps')
@section('title', 'Update Data Laboratorium')
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Update Data Laboratorium</h4>
            <small class="card-category ">Pastikan semua data tersisi dengan benar</small>
        </div>
        @foreach($lab as $data)
            <div class="card-body">
                <form action="{{route('lab.update',$data->id)}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">Kode Mata Pelajaran</label>
                                <input class="form-control" name="kode_lab" id="kode_lab" type="text"
                                    value="{{ $data->kode_lab }}">
                                @if($errors->has('kode_lab'))
                                    <span
                                        class="text-danger">{{ $errors->first('kode_lab') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">Nama Mata Pelajaran</label>
                                <input class="form-control" name="nama_lab" id="nama_lab" type="text"
                                    value="{{ $data->nama_lab }}">
                                @if($errors->has('nama_lab'))
                                    <span
                                        class="text-danger">{{ $errors->first('nama_lab') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">Telepon</label>
                                <input type="text" class="form-control" name="kapasitas"
                                    value="{{ $data->kapasitas }}">
                                @if($errors->has('kapasitas'))
                                    <span
                                        class="text-danger">{{ $errors->first('kapasitas') }}</span>
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
