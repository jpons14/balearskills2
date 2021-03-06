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
    <form action="{{ route('establishments.store') }}" method="post">
        <div class="container">
            <div class="col-md-10 col-md-offset-1">
                <div class="form-group">
                    <input type="text" name="name" placeholder="Name"
                           class="form-control"/>
                </div>
                <div class="form-group">
                    <textarea cols="20" placeholder="Description esp" name="description_esp" rows="9"
                              class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <textarea cols="20" placeholder="Description cat" name="description_cat" rows="9"
                              class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Timetable esp" name="timetable_esp" class="form-control"/>
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Timetable cat" name="timetable_cat" class="form-control"/>
                </div>
                <div class="form-group">
                    <input type="text" placeholder="City" name="city" class="form-control"/>
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Address" name="address" class="form-control"/>
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Phone" name="phone" class="form-control"/>
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Web" name="web" class="form-control"/>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" placeholder="Price" name="price" class="form-control"/>
                        <div class="input-group-addon">€</div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <select name="cookingTypes[]" id="cookingTypes" class="form-control" multiple="multiple">
                            @foreach($cookingTypes as $cookingType)
                                <option value="{{$cookingType->id}}">{{$cookingType->name}}</option>
                            @endforeach
                        </select>
                        <div class="input-group-addon" data-toggle="tooltip" title="@lang('messages.toolTip.selectMultiple')" data-toggle="tooltip"><i class="fa fa-info"></i> </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" class="form-control btn btn-default" value="Crea"/>
                </div>
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            </div>
        </div>
    </form>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
@endsection