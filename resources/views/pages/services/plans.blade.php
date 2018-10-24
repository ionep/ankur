@extends('layouts.app')

@section('content')
    <div class='rates'>
        <div class="container">
            <h2 class="text-center">Saving Plans</h2>

            <div class="jumbotron">
                <div class="container">
                    {{-- <h3>Various Saving</h3>
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>Type</th>
                                <th>Yearly Interest</th>
                                <th>Remarks</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Regular a.</td>
                                <td>10 %</td>
                                <td>For Rs 2000</td>
                            </tr>
                            <tr>
                                <td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp b.</td>
                                <td>9 %</td>
                                <td>For Rs 500</td>
                            </tr>
                            <tr>
                                <td>Kopila</td>
                                <td>9 %</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Daily</td>
                                <td>6.5 %</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Khutruke</td>
                                <td>9 %</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Optional</td>
                                <td>6.5 %</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Special</td>
                                <td>9 %</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Guardian</td>
                                <td>10 %</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Staff</td>
                                <td>9 %</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Ankur a.</td>
                                <td colspan="2">21 months saving = 24 months equivalent payment</td>
                            </tr>
                            <tr>
                                <td>&nbsp &nbsp &nbsp &nbsp &nbsp&nbsp b.</td>
                                <td colspan="2">42 months saving = 50 months equivalent payment</td>
                            </tr>
                        </tbody>
                    </table>
                    <h3 style="padding-top:20px;">Fixed Saving</h3>
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>Type</th>
                                <th>Semi-annual Interest</th>
                                <th>Annual Interest</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>6 months</td>
                                <td>-----</td>
                                <td>10 %</td>
                            </tr>
                            <tr>
                                <td>1 year</td>
                                <td>13 %</td>
                                <td>13.5 %</td>
                            </tr>
                            <tr>
                                <td>Rs 50,000 to 5 lakhs</td>
                                <td>13 %</td>
                                <td>13.5 %</td>
                            </tr>
                            <tr>
                                <td>Rs 5 lakhs to 20 lakhs</td>
                                <td>14 %</td>
                                <td>14.5 %</td>
                            </tr>
                            <tr>
                                <td>20 lakhs and higher</td>
                                <td>15 %</td>
                                <td>15.5 %</td>
                            </tr>
                        </tbody>
                    </table> --}}
                    <span>
                        <h3>Latest saving interests: </h3><br>
                        @if(count($files)>0)
                            <select id="selectplan">
                                @foreach ($files as $file)
                                    <option value='{{$file->date}}' v-model="date">{{$file->date}}</option>
                                @endforeach
                            </select>
                        @endif
                        <br><br>
                        <a id="selectedplan" href="" class="btn btn-success">Download</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
@endsection