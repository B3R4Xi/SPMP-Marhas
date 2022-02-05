<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('template') }}/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('template') }}/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	  <title>Jadwal Mata Pelajaran</title>	
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  @laravelPWA
</head>
<body>
  <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="{{url('/images/icons/logo-marhas.png')}}"  alt="" width="50" height="40" class="d-inline-block align-text-top">
        SPMP - Marhas
      </a>
      <a class="d-flex" href="{{route('login')}}">
        Login
      </a>
    </div>
  </nav>
	<div class="container">
    <div class="card-header mt-4">
      <table class="table text-center">
        <thead>
            <th class="center" style="border: none">
                
            </th>
            <td colspan="7" style="border: none">
                <h2>
                    <b>
                        Jadwal Pelajaran RPL  <br>
                        SMK Marhas Margahayu
                    </b>
                </h2>
                <p style="font-weight: normal">
                    <hr/>
                    
                    Jl. Terusan Kopo No.385/299, Margahayu Sel., Kec. Margahayu, Bandung, Jawa Barat 40226
                </p>
            </td>
        </thead>
    </table>
    </div>
		<div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped table-bordered" id="tabel-data">
          <thead class=" text-primary">
              <th>No</th>
              <th>Guru</th>
              <th>Mata Pelajaran</th>
              <th>Kelas</th>
              <th>Hari</th>
              <th>Waktu</th>
              <th>Ruangan</th>
          </thead>
          <tbody>
              {{-- {{ $no=1 }} --}}
              @foreach($upload as $up)
                  <tr id="sid{{ $up->id }}">
                  <td>{{ $loop->iteration }}</td>
                  <td class="">{{ $up->pengajar}}</td>
                  <td class="">{{ $up->mata_pelajaran}}</td>
                  <td class="">{{ $up->kelas}}</td>
                  <td class="">{{ $up->hari}}</td>
                  <td class="">{{ $up->waktu}}</td>
                  <td class="">{{ $up->ruangan}}</td>
                  </tr>
              @endforeach
          </tbody>
      </table>
      </div>
      
  </div>
	</div>
</body>
<script type="text/javascript">
	$(document).ready(function(){
		$('#tabel-data').DataTable({
      "language":{
        "url":"http://cdn.datatables.net/plug-ins/1.10.9/i18n/Indonesian.json",
      }
    });
	});
</script>
</html>


