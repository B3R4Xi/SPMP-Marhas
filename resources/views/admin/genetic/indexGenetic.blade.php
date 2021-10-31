@extends('_component.master_apps')
@section('title', 'Algoritma Genetika - Generate')
@section('content')    
<div class="container-fluid">
    @if(session('success'))
        <div class="container" style="overflow-x: auto;">
            <div class="alert alert-success">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="material-icons">close</i>
                </button>
            </div>
        </div>
    @endif
    @if(session('danger'))
    <div class="container" style="overflow-x: auto;">
        <div class="alert alert-danger">
            {{ session('danger') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="material-icons">close</i>
            </button>
        </div>
    </div>
    @endif
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.genetic.submit') }}" method="get">
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="bmd-label-floating">Tahun Akademik</label>
                            <select class="select-text form-control"  name="tahun">
                                <option value="" disabled selected>Pilih Tahun</option>
                                @foreach ($tahun as $tahun => $data)
                                <option value="{{ $tahun }}">{{ $data }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="bmd-label-floating">Semester Akademik</label>
                            <select class="select-text form-control"  name="semester">
                                <option value="" disabled selected>Pilih Semester</option>
                                @foreach ($semester as $data)
                                <option value="{{ $data->id }}">{{ $data->semester }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="bmd-label-floating">Masukan Nilai Pembangkit Kromosom</label>
                            <select class="select-text form-control"  name="kromosom">
                                <option value="" disabled selected>Nilai Kromosom</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="bmd-label-floating">Masukan Nilai Maksimal Generasi</label>
                            <select class="select-text form-control"  name="generasi">
                                <option value="" disabled selected>Nilai Generasi</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="bmd-label-floating">Masukan Nilai Mutasi</label>
                            <input class="form-control" name="mutasi" type="text">
                            @if($errors->has('mutasi'))
                                <span
                                    class="text-danger">{{ $errors->first('mutasi') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="bmd-label-floating">Masukan Nilai Crossover</label>
                            <input class="form-control" name="crossover" type="text">
                            @if($errors->has('crossover'))
                                <span
                                    class="text-danger">{{ $errors->first('crossover') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success pull-right">
                    <i class="material-icons">save</i> Generate</button>

            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header card-header-primary mt-4">
            <h4 class="card-title ">Jadwal Pelajaran</h4>
            <p class="card-category"> Hasil Generate Jadwal</p>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table text-center table-hover">
                    <thead class=" text-primary">
                        <th>No</th>
                        <th>Guru</th>
                        <th>Hari</th>
                        <th>Waktu</th>
                        <th>Ruangan</th>
                    </thead>
                    <tbody>
                        <?php $no=1;?>
                        {{-- @foreach($timedays as $data) --}}
                            {{-- <tr id="sid{{ $data->id }}"> --}}
                                <td></td>
                                <td class=""></td>
                                <td class=""></td>
                                <td class=""></td>
                                <td class=""></td>
                            </tr>
                        {{-- @endforeach --}}
                    </tbody>
                </table>
            </div>
            <nav class="pagination justify-content-center">
            {{-- {{$timedays->links()}} --}}
            </nav>
        </div>
    </div>
</div>
@endsection