@extends('gaujmaliete/layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="box">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="{{ url('/') }}/images/k1.jpg" alt="Karuselis">
                        </div>

                        <div class="item">
                            <img src="{{ url('/') }}/images/k2.jpg" alt="Karuselis">
                        </div>

                        <div class="item">
                            <img src="{{ url('/') }}/images/k3.jpg" alt="Flower">
                        </div>

                        <div class="item">
                            <img src="{{ url('/') }}/images/k4.jpg" alt="Flower">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="left_btn" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="right_btn" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection