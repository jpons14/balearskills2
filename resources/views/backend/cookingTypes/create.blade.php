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
    <form action="{{ route('cookingTypes.store') }}" method="post">
        <div class="container">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="nom">Tipo De cina</label>
                    <input type="text" class="form-control" id="name" name="name"
                    />
                </div>
                <input type="submit" class="btn btn-success col-md-12" value="Crea">
            </div>
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        </div>
    </form>

@endsection