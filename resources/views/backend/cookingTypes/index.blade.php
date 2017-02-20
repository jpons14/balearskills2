@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Nombre</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($cookingTypes as $cookingType)
                    <tr>
                        <td>{{$cookingType->id}}</td>
                        <td>{{$cookingType->name}}</td>
                        <td><a href="{{ route('cookingTypes.edit', $cookingType->id) }}"><i class="fa fa-pencil"></i>
                            </a></td>
                        <td>
                            <form action="{{ route('cookingTypes.destroy', $cookingType ->id) }}" method="POST">
                                <input type="hidden" name="_method" value="DELETE"/>
                                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <td><i class="fa fa-times onhover" onclick="$('form').submit();"></i></td>
                        </form></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="container">
        <div class="col-md-10">
            <a class="btn btn-default" href="{{ route('cookingTypes.create') }}">Añade un tipo de cocina</a>
        </div>
    </div>
    <br/>
@endsection