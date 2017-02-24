@extends('frontend.layout')
@section('restaurantsActive', 'navactive')
@section('content')
    <div class="m10">
        @foreach($establishments as $establishment)
            <div class="row">
                <div class="col-md-7 col-lg-offset-2 ">
                    <div class="card">
                        <div class="card-image">
                            <img src="/imgs/coffee1.jpg">
                            <span class="card-title">{{ $establishment->name }}</span>
                        </div>
                        <div class="card-content">
                            <p>{{ $establishment->description_esp }}</p>
                        </div>
                        <div class="card-action">
                            <a href="#comments">Comentarios</a>
                            <a href="#details" class="right">Detalles</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>



    <!--Card-->
    <div class="card">

        <!--Card image-->
        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%282%29.jpg" alt="Card image cap">
        <!--/.Card image-->

        <!--Card content-->
        <div class="card-block">
            <!--Title-->
            <h4 class="card-title">Card title</h4>
            <!--Text-->
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Button</a>
        </div>
        <!--/.Card content-->

    </div>
    <!--/.Card-->
@endsection