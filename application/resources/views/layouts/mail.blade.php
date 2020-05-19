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
    @yield('content')
  </div>

  <!-- Footer -->
  <footer class="footer sticky-bottom" id="footer">
    <div class="container">
      <!-- Logo-->
      <div class="row">
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
          <img class="img-fluid" src="{{ asset('/images/logo.jpg') }}"></i>
        </div>
        <!-- Address -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
          <address>
            <i class="fas fa-home"></i> Warszawska 5a/12 str, 11-040 Dobre Miasto, Poland<br>
            <i class="fas fa-envelope"></i> miastodobredlazwierzat@wp.pl<br>
            <i class="fas fa-phone"></i> +48 515 287 797<br>
          </address>
          {{-- Social Media --}}
          <div class="contact-icons">
            <p class="contact-icons-p">
              <a href="https://www.facebook.com/KolegiumMilosnikowZwierzat/">
                <i class="contact-icons-i fab fa-facebook"></i></a>
              <a href="https://instagram.com/miasto_dobre_dla_zwierzat?igshid=1opqn74vuued5">
                <i id="icon-inst" class="contact-icons-i fab fa-instagram-square"></i></a>
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      <a href="https://AdoptAPet.com/"> AdoptAPet.com</a>
    </div>
  </footer>

  @yield('scripts')
</body>

</html>