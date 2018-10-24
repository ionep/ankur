@extends('layouts.app')

@section('content')
    <div class='staff'>
        <div class="container">
            <h2 class="text-center">Advisor Committee</h2>

            <div class="jumbotron">
                <div class="row">

                    <div class="column">
                        <div class="card">
                            <img src="{{url('/images/logo.png')}}" alt="Staff" style="width:100%">
                            <div class="text-center">
                                <h3>Mr. Rambhakta Thapa Magar</h3>
                            </div>
                        </div>
                    </div>

                    <div class="column">
                        <div class="card">
                            <img src="{{url('/images/logo.png')}}" alt="Staff" style="width:100%">
                            <div class="text-center">
                                <h3>Mr. Ishwor Thapa Magar</h3>
                            </div>
                        </div>
                    </div>

                    <div class="column">
                        <div class="card">
                            <img src="{{url('/images/logo.png')}}" alt="Staff" style="width:100%">
                            <div class="text-center">
                                <h3>Mr. Ram Thapa Magar</h3>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection