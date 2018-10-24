@extends('layouts.app')

@section('content')
    <div class='rates' id='hours'>
        <div class="container">
            <h2 class="text-center">All uploaded loan rates</h2>

            <div class="jumbotron">
                <div class="container">
                    <?php $count=1; ?>
                    @if(count($loans)>0)
                    @foreach ($loans as $loan)
                        <div class="row">
                            <div class="col-md-4">
                                <p>{{$count}}) {{$loan->date}}</p>
                            </div>
                            <div class="col-md-4">
                                <a href="/file/{{$loan->date}}/loan" class="btn btn-success">Download</a>
                            </div>
                            <div class="col-md-4">
                                <a href="{{route('loan.destroy',$loan->id)}}" class="btn btn-danger">Delete</a>
                            </div>
                        </div>
                        <?php $count++; ?>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection