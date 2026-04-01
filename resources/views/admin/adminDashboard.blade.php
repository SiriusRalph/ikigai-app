<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="/dashboard/assets/img/favicon.png">
  <title>
    IKIZEN - Admin Dashboard 
  </title>
  <!-- Fonts and icons -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="/dashboard/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="/dashboard/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- CSS Files -->
  <link id="pagestyle" href="/dashboard/assets/css/argon-dashboard.css" rel="stylesheet" />
  <style>
    :root {
      --primary-gradient: linear-gradient(135deg,  #1854AF,  #1854AF);
      --card-shadow: 0 4px 20px -1px rgba(0, 0, 0, 0.05), 0 2px 10px -1px rgba(0, 0, 0, 0.04);
      --sidebar-width: 280px;
    }
    
    body {
      font-family: 'Inter', sans-serif;
      background-color: #F9FAFB;
    }
    
    .min-height-300 {
      background: var(--primary-gradient) !important;
      height: 200px;
    }
    
    .sidenav {
      width: var(--sidebar-width);
      box-shadow: 0 0 30px rgba(0, 0, 0, 0.05);
      border-right: none;
      background: linear-gradient(180deg, #FFFFFF 0%, #F9FAFB 100%);
    }
    
    .navbar-brand-img {
      max-height: 2.5rem;
      transition: all 0.3s;
    }
    
    .navbar-brand:hover .navbar-brand-img {
      transform: scale(1.05);
    }
    
    .nav-link {
      border-radius: 0.5rem;
      margin: 0.25rem 1rem;
      transition: all 0.3s ease;
    }
    
    .nav-link:hover {
      background-color: rgba(79, 70, 229, 0.05);
      transform: translateX(4px);
    }
    
    .nav-link.active {
      background-color: rgba(79, 70, 229, 0.1);
      color: #4F46E5 !important;
      font-weight: 600;
    }
    
    .nav-link.active .icon {
      background: var(--primary-gradient);
    }
    
    .nav-link.active .icon i {
      color: white !important;
    }
    
    .card {
      border: none;
      border-radius: 12px;
      box-shadow: var(--card-shadow);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
    }
    
    .icon-shape {
      border-radius: 12px;
    }
    
    .bg-gradient-primary {
      background: var(--primary-gradient) !important;
    }
    
    .bg-gradient-danger {
      background: linear-gradient(135deg, #EF4444, #F97316) !important;
    }
    
    .bg-gradient-success {
      background: linear-gradient(135deg, #10B981, #059669) !important;
    }
    
    .bg-gradient-warning {
      background: linear-gradient(135deg, #F59E0B, #D97706) !important;
    }
    
    .chart-canvas {
      min-height: 300px;
    }
    
    .dropdown-menu {
      border: none;
      box-shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.1);
      border-radius: 12px;
      padding: 0.5rem;
    }
    
    .dropdown-item {
      border-radius: 8px;
      padding: 0.5rem 1rem;
      transition: all 0.2s;
    }
    
    .dropdown-item:hover {
      background-color: rgba(79, 70, 229, 0.1);
      color: #4F46E5;
    }
    
    .breadcrumb-item a {
      color: rgba(255, 255, 255, 0.8);
      transition: color 0.2s;
    }
    
    .breadcrumb-item a:hover {
      color: white;
      text-decoration: none;
    }
    
    .alert {
      border: none;
      border-radius: 12px;
      box-shadow: var(--card-shadow);
    }
    
    .main-content {
      margin-left: var(--sidebar-width);
    }
    
    @media (max-width: 1200px) {
      .main-content {
        margin-left: 0;
      }
      .sidenav {
        transform: translateX(-100%);
        z-index: 1035;
      }
      .sidenav.show {
        transform: translateX(0);
      }
    }
  </style>
</head>

<body class="g-sidenav-show bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="{{route('adminDashboardShow')}}">
        <img src="/dashboard/assets/img/icone_ikigai-removebg-preview.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">IKIZEN</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="{{route('adminDashboardShow')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Coaches section</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('experts.indexProfiles')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-badge text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Experts</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Test questions section</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('questions.index')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-bulb-61 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Questions</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Consultation section</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('admin.consultations')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Consultations</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('admin.consultations.cancelled')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Cancelled consultations</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account section</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('admin.users.index')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">List of accounts</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>
  <main class="main-content position-relative border-radius-lg">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Dashboard</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Admin</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Dashboard</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          </div>
          <ul class="navbar-nav justify-content-end">
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
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Total revenue</p>
                    <h5 class="font-weight-bolder">
                      {{ number_format($totalRevenue, 2) }} DHS
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Clients</p>
                    <h5 class="font-weight-bolder">
                      {{ $totalClients }}
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Experts</p>
                    <h5 class="font-weight-bolder">
                      {{ $totalExperts }}
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                    <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Consultations</p>
                    <h5 class="font-weight-bolder">
                      {{ $totalBookings }}
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                    <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-lg-12 mb-lg-0 mb-4">
          <div class="card z-index-2 h-100">
            <div class="card-header pb-0 pt-3 bg-transparent">
              <h6 class="text-capitalize">Bookings overview</h6>
              <p class="text-sm mb-0">
                <span class="font-weight-bold">Ordered by</span> month & expert
              </p>
            </div>
            <div class="card-body p-3">
              <div class="chart">
                <canvas id="chart-bar" class="chart-canvas" height="300"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>

      @include('admin.footer')
    </div>
  </main>

  <!-- Core JS Files -->
  <script src="/dashboard/assets/js/core/popper.min.js"></script>
  <script src="/dashboard/assets/js/core/bootstrap.min.js"></script>
  <script src="/dashboard/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="/dashboard/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="/dashboard/assets/js/plugins/chartjs.min.js"></script>
  
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      var ctx1 = document.getElementById("chart-bar").getContext("2d");

      // Récupérer les données du contrôleur Laravel
      var chartData = @json($chartData);
      var experts = @json($experts);

      new Chart(ctx1, {
        type: "bar",
        data: {
          labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
          datasets: chartData
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              display: true,
              position: 'top',
            },
            tooltip: {
              mode: 'index',
              intersect: false,
            },
          },
          scales: {
            x: {
              stacked: true,
              grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false,
                borderDash: [5, 5]
              },
              ticks: {
                display: true,
                color: '#ccc',
                padding: 20,
                font: {
                  size: 11,
                  family: "Open Sans",
                  style: 'normal',
                  lineHeight: 2
                },
              }
            },
            y: {
              stacked: true,
              grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5]
              },
              ticks: {
                display: true,
                padding: 10,
                color: '#fbfbfb',
                font: {
                  size: 11,
                  family: "Open Sans",
                  style: 'normal',
                  lineHeight: 2
                },
              }
            }
          },
        },
      });
    });
  </script>

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