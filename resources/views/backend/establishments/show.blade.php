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
        <h2 class="text-capitalize"><strong>Nombre: </strong>{{$establishment->name}}</h2>
        <p>
            <strong>Descripción español </strong> {{$establishment->description_esp}}<br/>
            <strong>Descripción català </strong> {{$establishment->description_cat}} <br/>
            <strong>Horario español </strong>{{ $establishment->timetable_esp }}<br/>
            <strong>Horario catalan </strong>{{ $establishment->timetable_cat }}<br/>
            <strong>Ciudad </strong>{{ $establishment->city }}<br/>
            <strong>Dirección </strong>{{ $establishment->address }}<br/>
            <strong>Teléfono </strong>{{ $establishment->phone }}<br/>
            <strong>Web </strong>{{ $establishment->web }}<br/>
            <strong>Precio </strong>{{ $establishment->price }}€<br/>
            <strong>Tipo de cocinas </strong>
            @foreach($cookingTypes as $cookingType)
                {{ $cookingType->name }}
            @endforeach

            <br/>
        </p>
    </div>
    </div>
@endsection