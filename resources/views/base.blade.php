<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tasks</title>
</head>
<body>
<div>
    @include('partials.links')
    @include('partials.nav')

    <main role="main" class="container">
        @yield('content')
    </main>

    @include('partials.scripts')
</div>
</body>
</html>