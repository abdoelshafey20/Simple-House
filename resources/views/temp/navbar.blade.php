
<div class="container">

 <div class="placeholder">
    <div class="parallax-window" data-parallax="scroll" data-image-src={{asset('img/simple-house-01.jpg')}}>
        <div class="tm-header">
            <div class="row tm-header-inner">
                <div class="col-md-6 col-12">
                    <img src={{asset('img/simple-house-logo.png')}} alt="Logo" class="tm-site-logo" />
                    <div class="tm-site-text-box">
                        <h1 class="tm-site-title">Simple House</h1>
                        <h6 class="tm-site-description">new restaurant template</h6>
                    </div>
                </div>
                <nav class="col-md-7 col-12 tm-nav">
                    <ul class="tm-nav-ul">
                        <li class="tm-nav-li"><a href={{route('welcomepage')}} class="tm-nav-link active">Home</a></li>
                        <li class="tm-nav-li"><a href={{route('about')}} class="tm-nav-link">About</a></li>
                        <li class="tm-nav-li"><a href={{route('contact')}} class="tm-nav-link">Contact</a></li>
                       
                       
                        <li class="tm-nav-li"> <a href={{route('home')}} class="tm-nav-link">Dashboard</a></li>
                       
                        
                     

                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li class="tm-nav-li">
                            <a class="tm-nav-link"   rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                {{ $properties['native'] }}
                            </a>
                        </li>
                    @endforeach
                        <!-- Authentication Links -->
                        @guest
                            <li class="tm-nav-li">
                                <a class="tm-nav-link" href={{ route('login') }}>{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="tm-nav-li">
                                    <a class="tm-nav-link" href={{ route('register') }}>{{ __('Register') }}</a>
                                   
                                </li>
                            @endif
                        @else
                            <li class="tm-nav-li dropdown">
                                <a id="navbarDropdown" class="tm-nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item " href={{ route('logout') }}
                                        onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action={{ route('logout') }} method="POST" class="d-none tm-nav-link">
                                        @csrf
                                                                                            
                                                    {{-- 

                                                    @if (Route::has('login'))
                                                    <div class="top-right links">
                                                        @auth
                                                            <a href="{{ url('/home') }}">Home</a>
                                                        @else
                                                            <a href="{{ route('login') }}">Login</a>

                                                            @if (Route::has('register'))
                                                                <a href="{{ route('register') }}">Register</a>
                                                            @endif
                                                        @endauth
                                                    </div>
                                                    @endif --}}
                                    </form>
                                </div>
                            </li>
                        @endguest

                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
</div>