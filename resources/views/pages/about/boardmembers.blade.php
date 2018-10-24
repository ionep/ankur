@extends('layouts.app')

@section('content')
    <div class='staff'>
        {{-- <div class="container"> --}}
            <h2 class="text-center">Board Members</h2>

            <div class="jumbotron">
                <div class="row">
                    <div class="column">
                    </div>
                    <div class="column">
                    </div>
                    <div class="column">
                        <div class="card">
                            <img src="{{url('/images/logo.gif')}}" alt="Staff" style="width:100%">
                            <div class="text-center">
                                <h3>Mr. Suman Thapa Magar</h3>
                                <p>Chairman</p>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                    </div>
                    <div class="column">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="column">
                    </div>
                    <div class="column">
                        <div class="card">
                            <img src="{{url('/images/logo.gif')}}" alt="Staff" style="width:100%">
                            <div class="text-center">
                                <h3>Mr. Krishna Thapa Magar</h3>
                                <p>Vice Chairman</p>
                            </div>
                        </div>
                    </div>

                    <div class="column">
                        <div class="card">
                            <img src="{{url('/images/logo.gif')}}" alt="Staff" style="width:100%">
                            <div class="text-center">
                                <h3>Mr. Krishna Thapa Magar</h3>
                                <p>Secretary</p>
                            </div>
                        </div>
                    </div>

                    <div class="column">
                        <div class="card">
                            <img src="{{url('/images/logo.gif')}}" alt="Staff" style="width:100%">
                            <div class="text-center">
                                <h3>Mr. Samjhana Thapa Magar</h3>
                                <p>Treasurer</p>
                            </div>
                        </div>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="column">
                        <div class="card">
                            <img src="{{url('/images/logo.gif')}}" alt="Staff" style="width:100%">
                            <div class="text-center">
                                <h3>Mr. Shekhar Thapa Magar</h3>
                                <p>Member</p>
                            </div>
                        </div>
                    </div>

                    <div class="column">
                        <div class="card">
                            <img src="{{url('/images/logo.gif')}}" alt="Staff" style="width:100%">
                            <div class="text-center">
                                <h3>Mr. Kumar Thapa Magar</h3>
                                <p>Member</p>
                            </div>
                        </div>
                    </div>

                    <div class="column">
                        <div class="card">
                            <img src="{{url('/images/logo.gif')}}" alt="Staff" style="width:100%">
                            <div class="text-center">
                                <h3>Mr. Mira Thapa Magar</h3>
                                <p>Member</p>
                            </div>
                        </div>
                    </div>

                    <div class="column">
                        <div class="card">
                            <img src="{{url('/images/logo.gif')}}" alt="Staff" style="width:100%">
                            <div class="text-center">
                                <h3>Mr. Hari Thapa Magar</h3>
                                <p>Member</p>
                            </div>
                        </div>
                    </div>

                    <div class="column">
                        <div class="card">
                            <img src="{{url('/images/logo.gif')}}" alt="Staff" style="width:100%">
                            <div class="text-center">
                                <h3>Mr. Jayaram Thapa Magar</h3>
                                <p>Member</p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-3">
                        <div class="container">
                        <img src="{{url('/images/logo.gif')}}" alt="Manager" class="image" style="width:200px; height:auto;">
                        <div class="middle">
                            <a class="btn btn-success" href=''>Contact</a>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-center">
                        <h3>Mr. Suman Thapa Magar</h3>
                        <h4>Chairman</h4>
                    </div>
                    <div class="col-md-2"></div>
                </div>

                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-6 text-center">
                            <h3>Mr. Krishna Thapa Magar</h3>
                            <h4>Vice Chairman</h4>
                        </div>
                    <div class="col-md-3">
                        <div class="container">
                        <img src="{{url('/images/logo.gif')}}" alt="Manager" class="image" style="width:200px; height:auto;">
                        <div class="middle">
                            <a class="btn btn-success" href=''>Contact</a>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>

                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-3">
                        <div class="container">
                        <img src="{{url('/images/logo.gif')}}" alt="Manager" class="image" style="width:200px; height:auto;">
                        <div class="middle">
                            <a class="btn btn-success" href=''>Contact</a>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-center">
                        <h3>Mr. Krishna Thapa Magar</h3>
                        <h4>Secretary</h4>
                    </div>
                    <div class="col-md-2"></div>
                </div>

                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-6 text-center">
                            <h3>Mrs. Samjhana Dhungana</h3>
                            <h4>Treasurer</h4>
                        </div>
                    <div class="col-md-3">
                        <div class="container">
                        <img src="{{url('/images/logo.gif')}}" alt="Manager" class="image" style="width:200px; height:auto;">
                        <div class="middle">
                            <a class="btn btn-success" href=''>Contact</a>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>

                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-3">
                        <div class="container">
                        <img src="{{url('/images/logo.gif')}}" alt="Manager" class="image" style="width:200px; height:auto;">
                        <div class="middle">
                            <a class="btn btn-success" href=''>Contact</a>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-center">
                        <h3>Mr. Shekhar Thapa Magar</h3>
                        <h4>Member</h4>
                    </div>
                    <div class="col-md-2"></div>
                </div>

                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-6 text-center">
                            <h3>Mr. Hari B. Thapa Magar</h3>
                            <h4>Member</h4>
                        </div>
                    <div class="col-md-3">
                        <div class="container">
                        <img src="{{url('/images/logo.gif')}}" alt="Manager" class="image" style="width:200px; height:auto;">
                        <div class="middle">
                            <a class="btn btn-success" href=''>Contact</a>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>

                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-3">
                        <div class="container">
                        <img src="{{url('/images/logo.gif')}}" alt="Manager" class="image" style="width:200px; height:auto;">
                        <div class="middle">
                            <a class="btn btn-success" href=''>Contact</a>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-center">
                        <h3>Mr. Jayaram Thapa Magar</h3>
                        <h4>Member</h4>
                    </div>
                    <div class="col-md-2"></div>
                </div>

                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-6 text-center">
                            <h3>Mr. Mira Thapa Magar</h3>
                            <h4>Member</h4>
                        </div>
                    <div class="col-md-3">
                        <div class="container">
                        <img src="{{url('/images/logo.gif')}}" alt="Manager" class="image" style="width:200px; height:auto;">
                        <div class="middle">
                            <a class="btn btn-success" href=''>Contact</a>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div> --}}

            </div>
        </div>
    </div>
@endsection