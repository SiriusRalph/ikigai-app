<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="dashboard/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="dashboard/assets/img/favicon.png">
  <title>
    IKIGAI - Register
  </title>
  <!-- Fonts and icons -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href="dashboard/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="dashboard/assets/css/nucleo-svg.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="dashboard/assets/css/nucleo-svg.css" rel="stylesheet" />
  <link id="pagestyle" href="dashboard/assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body class="">

  <main class="main-content mt-0">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('home/assets/img/video-conference.jpg'); background-position: top;">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            <a class="ms-lg-0 ms-3" href="/">
                <img src="home/assets/img/1-removebg-preview.png" width="200" alt="">
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
          <div class="card z-index-0">
            <div class="card-header text-center pt-4">
              <h5>Create a new account</h5>
            </div>
            <div class="card-body">
              <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="mb-3">
                  <input type="text" class="form-control" placeholder="Name" id="name" name="name" :value="old('name')" required autofocus autocomplete="name">
                  <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mb-3">
                  <input type="email" class="form-control" placeholder="Email" id="email" name="email" :value="old('email')" required autocomplete="username">
                  <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mb-3">
                  <input type="password" class="form-control" placeholder="Password" id="password" name="password" required autocomplete="new-password">
                  <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mb-3">
                  <input type="password" class="form-control" placeholder="Confirm Password" id="password_confirmation" name="password_confirmation" required autocomplete="new-password">
                  <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="form-check form-check-info text-start">
                  <input class="form-check-input" type="checkbox" value="" id="terms" required>
                  <label class="form-check-label" for="terms">
                    I agree to the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                  </label>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary w-100 my-4 mb-2">Sign Up</button>
                </div>

                <p class="text-sm mt-3 mb-0">Already have an account? <a href="{{ route('login') }}" class="text-primary text-gradient font-weight-bolder">Sign in</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Core JS Files -->
  <script src="dashboard/assets/js/core/popper.min.js"></script>
  <script src="dashboard/assets/js/core/bootstrap.min.js"></script>
  <script src="dashboard/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="dashboard/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script src="dashboard/assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>
