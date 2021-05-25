@extends('_component.master_apps')
@section('title', 'Daftar Mata Pelajaran')
@section('content')    
<div class="container-fluid">
    <div class="float-right mb-5">
        <a href="#" class="btn-primary mdc-fab mdc-fab--touch">
            <i class="material-icons mdc-button__icon">add</i>
        </a>
    </div>
    <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title ">Mata Pelajaran</h4>
          <p class="card-category"> Daftar Mata Pelajaran Produktif RPL</p>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table text-center">
              <thead class=" text-primary">
                <th>NO</th>
                <th>Name</th>
                <th>
                  Country
                </th>
                <th>
                  City
                </th>
                <th>
                  Salary
                </th>
                <th>Action</th>
              </thead>
              <tbody>
                <tr>
                  <td>
                    1
                  </td>
                  <td>
                    Dakota Rice
                  </td>
                  <td>
                    Niger
                  </td>
                  <td>
                    Oud-Turnhout
                  </td>
                  <td class="text-primary">
                    $36,738
                  </td>
                  <td class="text-center">
                    <a href="#" class="btn-primary mdc-fab mdc-fab--mini ">
                        <i class="material-icons mdc-button__icon">edit</i>
                    </a>
                    <a href="#" class="btn-danger mdc-fab mdc-fab--mini">
                        <i class="material-icons">delete</i>
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
@endsection