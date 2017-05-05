<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>DressRentalService</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>

        @include('layouts._navbar')
        <div class="container">
            @yield('content')
        </div>

        <script src="/js/app.js" charset="utf-8"></script>
        @yield('script')


    </body>
</html>
