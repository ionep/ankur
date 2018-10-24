@extends('layouts.app')

@section('content')
    <div class='staff'>
        <div class="container">
            <h2 class="text-center">Accounting Committee</h2>

            <div class="jumbotron">
                <div class="row">

                    <div class="column">
                        <div class="card">
                            <img src="{{url('/images/logo.gif')}}" alt="Staff" style="width:100%">
                            <div class="text-center">
                                <h3>Mr. Sujan Thapa Magar</h3>
                                <p>Coordinator</p>
                            </div>
                        </div>
                    </div>

                    <div class="column">
                        <div class="card">
                            <img src="{{url('/images/logo.gif')}}" alt="Staff" style="width:100%">
                            <div class="text-center">
                                <h3>Mr. Rajkumar Shrestha</h3>
                                <p>Member</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection