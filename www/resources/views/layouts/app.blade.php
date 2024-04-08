<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? config('app.name', 'Daily Grow') }}</title>

    <link rel="stylesheet" href="{{asset('storage')}}/css/normalize.css">
    <link rel="stylesheet" href="{{asset('storage')}}/css/style.css?{{time()}}">
    <link rel="icon" href="{{asset('storage')}}/img/favicon.svg" type="image/svg+xml">

    <script defer src="{{asset('storage')}}/js/accordion.js?{{time()}}"></script>
</head>
<body class="page container">
    @include('layouts.header')
    @include('layouts.nav')
<main class="main">
    <div class="content">
        @yield('content')
    </div>
</main>
</body>
</html>
