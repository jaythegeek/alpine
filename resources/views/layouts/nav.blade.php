<nav class="navbar navbar-expand-md navbar-dark bg-black shadow-sm">
    <div class="container py-2">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="/images/white-red.png" alt="Alpine Elements Careers" width="300">
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
                <li class="nav-item">
                    <a class="nav-link" href="/ski-jobs">Winter Ski Jobs</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/beach-jobs">Beach Club Jobs</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/beach-jobs">Summer Alps Jobs</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="/beach-jobs">Office Jobs</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/beach-jobs">Blog</a>
                </li>
                
               
                {{-- @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif --}}
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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