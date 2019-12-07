<nav class="navbar navbar-expand-md navbar-dark bg-black shadow-sm">
    <div class="container-fluid py-4">
        <a class="navbar-brand ml-md-5" href="{{ url('/') }}">
            <div class="logo-fade-container ml-md-4">
                <div class="fadein">

                    <img id="logo-2" src="/images/ocean-white.png" alt="Alpine Elements Careers">
                    <img id="logo-1" src="/images/white-red.png" alt="Alpine Elements Careers">
                </div>
            </div>

        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                <li class="nav-item mr-3">
                    <a class="nav-link text-white text-uppercase" href="/ski-jobs">Winter Ski Jobs</a>
                </li>

                <li class="nav-item mr-3">
                    <a class="nav-link text-white text-uppercase" href="/beach-club-jobs">Beach Club Jobs</a>
                </li>

                <li class="nav-item mr-3">
                    <a class="nav-link text-white text-uppercase" href="/summer-jobs">Summer Alps Jobs</a>
                </li>



                <li class="nav-item mr-3">
                    <a class="nav-link text-white text-uppercase" href="/yacht-jobs">Yacht Jobs</a>
                </li>

                <li class="nav-item mr-3">
                    <a class="nav-link text-white text-uppercase" href="/office-jobs">Office Jobs</a>
                </li>


                <li class="nav-item mr-3">
                    <a class="nav-btn btn btn-primary text-uppercase"
                        href="https://twitter.com/alpineelements">#beinyourelement</a>
                </li>


                {{-- @if (Route::has('register'))
                <li class="nav-item mr-3">
                    <a class="nav-link text-white text-uppercase" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif --}}
                @else
                <li class="nav-item mr-3">
                    <a class="nav-link text-white text-uppercase" href="/posts">Blog Posts</a>
                </li>

                <li class="nav-item dropdown mr-3">
                    <a id="navbarDropdown" class="nav-link text-white text-uppercase dropdown-toggle" href="#"
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>