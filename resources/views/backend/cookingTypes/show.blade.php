@extends('layouts.app')
@section('content')
    @if (isset(session('data')['successMessage']))
        <div class="container">
            <div class="alert alert-success alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{ session('data')['successMessage'] }}
            </div>
        </div>
    @endif
    <div class="jumbotron text-center">
        <h2>Tipo de cocina
        </h2>
        <p>
            <strong>{{ $cookingType->name }} </strong>
        </p>
    </div>
    </div>
@endsection