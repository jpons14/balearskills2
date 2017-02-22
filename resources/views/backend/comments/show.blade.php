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