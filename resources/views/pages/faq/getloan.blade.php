@extends('layouts.app')

@section('content')
    <div class='rates info'>
        <div class="container">
            <h2 class="text-center">Get loans</h2>
            
            <div class="jumbotron">
                <div class="container">
                    <h3>Requirements</h3>
                    <ul class="list-group">
                        <li class="list-item"><p>Loan form</p></li>
                        <li class="list-item"><p>2 passport-sized photos</p></li>
                        <li class="list-item"><p>1 photocopy of citizenship</p></li>
                    </ul>
                    <h3>Procedure</h3>
                    <ol class="list-group">
                        <li class="list-item"><p>Contact office for form.</p></li>
                        <li class="list-item"><p>Fill up the form with necessary details.</p></li>
                        <li class="list-item"><p>Submit the form along with the photos and photocopy of citizenship.</p></li>
                        <li class="list-item"><p>Wait for the loan to pass.</p></li>
                        <li class="list-item"><p>After it is passed, we will contact you.</p></li>
                    </ol>
                    <p>Different loan plans are provided <a href='/loans'>here</a>.</p>
                    <p>For further details <a href='/contact'>contact</a> us. 
                </div>
            </div>
        </div>
    </div>
@endsection