@extends('layouts.app')
@section('content')
    @if (isset(session('data')['successMessage']))
        <div class="container">
            <div class="alert alert-success alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{ session('data')['successMessage'] }}
            </div>
        </div>
    @endif
    <div class="jumbotron text-center">
        <h2 class="text-capitalize"><strong>Nombre: </strong>{{$photo->name}}</h2>
        <p>
            <strong>Establimiento </strong> {{$photo->establishment->name}}<br/>
            <strong>Nombre </strong> {{$photo->name}} <br/>
            <strong>Ruta </strong>{{ $photo->route }}<br/>
            <strong>Texto alternativo </strong>{{ $photo->alt_text }}<br/>
            <br/>
        </p>
    </div>
    </div>
@endsection