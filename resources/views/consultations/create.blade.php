<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <link rel="icon" type="image/png" sizes="32x32" href="/dashboard/assets/img/favicon.png">

    <link rel="stylesheet" href="/home/assets/css/theme.css">
    <title>IKIGAI - Booking</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-5 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container">
            <a class="navbar-brand" href="{{route ('accueil')}}">
                <img src="/home/assets/img/1-removebg-preview.png" height="35" alt="logo" />
            </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"> </span>
          </button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base align-items-lg-center align-items-start">
              <li class="nav-item px-3 px-xl-4">
                <a class="nav-link fw-medium" aria-current="page" href="{{route('accueil')}}">Ikigai</a>
              </li>
              <li class="nav-item px-3 px-xl-4">
                <a class="nav-link fw-medium" aria-current="page" href="{{route('contact')}}">Contact</a>
              </li>
            @guest
            <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" href="{{ route('login') }}">Login</a></li>
            <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" href="{{ route('register') }}">Sign up</a></li>
          @endguest
          @auth
          <li class="nav-item px-3 px-xl-4">
            <a class="nav-link fw-medium" href="{{route('consultations.index')}}">Mes consultations</a>
        </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                {{ Auth::user()->name }}
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>
                <li>
                  <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="dropdown-item">Logout</button>
                  </form>
                </li>
              </ul>
            </li>
          @endauth
    
                <li class="nav-item px-3 px-xl-4">
                    <a class="btn btn-outline-warning order-1 order-lg-0 fw-medium" href="{{ route('test.start') }}">Book appointment</a>
                </li>
                <li class="nav-item dropdown px-3 px-lg-0">
                    <a class="d-inline-block ps-0 py-2 pe-3 text-decoration-none dropdown-toggle fw-medium" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">EN</a>
                    <ul class="dropdown-menu dropdown-menu-end border-0 shadow-lg" style="border-radius:0.3rem;" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">EN</a></li>
                        <li><a class="dropdown-item" href="#!">BN</a></li>
                    </ul>
                </li>
            </ul>
          </div>
        </div>
      </nav>
<div class="container mt-5 book">
    <h1 class="text-warning mb-5 text-center">Book a call with {{ $expert->nom }}</h1>
    <form action="{{ route('consultations.store') }}" method="POST">
        @csrf
        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
        <input type="hidden" name="expert_id" value="{{ $expert->id }}">
    
            <div class="form-group">
                <label for="date_consultation">Choose the date</label>
                <input type="text" name="date_consultation" id="date_consultation" class="form-control" required>
            </div>
    
            <div class="form-group">
                <label for="heure_debut">Time</label>
                <select name="heure_debut" id="heure_debut" class="form-control" required>
    
                </select>
            </div>
    
            <div class="form-group">
                <label for="duree">Duration (minutes)</label>
                <input type="number" name="duree" id="duree" class="form-control" min="30" required>
            </div>
    
        <input type="hidden" name="montant" value="{{ $expert->tarif }}">
    
            <button type="submit" class="btn-submit">Submit</button>
    </form>
    
</div>
      <!-- <section> begin ============================-->
        <section id="footer" class="pb-0 pb-lg-4">

            <div class="container">
              <div class="row">
                <div class="col-lg-5 col-md-7 col-12 mb-4 mb-md-7 mb-lg-0 order-0"> <img class="mb-4" src="/home/assets/img/1-removebg-preview.png" width="150" alt="ikigai" />
                  <p class="fs--1 text-secondary mb-0 fw-medium">Book your consultation in minutes, get the SOLUTION for your problems.</p>
                </div>
                <div class="col-lg-2 col-md-4 mb-4 mb-lg-0 order-lg-1 order-md-2">
                  <h4 class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4">Ikigai</h4>
                  <ul class="list-unstyled mb-0">
                    <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="{{route('accueil')}}">About</a></li>
                    <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="#destination">Experts</a></li>
                  </ul>
                </div>
                <div class="col-lg-2 col-md-4 mb-4 mb-lg-0 order-lg-2 order-md-3">
                  <h4 class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4">Contact</h4>
                  <ul class="list-unstyled mb-0">
                    <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="{{route('contact')}}">Help</a></li>
                    <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="{{route('contact')}}">Contact</a></li>
                  </ul>
                </div>
                <div class="col-lg-2 col-md-4 mb-4 mb-lg-0 order-lg-3 order-md-4">
                  <h4 class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4">More</h4>
                  <div class="icon-group mb-4"> 
                    <a class="text-decoration-none icon-item shadow-social" id="facebook" href="https://fr.linkedin.com/" target="_blank"><i class="fab fa-linkedin"> </i></a>
                    <a class="text-decoration-none icon-item shadow-social" id="instagram" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"> </i></a>
                </div>
    
                </div>
              </div>
            </div><!-- end of .container-->
    
          </section>
          <!-- <section> close ============================-->
          <!-- ============================================-->
    
    
          <div class="py-5 text-center">
            <p class="mb-0 text-secondary fs--1 fw-medium">All rights reserved ikigai.ma </p>
          </div>
    <!-- Script pour désactiver les dates prises -->
<script>
    $(function() {
        var consultationsPrises = @json(array_combine($datesPrises, $heuresPrises));
        $('#date_consultation').datepicker({
            beforeShowDay: function(date) {
                var stringDate = $.datepicker.formatDate('yy-mm-dd', date);
                if (consultationsPrises[stringDate]) {
                    var heuresDisponibles = ['08:00', '09:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00'];
                    for (var i = 0; i < heuresDisponibles.length; i++) {
                        if (!consultationsPrises[stringDate].includes(heuresDisponibles[i])) {
                            return [true]; 
                        }
                    }
                    return [false]; 
                }
                return [true];
            },
            onSelect: function(selectedDate) {
                var selectedDateString = $.datepicker.formatDate('yy-mm-dd', new Date(selectedDate));
                var heuresPrisesPourDate = consultationsPrises[selectedDateString] || [];
                $('#heure_debut').empty();
                var heuresDisponibles = ['08:00', '09:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00'];
                $.each(heuresDisponibles, function(index, heure) {
                    if (!heuresPrisesPourDate.includes(heure)) {
                        $('#heure_debut').append($('<option>', {
                            value: heure,
                            text: heure
                        }));
                    }
                });
            }
        });
    });
    </script>
        <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="/home/vendors/@popperjs/popper.min.js"></script>
    <script src="/home/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="/home/vendors/is/is.min.js"></script>
    <script src="/https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="/home/vendors/fontawesome/all.min.js"></script>
    <script src="/home/assets/js/theme.js"></script>
</body>
</html>
