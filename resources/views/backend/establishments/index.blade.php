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
                    <th>id</th>
                    <th>Nombre</th>
                    <th>web</th>
                    <th>Teléfono</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($establishments as $establishment)
                    <tr>
                        <td>{{$establishment->id}}</td>
                        <td>{{$establishment->nombre}}</td>
                        <td>{{$establishment->web}}</td>
                        <td>{{$establishment->telefon}}</td>
                        <td><a href="{{ route('establishments.edit', $establishment->id) }}"><i
                                        class="fa fa-pencil"></i> </a></td>
                        <td>
                            <form action="{{ route('establishments.destroy', $establishment->id) }}" method="POST">
                                <input type="hidden" name="_method" value="DELETE"/>
                                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <td><i class="fa fa-times onhover" onclick="$('form').submit();"></i></td>
                        </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <br/>
    <div class="container">
        <div class="col-md-10">
            <a href="{{ route('establishments.create') }}">
                <button class="btn btn-default">Crea un nuevo establecimiento</button>
            </a>
        </div>
    </div>
@endsection