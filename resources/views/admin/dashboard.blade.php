@extends('_component.master_apps')
@section('title', 'Dashboard')
@section('content')    
<div class="container-fluid">
    <div class="row">
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
    {{-- <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="card">
          <div class="card-header card-header-info">
            <h4 class="card-title">Employees Stats</h4>
            <p class="card-category">New employees on 15th September, 2016</p>
          </div>
          <div class="card-body table-responsive">
            <table class="table table-hover">
              <thead class="text-primary">
                <th>ID</th>
                <th>Name</th>
                <th>Salary</th>
                <th>Country</th>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Dakota Rice</td>
                  <td>$36,738</td>
                  <td>Niger</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Minerva Hooper</td>
                  <td>$23,789</td>
                  <td>Curaçao</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Sage Rodriguez</td>
                  <td>$56,142</td>
                  <td>Netherlands</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Philip Chaney</td>
                  <td>$38,735</td>
                  <td>Korea, South</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div> --}}
  </div>
@endsection