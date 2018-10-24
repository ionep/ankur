@extends('layouts.app')

@section('content')
    <div class='rates'>
        <div class="container">
            <h2 class="text-center">Loan Facility</h2>

            <div class="jumbotron">
                <div class="container">
                    {{-- <h3>Rates</h3>
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>Type</th>
                                <th>Annual Interest</th>
                                <th>Remarks</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Business a.</td>
                                <td>17 %</td>
                                <td>Daily</td>
                            </tr>
                            <tr>
                                <td>&nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp b.</td>
                                <td>17.5 %</td>
                                <td>Monthly</td>
                            </tr>
                            <tr>
                                <td>Real State a.</td>
                                <td>17.5 %</td>
                                <td>Repayment</td>
                            </tr>
                            <tr>
                                <td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp b.</td>
                                <td>20 %</td>
                                <td>Interest Only</td>
                            </tr>
                            <tr>
                                <td>Education</td>
                                <td>17 %</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Hire Purchase a.</td>
                                <td>16 %</td>
                                <td>Daily</td>
                            </tr>
                            <tr>
                                <td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                                        &nbsp &nbsp b.</td>
                                <td>16.5 %</td>
                                <td>Monthly</td>
                            </tr>
                            <tr>
                                <td>Agriculture a.</td>
                                <td>17 %</td>
                                <td>Daily</td>
                            </tr>
                            <tr>
                                <td> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                                        &nbsp &nbsp&nbsp b.</td>
                                <td>17.5 %</td>
                                <td>Monthly</td>
                            </tr>
                            <tr>
                                <td>Share Purchase</td>
                                <td>17 %</td>
                                <td>Half Yearly (6 months)</td>
                            </tr>
                            <tr>
                                <td>Dhito loan a.</td>
                                <td>17 %</td>
                                <td>Daily</td>
                            </tr>
                            <tr>
                                <td> &nbsp &nbsp &nbsp &nbsp &nbsp
                                        &nbsp &nbsp &nbsp &nbsp b.</td>
                                <td>17.5 %</td>
                                <td>Monthly</td>
                            </tr>
                            <tr>
                                <td>Health loan</td>
                                <td>17 %</td>
                                <td>Monthly</td>
                            </tr>
                        </tbody>
                    </table> --}}
                    <span>
                        <h3>Latest loan rates: </h3>
                        <br> 
                        @if(count($files)>0)
                            <select id="selectloan">
                                @foreach ($files as $file)
                                    <option value='{{$file->date}}' v-model="date">{{$file->date}}</option>
                                @endforeach
                            </select>
                        @endif
                        <br><br>
                        <a id="selectedloan" href="" class="btn btn-success">Download</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    
@endsection