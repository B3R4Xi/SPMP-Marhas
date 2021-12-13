<div class="sidebar" data-color="purple" data-background-color="white">
    {{-- data-image="{{ asset('template') }}/assets/img/sidebar-4.jpg" --}}
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag-->
    <div class="logo">
        <a href="{{ url('/') }}" class="simple-text logo-normal mt-0">
        <img src="{{ asset('template') }}/assets/img/logo-marhas.png" style="width:75px" alt=""> <br>
        <span>SISTEM PENJADWALAN</span>
        </a>
        {{-- <h1 class="text-center"> <a href="{{ url('/') }}"> --- </a></h1> --}}
    </div>

    <div class="sidebar-wrapper">

        @if (Auth::user()->level_id === 1)
        <ul class="nav">
            <li
                class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li
                class="nav-item {{ request()->is('daftarmapel') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/daftarmapel') }}">
                    <i class="material-icons">class</i>
                    <p>Mata Pelajaran</p>
                </a>
            </li>

            {{-- GURU DROPDOWN --}}
            <li
                class="nav-item dropdown {{ request()->is('daftarguru','teach') ? 'active' : '' }}">
                <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="material-icons">person</i>
                    Data Guru
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                    <a class="dropdown-item" href="{{ url('/daftarguru') }}">
                        <i class="material-icons">person</i>
                        Daftar Guru
                    </a>
                    <a class="dropdown-item" href="{{ url('/teach') }}">
                        <i class="material-icons">mode_edit_outline</i>
                        Daftar Pengampu
                    </a>
                    <a class="dropdown-item" href="{{ url('/timenotavailable') }}">
                        <i class="material-icons">timer</i>
                        Waktu Tidak Tersedia
                    </a>
                </div>
            </li>

            {{-- KELAS DAN RUANGAN DROPDOWN --}}
            <li
                class="nav-item dropdown {{ request()->is('lab','kelas') ? 'active' : '' }}">
                <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="material-icons">location_city</i>
                    Kelas & Ruangan
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                    <a class="dropdown-item" href="{{ url('/lab') }}">
                        <i class="material-icons">home_work</i>
                        Daftar Ruangan Lab
                    </a>
                    <a class="dropdown-item" href="{{ url('/kelas') }}">
                        <i class="material-icons">school</i>
                        Daftar Kelas
                    </a>
                </div>
            </li>

            {{-- MANAGEMENT WAKTU DROPDOWN --}}
            <li
                class="nav-item dropdown {{ request()->is('hari','waktu','timedays') ? 'active' : '' }}">
                <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="material-icons">pending_actions</i>
                    Manage Waktu
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                    <a class="dropdown-item" href="{{ url('/hari') }}">
                        <i class="material-icons">date_range</i>
                        Daftar Data Hari
                    </a>
                    <a class="dropdown-item" href="{{ url('/waktu') }}">
                        <i class="material-icons">schedule</i>
                        Daftar Data Waktu
                    </a>
                    {{-- <a class="dropdown-item" href="{{ url('/timedays') }}">
                        <i class="material-icons">timer</i>
                        Daftar Jam & Hari
                    </a> --}}
                </div>
            </li>

            {{-- GENERATE JADWAL DROPDOWN --}}
            <li
                class="nav-item dropdown {{ request()->is('genetika', 'genetika/result/1') ? 'active' : '' }}">
                <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="material-icons">today</i>
                    Jadwal
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                    <a class="dropdown-item" href="{{ url('/genetika') }}">
                        <i class="material-icons">integration_instructions</i>
                        Generate Jadwal
                    </a>
                    <a class="dropdown-item" href="{{ url('/genetika/result/1') }}">
                        <i class="material-icons">schedule</i>
                        Jadwal Pelajaran
                    </a>
                </div>
            </li>
        </ul>
        @elseif (Auth::user()->level_id === 2)
        <ul class="nav">
           
            {{-- GURU DROPDOWN --}}
            <li
                class="nav-item dropdown {{ request()->is('daftarguru','teach') ? 'active' : '' }}">
                <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="material-icons">person</i>
                    Data Guru
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                    <a class="dropdown-item" href="{{ url('/daftarguru') }}">
                        <i class="material-icons">person</i>
                        Daftar Guru
                    </a>
                    <a class="dropdown-item" href="{{ url('/teach') }}">
                        <i class="material-icons">mode_edit_outline</i>
                        Daftar Pengampu
                    </a>
                    <a class="dropdown-item" href="{{ url('/timenotavailable') }}">
                        <i class="material-icons">timer</i>
                        Waktu Tidak Tersedia
                    </a>
                </div>
            </li>

            {{-- GENERATE JADWAL DROPDOWN --}}
            <li
                class="nav-item dropdown {{ request()->is('genetika', 'genetika/result/1') ? 'active' : '' }}">
                <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="material-icons">today</i>
                    Jadwal
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                    <a class="dropdown-item" href="{{ url('/genetika/result/1') }}">
                        <i class="material-icons">schedule</i>
                        Jadwal Pelajaran
                    </a>
                </div>
            </li>
        </ul>
        @endif
    </div>
</div>
