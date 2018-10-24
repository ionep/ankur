@extends('layouts.app')

@section('content')

    <div id='home-carousel' class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#home-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#home-carousel" data-slide-to="1"></li>
            <li data-target="#home-carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img class="zoom" src="{{url('/images/cover3.jpg')}}" alt='Image 1 4000by1600px'>
            </div>
            <div class="item">
                <img class='zoom' src="{{url('/images/cover1.jpg')}}" alt='Image 3'>
            </div>
            <div class="item">
                <img class="zoom" src="{{url('/images/cover2.jpg')}}" alt='Image 4'>
            </div>
        </div>
    </div>

    <section id='features-home'>
        <div class="container">
            <h1 class="text-center">What can we help you with?</h1>
            <div class="row">
                <a href='openaccount' class="col-md-3">
                    <h3 class="row">
                            <span class="col-md-1"></span>
                        <span class="fa-stack fa-lg col-md-3">
                            <i class="fa fa-circle-thin fa-stack-2x"></i>
                            <i class="fa fa-money fa-stack-1x"></i>
                        </span>
                        <span class="col-md-8">Open Saving Account</span>
                    </h3>
                </a>

                <span class="col-md-1"></span>

                <a href='buyvehicle' class="col-md-3">
                    <h3 class="row">
                        <span class="col-md-1"></span>
                        <span class="fa-stack fa-lg col-md-5">
                            <i class="fa fa-circle-thin fa-stack-2x"></i>
                            <i class="fa fa-motorcycle fa-stack-1x"></i>
                        </span>
                        <span class="col-md-6">Buy new vehicle</span>
                    </h3>
                </a>

                <span class="col-md-1"></span>

                <a href="getloan" class="col-md-3">
                    <h3 class="row">
                        <span class="col-md-1"></span>
                        <span class="fa-stack fa-lg col-md-5">
                            <i class="fa fa-circle-thin fa-stack-2x"></i>
                            <i class="fa fa-dollar fa-stack-1x"></i>
                        </span>
                        <span class="col-md-6">Various loan plans</span>
                    </h3>
                </a>
            </div>
        </div>
    </section>

    <section id="members" class="jumbotron">
        <div class="container">
            <h1 class="text-center">Our services</h1>
            <div class="row">
                <div class="col-md-4 service-block">
                    <div class="card">
                        <a href='/remit'>
                        <img src="{{url('/images/remit.jpg')}}" alt="Remittance" style="width:100%; height:auto;">
                        <div class="text-center">
                            <h3>Ankur Remittance</h3>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 service-block">
                    <div class="card">
                        <a href="/online">
                        <img src="{{url('/images/online.jpg')}}" alt="online" style="width:100%; height:auto;">
                        <div class="text-center">
                            <h3>Online Utility</h3>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 service-block">
                    <div class="card">
                        <a href="/easy">
                        <img src="{{url('/images/pay.jpg')}}" alt="easy" style="width:100%; height:auto;">
                        <div class="text-center">
                            <h3>Easy Buy Easy Pay</h3>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                </div>
            </div>
        </div>
    </section>

    <section id='news' class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-md-12 panel panel-default">
                    <div class="panel-heading">
                        <p><h3 class="text-center">News</h3><small class='pull-right'><a href="/extras/news">View all<i class="fa fa-arrow-right"></i></a></small></p>
                    </div>
                    <div class="panel-body news">
                        @if (count($news)>0)
                            @foreach ($news as $n)
                                <div class="jumbotron">
                                <h4><a href="/extras/news/{{$n->id}}">{{$n->title}}</a></h4>
                                <p>Updated at <?php $data=explode(' ',$n->created_at);
                                            echo $data[0];  ?></p>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                {{-- <div class="col-md-6 panel panel-default">
                    <div class="panel-heading">
                        <h3 class="text-center">Notices</h3>
                    </div>
                    <div class="panel-body">
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    
@endsection
