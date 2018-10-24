@extends('layouts.app')

@section('content')
    <div class='rates'>
        <div class="container">
            <div class="news">
                <div class="jumbotron">
                    <div class="container" id="newsbody">
                        @if (count($news)>0)
                            <h2>{{$news->title}}</h2>
                            <img src="{{URL::to('/')}}/news/{{$news->cover_image}}" style="width:100%; height:auto">
                            <br><br>
                            <p>
                                <?php
                                    // replace /n by <br> to display in html format
                                    echo nl2br(e($news->body)); 
                                ?>
                            </p>
                            <small><b>Updated at: <?php $data=explode(' ',$news->created_at);
                                echo $data[0];?></b></small><br><br>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <a href="{{ URL::previous() }}" class="btn btn-default col-md-1">Go Back</a>
                                <div class="col-md-1"></div>
                                @if(Auth::user())
                                    <a href="/extras/news/{{$news->id}}/edit" class="btn btn-default col-md-1">Edit</a>
                                    <div class="col-md-1"></div>
                                    {!! Form::open(['action' => ['NewsController@destroy', $news->id], 'method' => 'POST', 'class' => 'col-md-1']) !!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
                                    {!! Form::close() !!}
                                    <div class="col-md-6"></div>
                                @else
                                    <div class="col-md-9"></div>
                                @endif
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection