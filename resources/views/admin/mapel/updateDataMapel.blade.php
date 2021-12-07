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
                    <div class="row mb-2 mt-2">
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
                    <div class="row mt-2">
                        <div class="col-md-4">
                            <div class="form-group">
                                      <label class="select-label">Tingkat</label>
                                    <select class="select-text form-control" name="tingkat_mapel_id">
                                        <option value="" disabled selected>Pilih tingkat</option>
                                        @foreach ($tingkat_mapel as $tm)
                                        <option value="{{ $tm->id }}" {{ $tm->id == $data->tingkat_mapel_id ? 'selected' : '' }}>{{ $tm->tingkat_mapel }}</option>
                                        @endforeach
                                    </select>
                                @if($errors->has('tingkat_mapel_id'))
                                    <span
                                        class="text-danger">{{ $errors->first('tingkat_mapel_id') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="select-label">Semester</label>
                              <select class="select-text form-control" name="semester_id">
                                  <option value="" disabled selected>Pilih Semester</option>
                                  @foreach ($semester as $sm)
                                  <option value="{{ $sm->id }}" {{ $sm->id == $data->semester_id ? 'selected' : '' }}>{{ $sm->semester }}</option>
                                  @endforeach
                              </select>
                          @if($errors->has('semester_id'))
                              <span
                                  class="text-danger">{{ $errors->first('semester_id') }}</span>
                          @endif
                        </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                      <label class="select-label">Jenis Mapel</label>
                                    <select class="select-text form-control" name="jenis_mapel_id">
                                        <option value="" disabled selected>Pilih Jenis Mapel</option>
                                        @foreach ($jenis_mapel as $jm)
                                        <option value="{{ $jm->id }}" {{ $jm->id == $data->jenis_mapel_id ? 'selected' : '' }}>{{ $jm->jenis_mapel }}</option>
                                        @endforeach
                                    </select>
                                @if($errors->has('jenis_mapel_id'))
                                    <span
                                        class="text-danger">{{ $errors->first('jenis_mapel_id') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <div class="form-group">
                                        <label class="bmd-label-floating">Jumlah Jam Mapel</label>
                                        <input class="select-text form-control" required name="jumlah_jam" value="{{ $data->jumlah_jam }}">
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
