@extends('layouts.app')
@section('content')
    <?php
    $centinelaError = Session::has('errorMessage');
    ?>
    @if ($centinelaError)
        <div class="container">
            <div class="alert alert-warning">
                {{ Session::get('errorMessage') }}
            </div>
        </div>
    @endif
    @if(session('data')['successMessage'])
        <div class="container">
            <div class="alert alert-success">
                {{ session('data')['successMessage'] }}
            </div>
        </div>
    @endif
    <div class="container">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>User</th>
                    <th>Establimento</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($comments as $key => $comment)
                    <tr>
                        <td>{{$comment->id}}</td>
                        <td>{{$comment->user->email}}</td>
                        <td>{{$comment->establishment->name}}</td>
                        <td><a href="{{route('comments.edit', $comment->id)}}"><i class="fa fa-pencil"></i> </a></td>
                        <form action="{{ route('comments.destroy', $comment->id) }}" method="POST">
                            <input type="hidden" name="_method" value="DELETE"/>
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <td><i class="fa fa-times onhover" onclick="$('form').submit();"></i></td>
                        </form>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="container">
        <div class="col-md-10">
            <a class="btn btn-default" href="{{ route('comments.create') }}">Añadir comentario</a>
        </div>
    </div>
    <br/>
    <br/>
@endsection