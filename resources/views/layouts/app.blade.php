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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    @stack('styles')
</head>
<body>
    @include('partials.header')  

    @yield('content')

    @include('partials.footer') 

    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            @if (session('error'))
                Toastify({
                    className: "toastError",
                    text: "{{ session('error') }}",
                    duration: 3000, // Duration of the notification
                    gravity: "top", // Position of the notification (top or bottom)
                    offset: {
                        y: 150
                    },
                    style: {
                        background: "linear-gradient(to right, #FF5F6D, #FFC371)"
                    }
                }).showToast();
            @endif
            @if (session('success'))
                Toastify({
                    className: "toastSuccess",
                    text: "{{ session('success') }}",
                    duration: 3000, // Duration of the notification
                    gravity: "top", // Position of the notification (top or bottom)
                    offset: {
                        y: 150
                    },
                    style: {
                        background: "linear-gradient(to right, #00b09b, #96c93d)"
                    }
                }).showToast();
            @endif
        });
    </script>

    @vite([
        'resources/js/menu.js'
    ])
    @stack('scripts')
</body>
</html>
