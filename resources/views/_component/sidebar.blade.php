<div class="sidebar" data-color="azure" data-background-color="white"
    data-image="{{ asset('template') }}/assets/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag-->
    <div class="logo">
        <a href="{{ url('/') }}" class="simple-text logo-normal mt-0">
            <span>SISTEM PENJADWALAN</span><br>
            <img src="{{ asset('template') }}/assets/img/logo.png" style="width:150px" alt="">
        </a>
    </div>

    <div class="sidebar-wrapper">
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
            <li
                class="nav-item {{ request()->is('daftarguru') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/daftarguru') }}">
                    <i class="material-icons">person</i>
                    <p>Daftar Guru</p>
                </a>
            </li>
            <li
                class="nav-item {{ request()->is('lab') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/lab') }}">
                    <i class="material-icons">location_city</i>
                    <p>Ruangan Lab</p>
                </a>
            </li>
            <li
                class="nav-item {{ request()->is('kelas') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/kelas') }}">
                    <i class="material-icons">school</i>
                    <p>Daftar Kelas</p>
                </a>
            </li>
            <li
                class="nav-item {{ request()->is('waktu') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/waktu') }}">
                    <i class="material-icons">schedule</i>
                    <p>Waktu</p>
                </a>
            </li>
            <li
                class="nav-item {{ request()->is('generatejadwal') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/generatejadwal') }}">
                    <i class="material-icons">today</i>
                    <p>Generate Jadwal</p>
                </a>
            </li>
        </ul>
    </div>
</div>
