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
                    <th>Establimiento</th>
                    <th>Nombre</th>
                    <th>Texto alternativo</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($photos as $photo)
                    <tr>
                        <td>{{$photo->id}}</td>
                        <td>{{$photo->establishment->name}}</td>
                        <td>{{$photo->name}}</td>
                        <td>{{$photo->alt_text}}</td>
                        <td><a href="{{route('photos.edit', $photo->id)}}"><i class="fa fa-pencil"></i> </a></td>
                        <form action="{{ route('photos.destroy', $photo->id) }}" method="POST">
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
            <a class="btn btn-default" href="{{ route('photos.create') }}">Añadir photos</a>
        </div>
    </div>
    <br/>
    <br/>
@endsection