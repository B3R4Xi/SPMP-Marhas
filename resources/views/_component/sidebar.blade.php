<div class="sidebar" data-color="azure" data-background-color="white" data-image="{{ asset('template') }}/assets/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag-->
    <div class="logo"><a href="{{ url('/') }}" class="simple-text logo-normal">
        SPMP - Marhas
      </a></div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="nav-item ">
          <a class="nav-link" href="{{ url('/') }}">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{ url('/daftarguru') }}">
            <i class="material-icons">person</i>
            <p>Daftar Guru</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{ asset('template/examples') }}/tables.html">
            <i class="material-icons">content_paste</i>
            <p>Table List</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{ asset('template/examples') }}/typography.html">
            <i class="material-icons">library_books</i>
            <p>Typography</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{ asset('template/examples') }}/icons.html">
            <i class="material-icons">bubble_chart</i>
            <p>Icons</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{ asset('template/examples') }}/map.html">
            <i class="material-icons">location_ons</i>
            <p>Maps</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{ asset('template/examples') }}/notifications.html">
            <i class="material-icons">notifications</i>
            <p>Notifications</p>
          </a>
        </li>
      </ul>
    </div>
  </div>