<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bar-Nahum</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicons/favicon.ico') }}" />
        <link rel="icon" type="image/png" href="{{ asset('assets/images/favicons/favicon.png') }}" />
        <!-- For iPhone 4 Retina display: -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('assets/images/favicons/apple-touch-icon-114x114-precomposed.png') }}">
        <!-- For iPad: -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('assets/images/favicons/apple-touch-icon-72x72-precomposed.png') }}">
        <!-- For iPhone: -->
        <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/images/favicons/apple-touch-icon-60x60-precomposed.png') }}">
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,400italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/color-defaults.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/swatch-beige-black.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/swatch-black-beige.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/swatch-black-white.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/swatch-black-yellow.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/swatch-blue-white.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/swatch-green-white.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/swatch-red-white.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/swatch-white-black.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/swatch-white-blue.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/swatch-white-green.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/swatch-white-red.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/swatch-yellow-black.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/fonts.min.css') }}" media="screen">
    </head>
    <body>
        <div id="content" role="main">

            <!-- header -->
            @yield('header')

            <!-- content -->
            @yield('content')

            <!-- footer -->
            @yield('footer')
        </div>

        <!-- js -->

        <script src="{{ asset('assets/js/packages.min.js') }}""></script>
        <script src="{{ asset('assets/js/theme.min.js') }}""></script>
        <script src="assets/js/contact.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script src="assets/js/map.min.js"></script>
        
        <!-- When using isotope in portfolio class set it to fitRows layout -->
        <script>
            $(document).ready( function() {
                $('.portfolio').isotope({
                    layoutMode: 'fitRows',
                    itemSelector: '.portfolio-item'
                });
            });
        </script>
        
        <!-- js annotator -->

        <script src="http://assets.annotateit.org/annotator/v1.2.10/annotator-full.min.js"></script>
        <link rel="stylesheet" href="http://assets.annotateit.org/annotator/v1.2.10/annotator.min.css">

        <script>
        /*
        $('.container').annotator()
                       .annotator('setupPlugins', null, {
                            Auth: { 
                                tokenUrl: 'http://reactor.barnahum.com/jwt/token.php'
                            },
                            Permissions: false,
                            Filter: false,
                            AnnotateItPermissions: {}
                    });
        */
        </script>

        <!-- more scripts.. -->
        <script>
            @yield('scripts')
        </script>

    </body>
</html>
