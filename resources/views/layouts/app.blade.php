<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <title>Mr. Bin</title>

    @yield('styles')

</head>
<body>

<div class="jumbotron">
    <h1 class="display-4">Bin Tracker</h1>
    <p class="lead">Track bin automatically.</p>
</div>

<div class="container pt-4 pb-4">

    @yield('content')

</div>

<script src="/js/app.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js" charset="utf-8"></script>
<script src="/js/jquery.knob.min.js" charset="utf-8"></script>

@yield('scripts')

</body>
</html>
