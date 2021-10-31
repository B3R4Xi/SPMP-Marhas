@extends('_component.master_apps')
@section('title', 'Update Data Hari & Jam')
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Update Data Hari & Jam</h4>
            <small class="card-category ">Pastikan semua data tersisi dengan benar</small>
        </div>
        @foreach($timedays as $data)
            <div class="card-body">
                <form action="{{ route('timedays.update',$data->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">Kode Waktu</label>
                                <input class="form-control" name="kode_timedays" id="kode_timedays" type="text"
                                    value="{{ $data->kode_timedays }}">
                                @if($errors->has('kode_timedays'))
                                    <span
                                        class="text-danger">{{ $errors->first('kode_timedays') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">Nama Hari</label>
                                <select name="hari_id" class="form-control" id="hari_id">
                                    <option value="">Pilih Hari</option>
                                    @foreach($hari as $hari)
                                    <option value="{{$hari->id}}" {{ $hari->id == $data->hari_id ? 'selected' : ''  }}>
                                        {{ $hari->nama_hari }}
                                    </option>
                            @endforeach
                                </select>
                                @if($errors->has('hari'))
                                    <span class="text-danger">{{ $errors->first('hari') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">Range Jam</label>
                                <select name="waktu_id" class="form-control" id="waktu_id">   
                                    <option value="">Pilih Jam</option>                      
                                    @foreach($waktu as $waktu)
                                            <option value="{{$waktu->id}}" {{ $waktu->id == $data->waktu_id ? 'selected' : '' }}>
                                                {{ $waktu->range }}
                                            </option>
                                    @endforeach
                                </select>
                                @if($errors->has('range'))
                                    <span class="text-danger">{{ $errors->first('range') }}</span>
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
