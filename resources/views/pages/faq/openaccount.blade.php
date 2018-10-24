@extends('layouts.app')

@section('content')
    <div class='rates info'>
        <div class="container">
            <h2 class="text-center">Open Savings Account</h2>

            <div class="jumbotron">
                <div class="container">
                    <h3>Requirements</h3>
                    <ul class="list-group">
                        <li class="list-item"><p>1 Photocopy of Citizenship</p></li>
                        <li class="list-item"><p>2 passport-sized photos</p></li>
                        <li class="list-item"><p>Account deposit Form</p></li>
                    </ul>
                    <h3>Procedure</h3>
                    <ol class="list-group">
                        <li class="list-item"><p>Contact office for form.</p></li>
                        <li class="list-item"><p>Fill up the form with necessary details.</p></li>
                        <li class="list-item"><p>Submit the form along with the photos and photocopy of citizenship.</p></li>
                    </ol>
                    <p>Different saving plans are provided <a href='/plans'>here</a>.</p>
                    <p>For further details <a href='/contact'>contact</a> us. 
                </div>
            </div>
        </div>
    </div>
@endsection