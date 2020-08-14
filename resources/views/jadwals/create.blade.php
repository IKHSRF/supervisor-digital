<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tambah Jadwal</title>
    <link
      href="https://fonts.googleapis.com/css?family=Raleway"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
      #card {
        background: #fbfbfb;
        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        height: 650px;
        margin: 6rem auto 8.1rem auto;
        width: 329px;
      }
      #card-content {
        padding: 12px 44px;
      }
      #card-title {
        font-family: "Raleway Thin", sans-serif;
        letter-spacing: 4px;
        padding-bottom: 23px;
        padding-top: 13px;
        text-align: center;
      }
      .underline-title {
        background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
        height: 2px;
        margin: -1.1rem auto 0 auto;
        width: 89px;
      }
      label {
        font-family: "Raleway", sans-serif;
        font-size: 11pt;
      }
      #forgot-pass {
        color: #2dbd6e;
        font-family: "Raleway", sans-serif;
        font-size: 10pt;
        margin-top: 3px;
        text-align: right;
      }
      .form {
        align-items: left;
        display: flex;
        flex-direction: column;
      }
      .form-border {
        background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
        height: 1px;
        width: 100%;
      }
      .form-content {
        background: #fbfbfb;
        border: none;
        outline: none;
        padding-top: 14px;
      }
      #signup {
        color: #2dbd6e;
        font-family: "Raleway", sans-serif;
        font-size: 10pt;
        margin-top: 16px;
        text-align: center;
      }
      #submit-btn {
        background: black;
        border: none;
        border-radius: 21px;
        cursor: pointer;
        color: white;
        font-family: "Raleway SemiBold", sans-serif;
        height: 42.3px;
        margin: 0 auto;
        margin-top: 50px;
        width: 153px;
      }
    </style>
  </head>
  <body>
        <div class="pull-right">
          <a class="btn btn-primary" href="{{ route('jadwals.index') }}">
            Kembali</a
          >
        </div>

    @if ($errors->any())
    <div class="alert alert-danger">
      <strong>Whoops!</strong> There were some problems with your input.<br /><br />
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif

    <div id="card">
      <div id="card-content">
        <div id="card-title">
          <h2>Tambah Jadwal</h2>
          <div class="underline-title"></div>
        </div>
        <form action="{{ route('jadwals.store') }}" method="POST" class="form">
          @csrf
          <label for="tanggal" style="padding-top: 13px;">Tanggal</label>
          <input
            id="user-email"
            class="form-content"
            type="datetime-local"
            name="tanggal"
            autocomplete="on"
            required
          />
          <div class="form-border"></div>
          <label for="rombel" style="padding-top: 13px;">Rombel</label>
          <input
            id="user-email"
            class="form-content"
            type="text"
            name="rombel"
            autocomplete="on"
            required
          />
          <div class="form-border"></div>
          <label for="rombel" style="padding-top: 13px;">Nama Guru</label>
          <input
            id="user-email"
            class="form-content"
            type="text"
            name="id_guru"
            autocomplete="on"
            required
          />
          <div class="form-border"></div>
          <label for="rombel" style="padding-top: 13px;">ID Mapel</label>
          <select class="form-content" name="id_mapel" id="user-email">
            @foreach($pelajaran as $id => $nama_mapel)
              <option value="{{ $id }}">{{ $nama_mapel }}</option>
            @endforeach
          </select>
          <div class="form-border"></div>
          <button
            type="submit"
            class="btn btn-primary"
            id="submit-btn"
            name="submit"
          >
            Submit
          </button>
        </form>
      </div>
    </div>
  </body>
</html>
