<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="/dashboard/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="/dashboard/assets/img/favicon.png">
  <title>
    IKIZEN - Admin - Question Management 
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="/dashboard/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="/dashboard/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="/dashboard/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="/dashboard/assets/css/argon-dashboard.css" rel="stylesheet" />
  <style>
    :root {
      --primary-gradient: linear-gradient(135deg,    #1854AF 0%,    #1854AF 100%);
      --card-shadow: 0 4px 20px -1px rgba(0, 0, 0, 0.06), 0 2px 10px -1px rgba(0, 0, 0, 0.04);
      --question-card-hover: 0 8px 30px -5px rgba(0, 0, 0, 0.1);
    }
    
    .bg-primary {
      background: var(--primary-gradient) !important;
      height: 280px;
    }
    
    .sidenav {
      box-shadow: 0 0 30px rgba(0, 0, 0, 0.08);
      border: none !important;
    }
    
    .navbar-main {
      backdrop-filter: blur(10px);
      background-color:    #1854AF!important;
    }
    
    .card {
      border: none;
      box-shadow: var(--card-shadow);
      transition: all 0.3s ease;
      border-radius: 12px;
      overflow: hidden;
    }
    
    .card:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
    }
    
    .card-header {
      background: white;
      border-bottom: 1px solid rgba(0, 0, 0, 0.05);
      padding: 1.5rem;
    }
    
    .list-group-item {
      transition: all 0.3s ease;
      border-radius: 10px !important;
      margin-bottom: 1rem !important;
      border: 1px solid rgba(0, 0, 0, 0.03) !important;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.02);
    }
    
    .list-group-item:hover {
      transform: translateX(5px);
      box-shadow: var(--question-card-hover);
      background: #f8f9fa !important;
    }
    
    .btn-link {
      transition: all 0.2s ease;
      border-radius: 8px;
      padding: 8px 12px !important;
    }
    
    .btn-link:hover {
      background: rgba(0, 0, 0, 0.03);
      text-decoration: none !important;
    }
    
    .btn-link.text-danger:hover {
      background: rgba(220, 53, 69, 0.1);
    }
    
    .bg-gradient-warning {
      background: linear-gradient(135deg, #fb6340 0%, #fbb140 100%) !important;
      color: white !important;
      box-shadow: 0 4px 10px rgba(251, 140, 64, 0.3);
      border: none !important;
    }
    
    .bg-gradient-warning:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 15px rgba(251, 140, 64, 0.4);
    }
    
    .alert {
      border: none;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
      border-left: 4px solid;
    }
    
    .section-title {
      letter-spacing: 0.5px;
      font-size: 0.7rem;
      color: #6c757d;
    }
    
    .nav-link.active {
      background: rgba(94, 114, 228, 0.1) !important;
      border-radius: 8px;
    }
    
    .nav-link.active .icon {
      background: var(--primary-gradient) !important;
    }
    
    .nav-link.active .icon i {
      color: white !important;
      opacity: 1 !important;
    }
  </style>
</head>

<body class="g-sidenav-show bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" {{route('adminDashboardShow')}} ">
        <img src="/dashboard/assets/img/icone_ikigai-removebg-preview.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">IKIZEN</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " href="{{route('adminDashboardShow')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6 section-title">Coaches section</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{route('experts.indexProfiles')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-badge text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Experts</span>
          </a>
        </li>
        <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6 section-title">Test questions section</h6>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{route('questions.index')}}">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-bulb-61 text-dark text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Questions</span>
            </a>
          </li>
          <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6 section-title">Consultation section</h6>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{route('admin.consultations')}}">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-calendar-grid-58 text-primary text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Consultations</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{route('admin.consultations.cancelled')}}">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Cancelled consultations</span>
            </a>
          </li>
          <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6 section-title">Account section</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{route('admin.users.index')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">List of accounts</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
        <div class="container-fluid py-1 px-3">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
              <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Dashboard</a></li>
              <li class="breadcrumb-item text-sm text-white active" aria-current="page">Admin</li>
            </ol>
            <h6 class="font-weight-bolder text-white mb-0">Test questions</h6>
          </nav>
          <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
  
            </div>
            <ul class="navbar-nav  justify-content-end">
  
              <li class="nav-item d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-white font-weight-bold px-0" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-user me-sm-1"></i>
                  <span class="d-sm-inline d-none">{{ Auth::user()->name }}</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                  <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>
                  <li>
                      <form method="POST" action="{{ route('logout') }}">
                          @csrf
                          <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                  </li>
                </ul>
              </li>
              <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                  <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line bg-white"></i>
                    <i class="sidenav-toggler-line bg-white"></i>
                    <i class="sidenav-toggler-line bg-white"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      @if(session('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
      </div>
      @endif

      @if(session('error'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ session('error') }}
          </div>
      @endif
      <div class="row">

        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header pb-0 px-3 d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Questions</h4>
                    <div class="text-end">
                        <a class="btn bg-gradient-warning mb-0" href="{{ route('questions.create') }}"><i class="fas fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Create Question</a>
                    </div>
                </div>
                <div class="card-body pt-4 p-3">
                    <ul class="list-group list-group-flush">

                        @foreach($questions as $question)
                        <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg align-items-center">
                            <div class="d-flex flex-column flex-grow-1">
                                <h6 class="mb-3 text-sm font-weight-bold text-dark">{{ $question->question }}</h6>
                                <div class="d-flex flex-wrap gap-4">
                                    <span class="text-xs">ID: <span class="text-dark font-weight-bold ms-sm-2">{{ $question->id }}</span></span>
                                    <span class="text-xs">Type: <span class="text-dark ms-sm-2 font-weight-bold badge bg-light text-dark">{{ $question->type }}</span></span>
                                    @if ( $question->type === "select" || $question->type === "radio")
                                        <span class="text-xs">Options: <span class="text-dark ms-sm-2 font-weight-bold">{{ is_array($question->options) ? implode(', ', $question->options) : '' }}</span></span>
                                    @endif
                                </div>
                            </div>
                            <div class="ms-auto text-end d-flex">
                                <a class="btn btn-link text-dark px-3 mb-0 me-2" href="{{ route('questions.edit', $question->id) }}"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                                <form action="{{ route('questions.destroy', $question->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-link text-danger text-gradient px-3 mb-0" onclick="return confirm('Are you sure you want to delete this question?')"><i class="far fa-trash-alt me-2" aria-hidden="true"></i>Delete</button>
                                </form>
                            </div>
                        </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>


      </div>


@include('admin.footer')
    </div>
  </main>

  <!--   Core JS Files   -->
  <script src="/dashboard/assets/js/core/popper.min.js"></script>
  <script src="/dashboard/assets/js/core/bootstrap.min.js"></script>
  <script src="/dashboard/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="/dashboard/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="/dashboard/assets/js/plugins/chartjs.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="/dashboard/assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>