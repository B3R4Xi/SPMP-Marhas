 {{-- modal edit --}}
 @foreach ($mapel as $data)
 <form action="{{ url('/daftarmapel/update') }}" method="POST" id="editForm">
     {{ method_field('PUT') }}
     {{ csrf_field() }}
     <div class="modal fade" id="update{{ $data->id_mapel }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title"><b>Edit Mata Pelajaran</b></h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 <div class="modal-body">
                     <div class="row mb-2">
                         <div class="col-md-12">
                             <div class="form-group">
                                 <label class="bmd-label-floating">Kode Mata Pelajaran</label>
                                 <input class="form-control" name="kode_mapel" id="e_kodeMapel" type="text" value="{{ $data->kode_mapel }}">
                             </div>
                         </div>
                     </div>
                     <div class="row mb-2">
                         <div class="col-md-12">
                             <div class="form-group">
                                 <label class="bmd-label-floating">Nama Mata Pelajaran</label>
                                 <input class="form-control" name="nama_mapel" id="e_namaMapel" type="text" value="{{ $data->nama_mapel }}">
                             </div>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-md-12">
                             <div class="form-group">
                                 <label class="bmd-label-floating">Tingkat</label>
                                 <input class="form-control" name="tingkat_mapel" id="e_tingkatMapel" type="text"
                                     value="{{ $data->tingkat_mapel }}">
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <button type="submit" class="btn btn-success" data-dismiss="modal">Update</button>
                 </div>

             </div>
         </div>
     </div>
 </form>
 @endforeach
