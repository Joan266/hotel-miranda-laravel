<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Hotel Miranda - @yield('title')</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite([
            'resources/sass/common.scss',
            'resources/sass/header.scss',
            'resources/sass/footer.scss',
            'resources/js/app.js'
        ])
        @stack('styles')
      </head>
    <body>
        @section('header')
            This is the master header.
        @show
 
        <main>
            @yield('content')
        </main>

        @section('footer')
            This is the master header.
        @show
        @vite([
            'resources/js/menu.js'
         ])
        @stack('scripts')
    </body>
</html>