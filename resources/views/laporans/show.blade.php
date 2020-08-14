@extends('laporans.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Laporan</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('laporans.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Guru</strong>
                {{ $laporan->id_guru }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>RPP</strong>
                {{ $laporan->rpp }}
            </div>
        </div>
    </div>
@endsection
