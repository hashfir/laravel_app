<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/menu.js') }}" defer></script>
    <script src="{{ asset('js/site.min.js') }}" ></script>

    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
    {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"> --}}
    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> --}}
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css"> --}}

    <!-- Styles -->
    <link href="{{ asset('css/site.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/menu.css') }}" rel="stylesheet">

    @yield('style')
</head>

<body>
    
  <div class="grid-container">
        <div class="table_center">
                <div class="drop-down">
                  <div id="dropDown" class="drop-down__button">
                    <span class="drop-down__name">Account settings</span>
                    <i class="fa fa-bars drop-down__icon" aria-hidden="true"></i>
                    
                  </div>
                  
                  <div class="drop-down__menu-box">
                    <ul class="drop-down__menu">
                      <li data-name="profile" class="drop-down__item">Your Profile</li>
                      <li data-name="profile" class="drop-down__item">Your Profile</li>
                      <li data-name="profile" class="drop-down__item">Your Profile</li>

                    </ul>
                  </div>
                </div>
         </div>
  
   
    </div>  
    <div class="content">
            @yield('content')

    </div>

</body>
</html>