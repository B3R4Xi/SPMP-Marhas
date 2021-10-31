@extends('_component.master_apps')
@section('title', 'Update Data Kelas')
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Update Data Kelas</h4>
            <small class="card-category ">Pastikan semua data tersisi dengan benar</small>
        </div>
        @foreach($kelas as $data)
            <div class="card-body">
                <form action="{{route('kelas.update',$data->id)}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="select-label">Kode Kelas</label>
                                    <select class="select-text form-control" name="kode_kelas">
                                        <option value="" disabled selected>Pilih tingkat</option>
                                        @foreach ($tingkat_mapel as $tm)
                                        <option value="{{ $tm->id }}"{{ $tm->id == $data->kode_kelas ? 
                                    'selected' : ''}}>{{ $tm->tingkat_mapel }}</option>
                                        @endforeach
                                    </select>
                                @if($errors->has('kode_kelas'))
                                    <span
                                        class="text-danger">{{ $errors->first('kode_kelas') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">Nama Kelas</label>
                                <input class="form-control" name="nama_kelas" id="nama_kelas" type="text"
                                    value="{{ $data->nama_kelas }}">
                                @if($errors->has('nama_kelas'))
                                    <span
                                        class="text-danger">{{ $errors->first('nama_kelas') }}</span>
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
