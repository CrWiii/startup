<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles App-->
    <link href="/css/app.css" rel="stylesheet">
    
    <!-- Styles StartUp-->
    <link href="/css/startup.css" rel="stylesheet">
    
    <!-- Style Font Awesome -->
    <link rel="stylesheet" href="/css/font-awesome.min.css">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                <li class="{{ set_active(['/', '/']) }}"><a href="{{ url('/') }}">{{ trans('startup.nav.front.home') }}</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ trans('startup.nav.front.language') }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/setlang/en') }}">
                                      @if ( session()->get('locale') === 'en') <i class="fa fa-check" aria-hidden="true"></i> @endif  {{ trans('startup.english') }}
                                    </a>  
                                 </li>                                 
                                <li>
                                    <a href="{{ url('/setlang/no') }}">
                                    @if ( session()->get('locale') === 'no') <i class="fa fa-check" aria-hidden="true"></i> @endif {{ trans('startup.norwegian') }}
                                    </a>  
                                 </li>  
                            </ul>
                        </li>    
                    
                    @if (Auth::guest())
                        <li class="{{ set_active(['login', 'login']) }}"><a href="{{ url('/login') }}">{{ trans('startup.nav.front.login') }}</a></li>
                        <li class="{{ set_active(['register', 'register']) }}"><a href="{{ url('/register') }}">{{ trans('startup.nav.front.register') }}</a></li>
                    @else
                    
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle profile-image" data-toggle="dropdown" role="button" aria-expanded="false">
                                <img src="/uploads/avatars/{{ Auth::user()->profile_photo }}" width="30" height="30" class="img-circle"> 
                                    {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                
                                @hasrole('User')
                                <li>
                                    <a href="{{ url('/profile') }}">{{ trans('startup.nav.front.profile') }}</a>
                                </li> 
                                @endhasrole
                                
                                @hasrole('Moderator')
                                <li>
                                    <a href="{{ url('/admin') }}">{{ trans('startup.nav.front.admin') }}</a>
                                </li>   
                                @endhasrole
                                
                                <li>
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        {{ trans('startup.nav.front.logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

 <div class="navbar navbar-default navbar-fixed-bottom">
    <div class="container">
      <p class="navbar-text pull-left">{{ config('app.name', 'Laravel') }} -
           {{ trans('startup.built_with') }} <i class="fa fa-coffee" aria-hidden="true"></i> {{ trans('startup.and') }} <i class="fa fa-heart" aria-hidden="true"></i>
      </p>
      
      <a href="{{ config('app.url', 'http://localhost') }}" class="navbar-text pull-right">
      {{ trans('startup.version') }} 1.1</a>
    </div>
    
    
  </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script src="/js/startup.js"></script>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip(); 
        });
    </script>      
@yield('scripts')  
</body>
</html>
