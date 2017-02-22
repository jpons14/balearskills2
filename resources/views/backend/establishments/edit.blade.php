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
    <form action="{{ route('establishments.update', $establishment->id) }}" method="post" >
        <input type="hidden" name="_method" value="put" />
        <div class="container">
            <h1 class="text-center text-capitalize">{{$establishment->name}}</h1>
        </div>
        <div class="container">
            <div class="col-md-10 col-md-offset-1">
                <div class="form-group">
                    <input type="text" name="name" value="{{$establishment->name}}" placeholder="Name"
                           class="form-control"/>
                </div>
                <div class="form-group">
                    <textarea cols="20" name="description_esp" rows="9"
                              class="form-control">{{$establishment->description_esp}}</textarea>
                </div>
                <div class="form-group">
                    <textarea cols="20" name="description_cat" rows="9"
                              class="form-control">{{$establishment->description_cat}}</textarea>
                </div>
                <div class="form-group">
                    <input type="text" name="timetable_esp" class="form-control" value="{{$establishment->timetable_esp}}"/>
                </div>
                <div class="form-group">
                    <input type="text" name="timetable_cat" class="form-control" value="{{$establishment->timetable_cat}}"/>
                </div>
                <div class="form-group">
                    <input type="text" name="city" class="form-control" value="{{$establishment->city}}"/>
                </div>
                <div class="form-group">
                    <input type="text" name="address" class="form-control" value="{{$establishment->address}}"/>
                </div>
                <div class="form-group">
                    <input type="text" name="phone" class="form-control" value="{{$establishment->phone}}"/>
                </div>
                <div class="form-group">
                    <input type="text" name="web" class="form-control" value="{{$establishment->web}}"/>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" placeholder="Price" name="price" value="{{$establishment->price}}" class="form-control"/>
                        <div class="input-group-addon">€</div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" class="form-control btn btn-default" value="Actualiza"/>
                </div>
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            </div>
        </div>
    </form>
@endsection