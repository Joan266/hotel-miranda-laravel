<html>
<html lang="en">
    <head>
        <title>Hotel Miranda Home Page - @yield('title')</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <link rel="stylesheet" href="styles/common.css">
        <link rel="stylesheet" href="styles/footer.css">
        <link rel="stylesheet" href="styles/header.css">
        <link rel="stylesheet" href="styles/home/home.css">
        <link rel="stylesheet" href="styles/home/swiper/facilities.css">
        <link rel="stylesheet" href="styles/home/swiper/food.css">
        <link rel="stylesheet" href="styles/home/swiper/menu.css">
        <link rel="stylesheet" href="styles/home/swiper/rooms.css">
  
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
 
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="scripts/swiper-init.js"></script>
        <script src="scripts/menu.js"></script>
    </body>
</html>