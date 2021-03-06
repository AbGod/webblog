<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Ashish Kumar Bhoi">
    <meta name="theme-color" content="#f8fafc">
    <meta name="mobile-web-app-capable" content="yes">

    @yield('meta')

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{--<script src="{{ asset('js/app.js') }}" defer></script>--}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <!-- Manifest.json File -->
    <link rel="manifest" href="{{asset('manifest.json')}}">
</head>
<body>
        @include('inc.navbar')
        <div class="container">
            @include('inc.messages')
            @yield('content')
        </div>

        <div id='app'>
        </div>
<footer class="container-fluid text-center bg-temp text-light">
    <div class="copyright-bottom">
    <p> Ashish Kumar Bhoi &copy; 2018 </p>
    </div>
</footer>
</body>
<script src="{{asset('js/app.js')}}"></script>
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    var MyApp = document.getElementById("article-ckeditor");
    if (MyApp) {
        CKEDITOR.replace('article-ckeditor');
    }
</script>
<script src="/service-worker.js"></script>
<script>
    if ('serviceWorker' in navigator) {
        window.addEventListener('load', function() {
            navigator.serviceWorker.register('/service-worker.js').then(function(registration) {
                // Registration was successful
                //console.log('ServiceWorker registration successful with scope: ', registration.scope);
            }, function(err) {
                //registration failed :(
                //console.log('ServiceWorker registration failed: ', err);
            });
        });
    }
    else {
        console.log('Service Worker Not Available in navigator')
    }
</script>

</html>
