@extends('_component.master_apps')
@section('title', 'Update Data Waktu')
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Update Data Waktu</h4>
            <small class="card-category ">Pastikan semua data tersisi dengan benar</small>
        </div>
        @foreach($waktu as $data)
            <div class="card-body">
                <form action="{{route('waktu.update',$data->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">Kode Waktu</label>
                                <input class="form-control" name="kode_waktu" id="kode_waktu" type="text"
                                    value="{{ $data->kode_waktu }}">
                                @if($errors->has('kode_waktu'))
                                    <span
                                        class="text-danger">{{ $errors->first('kode_waktu') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">Waktu Mulai</label>
                                <input class="form-control" name="waktu_mulai" id="waktu_mulai" type="time"
                                    value="{{ $data->waktu_mulai }}">
                                @if($errors->has('waktu_mulai'))
                                    <span
                                        class="text-danger">{{ $errors->first('waktu_mulai') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">Waktu Selesai</label>
                                <input type="time" class="form-control" name="waktu_selesai"
                                    value="{{ $data->waktu_selesai }}">
                                @if($errors->has('waktu_selesai'))
                                    <span
                                        class="text-danger">{{ $errors->first('waktu_selesai') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Jumlah Jam</label>
                                <input class="form-control" name="jumlah_jam" type="text" value="{{ $data->jumlah_jam }}">
                                @if($errors->has('jumlah_jam'))
                                    <span
                                        class="text-danger">{{ $errors->first('jumlah_jam') }}</span>
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
