@extends('layouts.app')

@section('content')
    <div class='staff'>
        <div class="container">
            <h2 class="text-center">Our Staffs</h2>

            <div class="jumbotron">
                <div class="row">

                    <div class="column">
                        <div class="card">
                            <img src="{{url('/images/logo.png')}}" alt="Staff" style="width:100%">
                            <div class="text-center">
                                <h3>Sushila Thapa Magar</h3>
                                <p>Manager</p>
                            </div>
                        </div>
                    </div>

                    <div class="column">
                        <div class="card">
                            <img src="{{url('/photos/bimalthapamagar.jpg')}}" alt="Staff" style="width:100%">
                            <div class="text-center">
                                <h3>Bimal Thapa Magar</h3>
                                <p>Assistant Manager</p>
                            </div>
                        </div>
                    </div>

                    <div class="column">
                        <div class="card">
                            <img src="{{url('/images/logo.png')}}" alt="Staff" style="width:100%">
                            <div class="text-center">
                                <h3>Rajee Thapa Magar</h3>
                                <p>Receptionist</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <div class="card">
                            <img src="{{url('/images/logo.png')}}" alt="Staff" style="width:100%">
                            <div class="text-center">
                                <h3>Babita Thapa Magar</h3>
                                <p>Marketing</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="column">
                        <div class="card">
                            <img src="{{url('/images/logo.png')}}" alt="Staff" style="width:100%">
                            <div class="text-center">
                                <h3>Saru Thapa Magar</h3>
                                <p>Marketing</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection