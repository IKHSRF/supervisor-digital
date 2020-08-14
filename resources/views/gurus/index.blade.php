@extends('gurus.layout')
@section('content')
<div class="pull-right">
                <a class="btn btn-success" href="{{ route('gurus.create') }}"> Tambah Guru</a>
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
      <th>Nama Guru</th>
      <th width="280px">Action</th>
   </tr>
   @foreach ($gurus as $guru)
   <tr>
      <td>{{ ++$i }}</td>
      <td>{{ $guru->nama_guru }}</td>
      <td>
         <form action="{{ route('gurus.destroy',$guru->id) }}" method="POST">
            <a class="btn btn-info" href="{{ route('gurus.show',$guru->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('gurus.edit',$guru->id) }}">Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
         </form>
      </td>
   </tr>
   @endforeach
</table>
{!! $gurus->links() !!}
@endsection
