@extends('layouts.app')
@section('content')
    <h2 class="text-center">Nuevo Comentario</h2>
    <form action="{{ route('comments.store') }}" method="post">
        <div class="col-md-9 col-md-offset-1">
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
                <input class="form-control" type="text" placeholder="text" name="text">
            </div>

            <div class="form-group">
                <input class="form-control" type="text" placeholder="data" name="data">
            </div>

            <div class="form-group">
                <input class="form-control" type="text" placeholder="hora" name="hora">
            </div>
            <input class="btn btn-success" type="submit" value="Crear comentario">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        </div>
    </form>
@endsection