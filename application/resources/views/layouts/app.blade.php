
{{-- @inject('person', 'App\model\Person'); --}}


<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title')</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  {{-- Bootstrap CSS --}}
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <!-- fontawesome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

  @yield('fonts')
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ URL::asset('css/footer.css') }}" />
  @yield('styles')
</head>

<body>
  <div id="app">
    <nav class="navbar sticky-top navbar-expand-md">
      <div class="container">
        {{-- <a class="navbar-brand" href="{{ url('/') }}" title="Home" alt="Home">
          {{ config('app.name', 'AdoptAPet') }}
        </a> --}}
        <a class="navbar-brand" href="{{ url('/') }}">
          <img src="{{ asset('images/icons/logo.png') }}" width="40" height="40" class="d-inline-block align-top" title="Home" alt="Home">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="" role="button"><i class="fa fa-bars" aria-hidden="true"></i></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('/about-us') }}">About Us <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/donate') }}">Donation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/voluntary-work') }}">Voluntary Work</a>
            </li>            
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/pets') }}">Adoption</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>
            </li>
          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest 
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
      
              </a>

              <div class="text-white dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>
                <a class="dropdown-item" href="/personal-area/{{Auth::user()->id}}">
                  <span>Personal Area</span>
                </a>
                @if (Auth::user() != null)
                  @foreach (Auth::user()->roles as $role)
                      @if (strcasecmp($role->name, 'admin') == 0)
                        {{-- <a class="dropdown-item" href="{{ route('pet.create') }}"> --}}
                        <a class="dropdown-item" href="/pet/create">
                          <span>Add new pet</span>
                        </a>
                      @endif
                  @endforeach
                @endif
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
    @if (Request::is('*login*') || Request::is('*register*'))
    <main class="py-4">
      @yield('content')
    </main>
    @else
    <main>
      @yield('content')
    </main>
    @endif
  </div>


  <!-- Footer -->
  <footer class="footer sticky-bottom" id="footer">

    <!-- Footer Elements -->
    <div class="container">

      <!-- Grid row-->
      <div class="row">
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
          <img class="img-fluid" src="{{ asset('images/icons/logo-title.png') }}"></i>
        </div>
        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
          <address>
            <i class="fas fa-home"></i> Warszawska 5a/12 str, 11-040 Dobre Miasto, Poland<br>
            <i class="fas fa-envelope"></i> miastodobredlazwierzat@wp.pl<br>
            <i class="fas fa-phone"></i> +48 515 287 797<br>
          </address>
          <!-- Facebook -->
          
          <!-- Grid column -->
          <div class="contact-icons">
            <div class="contact-icons-p">
              <a href="https://www.facebook.com/KolegiumMilosnikowZwierzat/">
                <i class="contact-icons-i fab fa-facebook"></i></a>
              
              <a href="https://instagram.com/miasto_dobre_dla_zwierzat?igshid=1opqn74vuued5">
                <i id="icon-inst" class="contact-icons-i fab fa-instagram-square"></i></a>
              </div>
          </div>
        </div>
      </div>
      <!-- Grid row-->

    </div>
    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      <a href="https://AdoptAPet.com/"> AdoptAPet.com</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->

  @yield('scripts')
</body>

</html>