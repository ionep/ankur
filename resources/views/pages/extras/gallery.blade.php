@extends('layouts.app')

@section('content')
    <div class='rates'>
        <div class="container">
            <h2 class="text-center">Gallery</h2>
            <div class="jumbotron">
                <div class="container">
                    <div id="gallery">
                        <!-- Images used to open the lightbox -->
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{url('/images/logo.gif')}}" onclick="openModal();currentSlide(1)" class="hover-shadow">
                            </div>
                            <div class="col-md-3">
                                <img src="{{url('/images/logo.gif')}}" onclick="openModal();currentSlide(2)" class="hover-shadow">
                            </div>
                            <div class="col-md-3">
                                <img src="{{url('/images/logo.gif')}}" onclick="openModal();currentSlide(3)" class="hover-shadow">
                            </div>
                            <div class="col-md-3">
                                <img src="{{url('/images/logo.gif')}}" onclick="openModal();currentSlide(4)" class="hover-shadow">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="column">
                                <img src="{{url('/images/cover.jpg')}}" onclick="openModal();currentSlide(5)" class="hover-shadow">
                            </div>
                        </div>
                        
                        <!-- The Modal/Lightbox -->
                        <div id="myModal" class="modal">
                            <span class="close cursor" onclick="closeModal()">&times;</span>
                            <div class="modal-content">
                        
                                <div class="mySlides text-center slide">
                                    {{-- <div class="numbertext">1 / 4</div> --}}
                                    <img src="{{url('/images/logo.gif')}}" style="width:50%;height:auto;">
                                </div>
                            
                                <div class="mySlides text-center slide">
                                    {{-- <div class="numbertext">2 / 4</div> --}}
                                    <img src="{{url('/images/logo.gif')}}" style="width:50%;height:auto;">
                                </div>
                            
                                <div class="mySlides text-center slide">
                                    {{-- <div class="numbertext">3 / 4</div> --}}
                                    <img src="{{url('/images/logo.gif')}}" style="width:50%;height:auto;">
                                </div>
                            
                                <div class="mySlides text-center slide">
                                    {{-- <div class="numbertext">4 / 4</div> --}}
                                    <img src="{{url('/images/logo.gif')}}" style="width:50%;height:auto;">
                                </div>

                                <div class="mySlides text-center slide">
                                    <img src="{{url('/images/cover.jpg')}}" style="width:50%;height:auto;">
                                </div>
                            
                                <!-- Next/previous controls -->
                                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                            
                                {{-- <!-- Caption text -->
                                <div class="caption-container">
                                    <p id="caption"></p>
                                </div>
                            
                                <!-- Thumbnail image controls -->
                                <div class="column">
                                    <img class="demo" src="{{url('/images/logo.gif')}}" onclick="currentSlide(1)" alt="Nature">
                                </div>
                            
                                <div class="column">
                                    <img class="demo" src="{{url('/images/logo.gif')}}" onclick="currentSlide(2)" alt="Snow">
                                </div>
                            
                                <div class="column">
                                    <img class="demo" src="{{url('/images/logo.gif')}}" onclick="currentSlide(3)" alt="Mountains">
                                </div>
                            
                                <div class="column">
                                    <img class="demo" src="{{url('/images/logo.gif')}}" onclick="currentSlide(4)" alt="Lights">
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection