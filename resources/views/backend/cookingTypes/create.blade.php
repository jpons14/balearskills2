@extends('layouts.app')
@section('content')
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