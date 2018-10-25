<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{-- config('app.name', 'Ankur') --}}Ankur Saving and Credit Co-operative Ltd</title>

    <link href="{{url('/images/logo.gif')}}" rel="icon">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('inc.sidebar')
        @if(Route::getCurrentRoute()->uri() == '/')
            @include('inc.title')
            <div id="scrollStart">
                @include('inc.navbar')
            </div>
        @else
            @include('inc.navbar')
        @endif
        @include('inc.messages')
        @yield('content')
        <br>
        @include('inc.footer')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    {{-- <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script> --}}
    <script>
        $(document).ready(function(){
            $("#selectedloan").attr('href','/file/'+$('#selectloan').val()+'/loan');
            $("#selectloan").on('change',function(){
                $("#selectedloan").attr('href','/file/'+$('#selectloan').val()+'/loan');
            });
            
            $("#selectedplan").attr('href','/file/'+encodeURIComponent($('#selectplan').val())+'/plan');
            $("#selectplan").on('change',function(){
                $("#selectedplan").attr('href','/file/'+encodeURIComponent($('#selectplan').val())+'/plan');
            });

            $('html, body').delay(2000).animate({
                scrollTop: $("#scrollStart").offset().top
            }, 500);
        });
    </script>
    <script>
        // Open the Modal
        function openModal() {
            document.getElementById('myModal').style.display = "block";
        }
        
        // Close the Modal
        function closeModal() {
            document.getElementById('myModal').style.display = "none";
        }
        
        var slideIndex = 1;
        showSlides(slideIndex);
        
        // Next/previous controls
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }
        
        // Thumbnail image controls
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }
        
        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            // var dots = document.getElementsByClassName("demo");
            // var captionText = document.getElementById("caption");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
                slides[i].style.backgroundColor="black";
            }
            // for (i = 0; i < dots.length; i++) {
            //     dots[i].className = dots[i].className.replace(" active", "");
            // }
            slides[slideIndex-1].style.display = "block";
            // dots[slideIndex-1].className += " active";
            // captionText.innerHTML = dots[slideIndex-1].alt;
        }
    </script>
</body>
</html>
