<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('meta-title', 'Gonshim Home')</title>

    {{ HTML::style('assets/css/bootstrap.min.css') }}
    {{ HTML::style('assets/css/style.css') }}
    {{ HTML::style('assets/css/modern-business.css') }}
    {{ HTML::style('assets/font-awesome/css/font-awesome.min.css') }}
</head>

<body>
    @include('layouts/partials/navbar')
    <!-- yield only on landing page (needs to be refactored) -->
    @yield('content-landing')   

    <!-- regular pages -->
    <div class="container">
        <div class="row">
            <div class="col-md-7">
            @yield('content')
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>    

    {{ HTML::script('assets/js/modern-business.js') }}  
    
</body>
</html>
