@extends('frontend.layout')
@section('welcomeActive', 'navactive')
@section('content')

    <div id="top" class="starter_container bg">
        <div class="follow_container">
            <div class="col-md-6 col-md-offset-3">
                <h2 class="top-title">BalearSkills</h2>
            </div>
        </div>
    </div>

    <section id="story" class="description_content">
        <div class="text-content container">
            <div class="col-md-6">
                <h1>Sobre Nosotros</h1>
                <div class="fa fa-cutlery fa-2x"></div>
                <p class="desc-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae dicta eaque esse ex,
                    laudantium maiores mollitia omnis qui quidem veniam? Aliquam amet architecto consequatur cum deleniti
                    dolorem doloremque earum et excepturi harum incidunt ipsam labore maiores minus obcaecati odio optio,
                    provident quibusdam quis ratione repellendus sequi soluta tempora tempore voluptatum!</p>
            </div>
            <div class="col-md-6">
                <div class="img-section">
                    <img src="imgs/coffee1.jpg" width="250" height="220">
                    <img src="imgs/coffe2.jpg" width="250" height="220">
                    <div class="img-section-space"></div>
                    <img src="imgs/coffe3.jpg" width="250" height="220">
                    <img src="imgs/coffe4.jpg" width="250" height="220">
                </div>
            </div>
        </div>
    </section>
    <br />

    <div class="parallax p1"></div>

    <section id="story" class="description_content">
        <div class="text-content container">

            <div class="col-md-6">
                <div class="img-section">
                    <img src="imgs/restaurant1.jpg" width="250" height="220">
                    <img src="imgs/restaurant1.jpg" width="250" height="220">
                    <div class="img-section-space"></div>
                    <img src="imgs/restaurant1.jpg" width="250" height="220">
                    <img src="imgs/restaurant1.jpg" width="250" height="220">
                </div>
            </div>
            <div class="col-md-6">
                <h1>{{ $establishments[0]->name }}</h1>
                <div class="fa fa-cutlery fa-2x"></div>
                <p class="desc-text">{{ $establishments[0]->description_esp }}</p>
            </div>
        </div>
    </section>
    <br />
    <div class="parallax p2"></div>
    <section id="story" class="description_content">
        <div class="text-content container">

            <div class="col-md-6">
                <h1>{{ $establishments[1]->name }}</h1>
                <div class="fa fa-cutlery fa-2x"></div>
                <p class="desc-text">{{ $establishments[1]->description_esp }}</p>
            </div>
            <div class="col-md-6">
                <div class="img-section">
                    <img src="imgs/restaurant2.jpg" width="250" height="220">
                    <img src="imgs/restaurant2.jpg" width="250" height="220">
                    <div class="img-section-space"></div>
                    <img src="imgs/restaurant2.jpg" width="250" height="220">
                    <img src="imgs/restaurant2.jpg" width="250" height="220">
                </div>
            </div>
        </div>
    </section>


    <div class="parallax p3"></div>
    <section id="story" class="description_content">
        <div class="text-content container">
            <div class="col-md-6">
                <div class="img-section">
                    <img src="imgs/restaurant3.jpg" width="250" height="220">
                    <img src="imgs/restaurant3.jpg" width="250" height="220">
                    <div class="img-section-space"></div>
                    <img src="imgs/restaurant3.jpg" width="250" height="220">
                    <img src="imgs/restaurant3.jpg" width="250" height="220">
                </div>
            </div>
            <div class="col-md-6">
                <h1>{{ $establishments[2]->name }}</h1>
                <div class="fa fa-cutlery fa-2x"></div>
                <p class="desc-text">{{ $establishments[2]->description_esp }}</p>
            </div>
        </div>
    </section>

    <div class="parallax p4"></div>
    <section id="story" class="description_content">
        <div class="text-content container">

            <div class="col-md-6">
                <h1>{{ $establishments[3]->name }}</h1>
                <div class="fa fa-cutlery fa-2x"></div>
                <p class="desc-text">{{ $establishments[3]->description_esp }}</p>
            </div>
            <div class="col-md-6">
                <div class="img-section">
                    <img src="imgs/restaurant4.jpg" width="250" height="220">
                    <img src="imgs/restaurant4.jpg" width="250" height="220">
                    <div class="img-section-space"></div>
                    <img src="imgs/restaurant4.jpg" width="250" height="220">
                    <img src="imgs/restaurant4.jpg" width="250" height="220">
                </div>
            </div>
        </div>
    </section>

@endsection