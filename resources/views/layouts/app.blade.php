<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/myjquery.js') }}" defer></script>
    <script src="extensions/mobile/bootstrap-table-mobile.js"></script>



    
    @livewireStyles





    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <!-- Styles -->
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/mycss.css') }}" rel="stylesheet">
    

    



    @if (Request::segment(1) === 'home' or Request::segment(0) === '')
        <link rel="stylesheet" href="{{ asset('assets/css/weathercss.css') }}">
    
    @else
        <link rel="stylesheet" href="{{ asset('assets/css/helmicss.css') }}">
        
    @endif
    
    
</head>
<body>
    @livewireScripts
    <div id="app">
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <div class="container-fluid">
                {{-- <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>--}}
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> 

                <a class="navbar-brand" href="/home"><img src="{{ asset('assets/img/logo.png')}}" width="130" height="50"></a>



                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                        @if (Auth::check())
                            <li class="nav-item active">
                              <a class="nav-link" href="/acceuil">Accueil</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="/Nouveauevenement">Nouvel Evenement</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/Mesevenements">Mes Evenements</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/MesParticipations">Mes Participations</a>
                            </li>
             
                        @endif 
                    
                    
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Se connecter') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('S\'enregistrer') }}</a>
                                </li>
                            @endif
                        @else
                            <img src="{{url('/uploads/comptes/'.Auth::user()->photo)}}"  class="pdpcomptenav" alt="pas de pdp"/>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                                                    
                                
                                
                                  

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/MonCompte">Mon compte</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Se déconnecter') }}
                                    </a>
                                    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <a href="{{ url()->previous() }}" class="btn btn-info" style="margin: 10px">Retour</a>

        <main class="py-4">

            {{-- <div class="alert alert-danger" role="alert">
                This is a danger alert—check it out!
              </div> --}}




              @if (session()->has('message'))
                <div class=" message alert alert-danger" role="alert">
                    {{session()->get('message')}}
                </div>

                <script>
                    setTimeout(function() {
                    $('div.messagealert').hide();
                }, 3000);
                  </script>
                  
              @endif




              @if (session()->has('message1'))
              <div class="messagealert alert alert-success" role="alert">
                  {{session()->get('message1')}}
              </div>

              <script>
                setTimeout(function() {
                $('div.messagealert').hide();
            }, 3000);
              </script>
                
              @endif




            @yield('content')
        </main>
        
    </div>
</body>
</html>
