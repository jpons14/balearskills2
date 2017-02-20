@extends('layouts.app')
@section('content')
    <?php
    $session = Session::get('message');
    ?>
    @if(isset($session))
        <div class="alert alert-success">
            <strong>{{Session::get('message')}}</strong>
            <?php
            Session::remove( 'message' );
            ?>
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