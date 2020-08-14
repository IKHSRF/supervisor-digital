@extends('jadwals.layout')
@section('content')
<div class="pull-right">
                <a class="btn btn-success" href="{{ route('jadwals.create') }}"> Tambah Jadwal</a>
            </div>
</button>
@if ($message = Session::get('success'))
<div class="alert alert-success">
   <p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
   <tr>
      <th>No</th>
      <th>Tanggal</th>
      <th>Rombel</th>
      <th>Guru</th>
      <th>ID Mapel</th>
      <th width="280px">Action</th>
   </tr>
   @foreach ($jadwals as $jadwal)
   <tr>
      <td>{{ ++$i }}</td>
      <td>{{ $jadwal->tanggal }}</td>
      <td>{{ $jadwal->rombel }}</td>
      <td>{{ $jadwal->id_guru }}</td>
      <td>{{ $jadwal->id_mapel }}</td>
      <td>
         <form action="{{ route('jadwals.destroy',$jadwal->id) }}" method="POST">
            <a class="btn btn-info" href="{{ route('jadwals.show',$jadwal->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('jadwals.edit',$jadwal->id) }}">Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
         </form>
      </td>
   </tr>
   @endforeach
</table>
{!! $jadwals->links() !!}
@endsection
