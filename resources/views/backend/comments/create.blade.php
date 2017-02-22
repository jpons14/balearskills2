@extends('layouts.app')
@section('content')
    @if (isset(session('data')['errorMessage']))
        <div class="container">
            <div class="alert alert-danger alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{ session('data')['errorMessage'] }}
            </div>
        </div>
    @endif
    <h2 class="text-center">Nuevo Comentario</h2>
    <form action="{{ route('comments.store') }}" method="post">
        <div class="col-md-10 col-md-offset-1">
            <div class="form-group">
                <select class="form-control" name="user" id="user">
                    @foreach($users as $user)
                        <option value="{{$user->id}}">{{$user->email}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <select class="form-control" name="establishment" id="establishment">
                    @foreach($establishments as $establishment)
                        <option value="{{$establishment->id}}">{{$establishment->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <textarea class="form-control" cols="30" rows="10" placeholder="Escribe aquí tú comentario"
                          name="text"></textarea>
            </div>
            <input class="btn btn-success" type="submit" value="Crear comentario">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        </div>
    </form>
@endsection