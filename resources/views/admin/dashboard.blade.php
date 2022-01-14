@extends('_component.master_apps')
@if (Auth::user()->level_id === 1)
  @section('title', 'Dashboard - Admin')
  @section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-lg-9 col-md-3 col-sm-3">
        <div class="card card-stats">
          <div class="card-header card-header-primary card-header-icon">
            <div class="card-icon">
              <i class="material-icons">library_books</i>
            </div>
            <p class="card-category">Jadwal Hasil Generate</p>
            <h3 class="card-title">{{ $jadwal }}</h3>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons text-info">visibility</i>
              <a href="{{ url('/genetika/result/1') }}" class="ahref" >Lihat Jadwal...</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div class="card card-stats">
          <div class="card-header card-header-secondary card-header-icon">
            <div class="card-icon">
              <i class="material-icons">person</i>
            </div>
            <p class="card-category">Data Pengampu</p>
            <h3 class="card-title">{{ $teach }}</h3>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons text-info">visibility</i>
              <a href="{{ url('/teach') }}" class="ahref" >Lihat Data Pengampu...</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-header card-header-warning card-header-icon">
            <div class="card-icon">
              <i class="material-icons">import_contacts</i>
            </div>
            <p class="card-category">Mata Pelajaran</p>
            <h3 class="card-title">{{ $mapel }}
            </h3>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons text-info">visibility</i>
              <a href="{{ url('/daftarmapel') }}" class="ahref">Daftar Mata Pelajaran...</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-header card-header-success card-header-icon">
            <div class="card-icon">
              <i class="material-icons">school</i>
            </div>
            <p class="card-category">Guru</p>
            <h3 class="card-title">{{ $guru }}</h3>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons text-info">info</i> 
              <a href="{{ url('/daftarguru') }}" class="ahref" >Detail Guru...</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-header card-header-danger card-header-icon">
            <div class="card-icon">
              <i class="material-icons">books</i>
            </div>
            <p class="card-category">Kelas</p>
            <h3 class="card-title">{{ $kelas }}</h3>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons text-info">visibility</i> 
              <a href="{{ url('/kelas') }}" class="ahref" >Detail Kelas...</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-header card-header-info card-header-icon">
            <div class="card-icon">
              <i class="material-icons">business</i>
            </div>
            <p class="card-category">Ruangan Lab</p>
            <h3 class="card-title">{{ $lab }}</h3>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons text-info">visibility</i>
              <a href="{{ url('/lab') }}" class="ahref" >Ruangan Laboratorium...</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@else
  @section('title', 'Dashboard - Guru')
  @section('content')
<div class="container-fluid">
    <div class="row">
      {{-- <div class="col-lg-12 col-md-3 col-sm-3">
        <div class="card card-stats">
          <div class="card-header card-header-primary card-header-icon">
            <div class="card-icon">
              <i class="material-icons">library_books</i>
            </div>
            <p class="card-category">Jadwal Hasil Generate</p>
            <h3 class="card-title">{{ $jadwal }}</h3>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons text-info">visibility</i>
              <a href="{{ url('/genetika/showClass/1') }}" class="ahref" >Lihat Jadwal...</a>
            </div>
          </div>
        </div>
      </div> --}}
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div class="card card-stats">
          <div class="card-header card-header-secondary card-header-icon">
            <div class="card-icon">
              <i class="material-icons">person</i>
            </div>
            <p class="card-category">Data Pengampu</p>
            <h3 class="card-title">{{ $teach }}</h3>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons text-info">visibility</i>
              <a href="{{ url('/teach') }}" class="ahref" >Lihat Data Pengampu...</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@endif

