@extends('_component.master_apps')
@section('title', 'Profile')
@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
        <div class="card card-profile">
          <div class="card-avatar">
            <a href="javascript:;">
              <img class="img" src="{{ asset('template') }}/assets/img/new_logo.png" />
            </a>
          </div>
          @foreach ($users as $user => $dt)
            @if ($dt->id == Auth::user()->id)    
            <div class="card-body">
              <h6 class="card-category text-gray">Role : {{ $dt->level->level }}</h6>
              <h4 class="card-title">{{ $dt->name }}</h4>
              <p class="card-description">
                Email : {{ $dt->email }}
              </p>
              {{-- <a href="javascript:;" class="btn btn-primary btn-round">Edit Profile</a> --}}
            </div>
            @endif
          @endforeach
        </div>
      </div>
    </div>
  </div>
@endsection