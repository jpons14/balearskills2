@extends('layouts.app')
@section('content')

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
        </p>
    </div>
    </div>
@endsection