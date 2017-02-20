@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-md-10">
            <table class="table">
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
                        <td><a href="/comments/delete/{{$comment->id}}"><i class="fa fa-times"></i> </a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="container">
        <div class="col-md-10">
            <a class="btn btn-default" href="{{ route('comments.create') }}">Afegir comentari</a>
        </div>
    </div>
    @if(isset($message))
        <div id="snackbar"> {{$message }} </div>
    @endif
    <br/>
    <br/>
@endsection