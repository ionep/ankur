@extends('layouts.app')

@section('content')
<div id="dashboard">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Settings</div>

                    <div class="panel-body">
                        Welcome to Admin Panel.
                        <br><br>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">Saving Interests</th>
                                    <th class="text-center"><a href="/update/plan" class="btn btn-success" style="color:white">Upload New</a></th>
                                    <th class="text-center"><a href="/view/plan" class="btn btn-success" style="color:white">View All</a></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th class="text-center">Loan Rates &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</th>
                                    <th class="text-center"><a href="/update/loan" class="btn btn-success" style="color:white">Upload New</a></th>
                                    <th class="text-center"><a href="/view/loan" class="btn btn-success" style="color:white">View All</a></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th class="text-center">News &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;</th>
                                    <th class="text-center"><a href="/extras/news/create" class="btn btn-success" style="color:white">Upload New</a></th>
                                    <th class="text-center"><a href="/extras/news" class="btn btn-success" style="color:white">View All</a></th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
