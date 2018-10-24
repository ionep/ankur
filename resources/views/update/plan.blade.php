@extends('layouts.app')

@section('content')
    <div class='rates' id='hours'>
        <div class="container">
            <h2 class="text-center">Upload New Saving interest</h2>

            <div class="jumbotron">
                <div class="container">
                    {!! Form::open(['action' => 'UpdateController@updateplan', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                        <div class="form-group">
                            {{Form::label('date', 'Upload Date')}}
                            {{Form::text('date', '', ['class' => '', 'placeholder' => 'Year'])}} 
                        </div>
                        <div class="form-group">
                            {{Form::file('plan')}}
                        </div>
                        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection