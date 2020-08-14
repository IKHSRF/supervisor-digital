<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Laporan</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    />
  </head>
  <body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
      <a class="navbar-brand" href="halamanDepan.html">Supervisor Digital</a>

      @if (Auth::user()->id_level == 1)
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="laporans">Laporan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/">Log out</a>
        </li>
      </ul>
    @elseif (Auth::user()->id_level == 2)
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="mapels">Mata Pelajaran</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gurus">Guru</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="jadwals">Jadwal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/">Log out</a>
        </li>
      </ul>
      @elseif (Auth::user()->id_level == 3)
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="laporans">Laporan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/">Log out</a>
        </li>
      </ul>
      @elseif (Auth::user()->id_level == 4)
      <ul class="navbar-nav mr-auto">
      <li class="nav-item">
          <a class="nav-link" href="gurus">Guru</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="laporans">Laporan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/">Log out</a>
        </li>
      </ul>
      @elseif (Auth::user()->id_level == 5)
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="mapels">Mata Pelajaran</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gurus">Guru</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="jadwals">Jadwal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="laporans">Laporan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/">Log out</a>
        </li>
      </ul>
      @endif
      <form class="form-inline my-2 my-lg-0" action="/action_page.php">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" />
        <button class="btn btn-success" type="submit">Search</button>
      </form>
    </nav>
    <div class="container-fluid" style="margin-top: 80px;">
      <div style="padding-top: 10px;">
        @yield('content')
      </div>
    </div>
  </body>
</html>
