@extends('mapels.layout')
@section('content')
<div class="pull-right">
                <a class="btn btn-success" href="{{ route('mapels.create') }}"> Tambah Mapel</a>
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
      <th>Nama Mapel</th>
      <th width="280px">Action</th>
   </tr>
   @foreach ($mapels as $mapel)
   <tr>
      <td>{{ ++$i }}</td>
      <td>{{ $mapel->nama_mapel }}</td>
      <td>
         <form action="{{ route('mapels.destroy',$mapel->id) }}" method="POST">
            <a class="btn btn-info" href="{{ route('mapels.show',$mapel->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('mapels.edit',$mapel->id) }}">Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
         </form>
      </td>
   </tr>
   @endforeach
</table>
{!! $mapels->links() !!}
@endsection
