@extends('layouts.app')

@section('content')
    <div class='rates' id='hours'>
        <div class="container">
            <h2 class="text-center">All uploaded interest rates</h2>

            <div class="jumbotron">
                <div class="container">
                    <?php $count=1; ?>
                    @if(count($plans)>0)
                    @foreach ($plans as $plan)
                        <div class="row">
                            <div class="col-md-4">
                                <p>{{$count}}) {{$plan->date}}</p>
                            </div>
                            <div class="col-md-4">
                                <a href="/file/{{$plan->date}}/plan" class="btn btn-success">Download</a>
                            </div>
                            <div class="col-md-4">
                                <a href="{{route('plan.destroy',$plan->id)}}" class="btn btn-danger">Delete</a>
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