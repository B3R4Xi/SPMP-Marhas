<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('template') }}/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('template') }}/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Login - Sistem Penjadwalan
    </title>
    {{-- <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' /> --}}
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="{{ asset('template') }}/assets/css/material-dashboard.min.css?v=2.2.1" rel="stylesheet" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    {{-- JS --}}
</head>
  <body class="text-center">
  <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                @if(session('LoginError'))
                    <div class="container" style="overflow-x: auto;">
                        <div class="alert alert-danger">
                            {{ session('LoginError') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="material-icons">close</i>
                            </button>
                        </div>
                    </div>
                @endif
                <form class="mt-4" method="POST" action="/login">
                    @csrf
                    <img class="mb-4" src="{{asset('img/logo.png') }}" alt="" width="295" height="90">
                    <h1 class="h3 mb-3"> <b>Sistem Penjadwalan</b></h1>   
                    <div class="row mb-2">
                        <div class="col-md-12 text-left">
                            <div class="form-group">
                                <label class="bmd-label-floating">Email</label>
                                <input class="form-control" name="email" id="email" type="text" autofocus  value="{{ old('email') }}">
                                @if($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                        </div>
                    </div> 
                    <div class="row mb-2">
                        <div class="col-md-12 text-left">
                            <div class="form-group">
                                <label class="bmd-label-floating">Password</label>
                                <input class="form-control" name="password" type="password" >
                                @if($errors->has('password'))
                                    <span
                                        class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                        </div>
                    </div> 
                    <button class="w-100 btn btn-md btn-primary" type="submit">Sign in</button>
                    {{-- <div class="">
                        <a href="">Daftar Account Guru</a>
                    </div> --}}
                    <p class="mt-5 mb-3 text-muted">&copy; Tugas Akhir - Nasif Zeni</p>
                </form>
            </div>
        </div>
      </div>
      <div class="col-md-4"></div>
  </div>

  {{-- Core JS --}}
  @include('_component.core_js')
  </body>
</html>
