<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/tailwind.min.css">
        <style>
            *{
                font-family: "Poppins", sans-serif;
            }
            .bg-brown{
                background-color: #38191C;
            }
            .text-brown{
                color: #38191C;
            }
            .bg-yellow{
                background-color: #FDBB5F;
            }
            .text-yellow{
                color: #FDBB5F;
            }
            .bg-violet{
                background-color: #371757;
            }
            .text-violet{
                color: #371757;
            }
        </style>
        @yield('style')
    </head>
    <body>
        @yield('content')
        <script src="js/jquery.js"></script>
        @yield('script')
    </body>
</html>
