@extends('layouts.app')
@section('content')
    <form action="{{route('comments.update', $comment->id)}}" method="POST">
        <input type="hidden" name="_method" value="PUT">

        <div class="container">
            <div class="col-md-10">
                <div class="form-group">
                    <label for="user">Usuario</label>
                    <select name="user" class="form-control" id="user">
                        @foreach($users as $user)
                            <option @if($user->id == $userSelected->id) {{'selected="selected"' }} @endif value="{{$user->id}}">{{$user->email}}</option>
                        @endforeach
                    </select>
                    {{--<input class="form-control" id="usuari" type="text" name="usuari" value="{{$comments[0]->usuari}}"/>--}}
                </div>
                <div class="form-group">
                    <label for="establishment">Establecimiento</label>
                    <select name="establishment" class="form-control" id="establishment">
                        @foreach($establishments as $establishment)
                            <option @if($establishment->id == $establishmentSelected->id) {{'selected="selected"'}}@endif    value="{{$establishment->id}}">{{$establishment->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="text">Text</label>
                    <textarea name="text" id="text" cols="30" class="form-control"
                              rows="10">{{$comment->text}}</textarea>
                </div>
                <input type="submit" class="btn btn-success col-md-12" value="Modifica">
            </div>
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        </div>
    </form>
@endsection