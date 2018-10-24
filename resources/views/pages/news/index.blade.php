@extends('layouts.app')

@section('content')
    <div class='rates'>
        <div class="container">
            <h2 class="text-center">News</h2>
            <div class="news">
                <div class="jumbotron">
                    <div class="container">
                        @if (count($news)>0)
                            <?php $count=1; ?>
                            @foreach ($news as $n)
                                <div style="border-bottom:1px solid black;">
                                    <h3>{{$count}}) <a href="/extras/news/{{$n->id}}">{{$n->title}}</a></h3>
                                    <p>Updated at <?php $data=explode(' ',$n->created_at);
                                        echo $data[0];
                                        $count++;  ?></p>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection