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
    <form action="{{route('photos.update', $photos->id)}}" method="POST">
        <input type="hidden" name="_method" value="PUT">

        <div class="container">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="establishment">Establimiento</label>
                    <select name="establishment" class="form-control" id="establishment">
                        @foreach($establishments as $establishment)
                            <option value="{{$establishment->id}}">{{$establishment->name}}</option>
                        @endforeach
                    </select>
                    {{--<input class="form-control" id="usuari" type="text" name="usuari" value="{{$comments[0]->usuari}}"/>--}}
                </div>
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" name="name" value="{{ $photo->name }}" placeholder="Nombre de la foto" />
                </div>
                <div class="form-group">
                    <label for="text">Ruta de la imagen</label>
                    <input type="text" name="route" value="{{ $photo->route }}" placeholder="Ruta de la imagen" />
                </div>
                <div class="form-group">
                    <label for="text">Texto alternatio</label>
                    <input type="text" name="alt_text" value="{{ $photo->alt_text }}" placeholder="Texto alternativo de la imagen" />
                </div>
                <div class="form-group">
                    <label for="img">Imagen</label>
                    <input type="image" name="img" id="img" />
                </div>
                <input type="submit" class="btn btn-success col-md-12" value="Modifica">
            </div>
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        </div>
    </form>
@endsection