@extends('laporans.layout')
@section('content')
<div class="pull-right">
                <a class="btn btn-success" href="{{ route('laporans.create') }}"> Tambah Laporan</a>
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
      <th>Tanggal<th>
      <th>Nama Guru</th>
      <th>RPP</th>
      <th width="280px">Action</th>
   </tr>
   @foreach ($laporans as $laporan)
   <tr>
      <td>{{ ++$i }}</td>
      <td>{{ $laporan->tanggal}}</td>
      <td></td>
      <td>{{ $laporan->id_guru }}</td>
      <td>{{ $laporan->rpp}}</td>
      <td>
         <form action="{{ route('laporans.destroy',$laporan->id) }}" method="POST">
            <a class="btn btn-info" href="{{ route('laporans.show',$laporan->id) }}">Download</a>
            <a class="btn btn-primary" href="{{ route('laporans.edit',$laporan->id) }}">Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
         </form>
      </td>
   </tr>
   @endforeach
</table>
{!! $laporans->links() !!}
@endsection
