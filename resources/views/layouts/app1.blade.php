<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/caacf6ad33.js" crossorigin="anonymous"></script>
        
    </head>
    <body id="nice2">
        @include('inc.navbar2')
        <div>
            @yield('content')
        </div>

        <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
            $('.ckeditor').ckeditor();
            });
        </script>
    </body>
</html>
