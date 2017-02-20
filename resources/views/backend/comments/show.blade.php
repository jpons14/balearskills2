@extends('layouts.app')
@section('content')

    <div class="jumbotron text-center">
        <h2>Comentario
        </h2>
        <p>
            <strong>Autor: </strong> {{$user->email}}<br/>
            <strong>Destinatario: </strong> {{$establishment->name}} <br/>
            <strong>Comentario: </strong>{{ $comment->text }}<br/>
        </p>
    </div>
    </div>
@endsection