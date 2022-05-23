<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon"> <!-- Favicon-->
        <title>@yield('title') - {{ config('app.name') }}</title>
        <meta name="description" content="@yield('meta_description', config('app.name'))">
        <meta name="author" content="@yield('meta_author', config('app.name'))">
        @yield('meta')

        {{-- See https://laravel.com/docs/5.5/blade#stacks for usage --}}
        @stack('before-styles')


        
        <!-- Icons -->
        {{-- <link rel="icon" type="image/png" href="https://www.oui.sncf/themes/custom/mercure/components/images/favicons/favicon-196x196.png" />
        <link rel="icon" type="image/png" href="https://www.oui.sncf/themes/custom/mercure/components/images/favicons/favicon-96x96.png" />
        <link rel="icon" type="image/png" href="https://www.oui.sncf/themes/custom/mercure/components/images/favicons/favicon-32x32.png" />
        <link rel="icon" type="image/png" href="https://www.oui.sncf/themes/custom/mercure/components/images/favicons/favicon-16x16.png" />
        <link rel="icon" type="image/png" href="https://www.oui.sncf/themes/custom/mercure/components/images/favicons/favicon-128x128.png" />        

        <!-- Custom Css -->
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/color_skins.css') }}"> --}}

        @stack('after-styles')

    </head>
    
    
    <?php 
        $setting = !empty($_GET['theme']) ? $_GET['theme'] : '';
        $theme = "theme-cyan";
        $menu = "";
        if ($setting == 'p') {
            $theme = "theme-purple";
        } else if ($setting == 'b') {
            $theme = "theme-blue";
        } else if ($setting == 'g') {
            $theme = "theme-green";
        } else if ($setting == 'o') {
            $theme = "theme-orange";
        } else if ($setting == 'bl') {
            $theme = "theme-blush";
        } else {
             $theme = "theme-cyan";
        }

    ?>
    <body class="<?= $theme ?>">

        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="m-t-30"><img src="{{ asset('assets/img/logo.png') }}" width="48" height="48" alt="SNCF"></div>
                <p>Patientez svp...</p>        
            </div>
        </div>

        <div id="wrapper">

            @yield('content')

        </div>

        <!-- Scripts -->
        @stack('before-scripts')

        <script src="{{ asset('assets/bundles/libscripts.bundle.js') }}"></script>    
        <script src="{{ asset('assets/bundles/vendorscripts.bundle.js') }}"></script>
        
        <script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>

        @stack('after-scripts')
        
    </body>
</html>
