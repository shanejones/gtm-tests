<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        
        @yield('head')
        
        <link rel="stylesheet" href="{{ mix('/css/main.css') }}">
    </head>
    <body class="font-sans antialiased">
        @yield('content')
        @yield('script')
    </body>
</html>
