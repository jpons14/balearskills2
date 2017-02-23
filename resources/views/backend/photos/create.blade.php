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
    <form action="{{route('photos.store')}}" method="POST" enctype="multipart/form-data">

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
                    <input class="form-control" type="text" name="name" placeholder="Nombre de la foto" />
                </div>
                <div class="form-group">
                    <label for="text">Ruta de la imagen</label>
                    <input type="text" class="form-control" name="route" placeholder="Ruta de la imagen" />
                </div>
                <div class="form-group">
                    <label for="text">Texto alternatio</label>
                    <input type="text" class="form-control" name="alt_text" placeholder="Texto alternativo de la imagen" />
                </div>
                <div class="form-group">
                    <label for="img">Imagen</label>
                    <input type="file" class="form-control" name="img" id="img" />
                </div>
                <input type="submit" class="btn btn-success col-md-12" value="Crea">
            </div>
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        </div>
    </form>
@endsection