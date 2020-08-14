<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    />
    <link rel="stylesheet" type="text/css" href="./css/menu.css" />
    <title>Dashboard</title>
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
          <a class="nav-link" href="#" onclick="logout()">Log out</a>
        </li>
      </ul>
    @elseif (Auth::user()->id_level == 2)
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="mapels">Mata Pelajaran</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="jadwals">Jadwal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" onclick="logout()">Log out</a>
        </li>
      </ul>
      @elseif (Auth::user()->id_level == 3)
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="laporans">Laporan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" onclick="logout()">Log out</a>
        </li>
      </ul>
      @elseif (Auth::user()->id_level == 4)
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="laporans">Laporan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" onclick="logout()">Log out</a>
        </li>
      </ul>
      @elseif (Auth::user()->id_level == 5)
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="mapels">Mata Pelajaran</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="jadwals">Jadwal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="laporans">Laporan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" onclick="logout()">Log out</a>
        </li>
      </ul>
      @endif
      <form class="form-inline my-2 my-lg-0" action="/action_page.php">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" />
        <button class="btn btn-success" type="submit">Search</button>
      </form>
    </nav>
    <div class="container-fluid" style="margin-top: 80px;">
      <div class="alert alert-info">
        <strong>Info!</strong> Tampilan role lain berbeda beda sesuai dengan
        fungsinya masing masing.
      </div>
      <div class="alert alert-warning">
        <strong>Warning!</strong> Akan Diupdate setelah menggunakan database dan
        bahasa pemrograman
      </div>
      <div style="z-index: -1; position: fixed;"></div>

      <div id="card" hidden>
        <div id="card-content">
          <div id="card-title">
            <h2>Log out</h2>
            <div class="underline-title"></div>
          </div>
          <form method="post" class="form">
            <p class="text-center font-weight-bold">Yakin Ingin Keluar?</p>

            <div class="form-border"></div>
            <div class="text-center">
              <button
                type="button"
                class="btn btn-danger"
                id="keluar"
                onclick="keluar()"
              >
                YA
              </button>
              <button
                type="button"
                class="btn btn-primary"
                id="masuk"
                onclick="stay()"
              >
                TIDAK
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
  <script type="text/javascript">
    document.getElementById("keluar").onclick = function () {
      location.href = "login.html";
    };
  </script>
  <script type="text/javascript">
    function stay() {
      document.getElementById("card").hidden = true;
    }
  </script>
  <script type="text/javascript">
    function logout() {
      document.getElementById("card").hidden = false;
    }
  </script>
</html>
