@extends('_component.master_apps')
@section('title', 'Algoritma Genetika - Result')
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
                <table class="table table-bordered table-striped table-responsive">
                    <h3>Hasil Generate Jadwal Pelajaran </h3>
                    <thead class="bg-primary">
                        <tr>
                            <th style="text-align:center;">
                                Hari/Jam
                            </th>
                            @if(!empty($hari))
                                @foreach($hari as $d)
                                    <th style="text-align:center;">
                                        {{ $d->nama_hari }}
                                    </th>
                                @endforeach
                            @endif
                        </tr>
                    </thead>
                    <tbody id="valueSearch">
                        @foreach($waktu as $t => $t_value)
                        <tr>
                            <td>{{$t_value->range}}</td>
                            @foreach($hari as $d)
                                    <td align="center">
                                        @if ( isset($jadwals [$t_value->range][$d->nama_hari]) )
                                            @foreach($jadwals [$t_value->range][$d->nama_hari] as $value_jadwal)
                                                <b> {{ $value_jadwal }} </b><br>
                                            @endforeach
                                        @else
                                            <p style="color:green;">Slot Time Free</p>
                                        @endif
                                    </td>
                            @endforeach
                        </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>
</div>
@endsection
