@extends('_component.master_apps')
@section('title', 'Update Waktu Berhalangan')
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Update Waktu Berhalangan</h4>
            <small class="card-category ">Pastikan semua data tersisi dengan benar</small>
        </div>
        @foreach($timenotavailable as $data)
            <div class="card-body">
                <form action="{{ route('timenotavailable.update',$data->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">Nama Guru</label>
                                <select name="guru_id" class="form-control" id="guru_id" disabled>
                                    <option value="">Nama Guru</option>
                                    @foreach($guru as $guru)
                                    <option value="{{$guru->id}}" {{ $guru->id == $data->guru_id ? 'selected' : ''  }}>
                                        {{ $guru->nama_lengkap }}
                                    </option>
                            @endforeach
                                </select>
                                @if($errors->has('guru_id'))
                                    <span
                                        class="text-danger">{{ $errors->first('guru_id') }}</span>
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
                                @if($errors->has('hari_id'))
                                    <span class="text-danger">{{ $errors->first('hari_id') }}</span>
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
                                @if($errors->has('waktu_id'))
                                    <span class="text-danger">{{ $errors->first('waktu_id') }}</span>
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
