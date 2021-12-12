<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('template') }}/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('template') }}/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Print Jadwal
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"> --}}
    <!-- CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        hr {
                position: relative;
                top: -5px;
                border: none;
                height: 2px;
                background: black;
                margin-bottom: -20px;
            }
    </style>
</head>
<body onload="window.print();">
    {{-- onload="window.print();" --}}
    <div class="wrapper">
        <div class="container mt-4">
            <div class="row">
                <table class="table text-center">
                    <thead>
                        <th class="center" style="border: none">
                            <img src="{{ asset('template') }}/assets/img/logo-marhas.png" style="width:145px" alt="">
                        </th>
                        <td colspan="7" style="border: none">
                            <h2>
                                <b>
                                    Hasil Export Jadwal Mata Pelajaran <br>
                                    SMK Marhas Margahayu
                                </b>
                            </h2>
                            <p style="font-weight: normal">
                                <hr/>
                                <br>
                                Jl. Terusan Kopo No.385/299, Margahayu Sel., Kec. Margahayu, Bandung, Jawa Barat 40226
                            </p>
                        </td>
                    </thead>
                </table>
                <p>Tanggal Cetak : {{ date('d-M-Y') }}</p>
                <table class="table text-center table-bordered">
                    <thead class="thead-dark">
                        <th>No</th>
                        <th>Guru</th>
                        <th>Mata Pelajaran</th>
                        <th>Kelas</th>
                        <th>Hari</th>
                        <th>Waktu</th>
                        <th>Ruangan</th>
                        <th>Jenis</th>
                    </thead>
                    <tbody>
                        <?php $no=1;?>
                        @foreach($jadwals as $jd => $data)
                            {{-- <tr id="sid{{ $data->id }}"> --}}
                            <td>{{ $loop->iteration }}</td>
                            <td class="">{{ $data->teach->guru->nama_lengkap }}</td>
                            <td class="">{{ $data->teach->mapel->nama_mapel }}</td>
                            <td class="">{{ $data->teach->kelas->nama_kelas }}</td>
                            <td class="">{{ $data->hari->nama_hari }}</td>
                            <td class="">{{ $data->waktu->range }}</td>
                            <td class="">{{ $data->lab->nama_lab }}</td>
                            <td class="">{{ $data->type }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
