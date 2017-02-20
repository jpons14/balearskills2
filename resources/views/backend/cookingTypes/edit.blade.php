@extends('layouts.app')
@section('content')
    <form action="{{ route('cookingTypes.update', $cookingType->id) }}" method="post">
        <input type="hidden" name="_method" value="PUT" />
        <div class="container">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name"
                           value="{{$cookingType->name}}"/>
                </div>
                <input type="submit" class="btn btn-success col-md-12" value="Modifica">
            </div>
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        </div>
    </form>
@endsection