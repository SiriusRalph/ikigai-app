<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="/dashboard/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="/dashboard/assets/img/favicon.png">
  <title>
    IKIZEN - Admin - Consultations
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
      --table-row-hover: rgba(94, 114, 228, 0.05);
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
      background-color:    #1854AF !important;
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
    
    .table-responsive {
      border-radius: 12px;
      overflow: hidden;
    }
    
    table {
      margin-bottom: 0 !important;
    }
    
    thead {
      background: rgba(0, 0, 0, 0.02);
      border-bottom: 2px solid rgba(0, 0, 0, 0.03);
    }
    
    th {
      font-size: 0.75rem !important;
      letter-spacing: 0.5px;
      text-transform: uppercase !important;
      color: #6c757d !important;
      padding: 1rem 0.75rem !important;
    }
    
    tbody tr {
      transition: all 0.2s ease;
      border-bottom: 1px solid rgba(0, 0, 0, 0.03);
    }
    
    tbody tr:hover {
      background: var(--table-row-hover) !important;
      transform: translateX(2px);
    }
    
    td {
      padding: 1rem 0.75rem !important;
      vertical-align: middle !important;
    }
    
    .avatar {
      border: 2px solid rgba(255, 255, 255, 0.8);
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    
    .badge-sm {
      padding: 0.35em 0.65em;
      font-size: 0.7em;
      font-weight: 600;
      letter-spacing: 0.5px;
    }
    
    .bg-gradient-warning {
      background: linear-gradient(135deg, #fb6340 0%, #fbb140 100%) !important;
    }
    
    .bg-gradient-danger {
      background: linear-gradient(135deg, #f5365c 0%, #f56036 100%) !important;
    }
    
    .bg-gradient-success {
      background: linear-gradient(135deg, #2dce89 0%, #2dcecc 100%) !important;
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
            <a class="nav-link " href="{{route('questions.index')}}">
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
            <a class="nav-link active" href="{{route('admin.consultations')}}">
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
          <h6 class="font-weight-bolder text-white mb-0">All Consultations</h6>
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
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0 d-flex justify-content-between align-items-center">
              <h6>All consultations</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Expert</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Client</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Time</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Duration</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Price</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>                      
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach($consultations as $consultation)
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                              <div>
                                  <img src="{{ asset('storage/' . $consultation->expert->photo) }}" class="avatar avatar-sm me-3" alt="{{$consultation->expert->nom}}">
                                </div>
                              <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">{{$consultation->expert->nom}}</h6>
                                <p class="text-xs text-secondary mb-0">{{ $consultation->expert->categorie }}</p>
                              </div>
                            </div>
                       </td>

                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $consultation->user->name }}</h6>
                            <p class="text-xs text-secondary mb-0">{{ $consultation->user->email }}</p>
                          </div>
                        </div>
                      </td>

                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ $consultation->date_consultation }}</span>
                      </td>

                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ $consultation->heure_debut }}</span>
                      </td>

                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ $consultation->duree }} min</span>
                      </td>

                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ $consultation->montant }} DHS</span>
                      </td>

                      <td class="align-middle text-center text-sm">
                        @if ($consultation->statut == 'non réalisée')
                        <span class="badge badge-sm bg-gradient-warning">{{ $consultation->statut }}</span>
                        @elseif ($consultation->statut == 'annulée')
                            <span class="badge badge-sm bg-gradient-danger">{{ $consultation->statut }} </span>
                            <p class="text-xs text-muted mt-1 mb-0">{{ $consultation->motif_annulation }}</p>
                        @elseif ($consultation->statut == 'réalisée')
                            <span class="badge badge-sm bg-gradient-success">{{ $consultation->statut }}</span>
                        @else
                            <span class="badge badge-sm">{{ $consultation->statut }}</span>
                        @endif
                      </td>

                      <td class="align-middle">
                        <form action="{{ route('admin.consultations.destroy' , $consultation->id) }}" method="POST">
                            @csrf
                            @method( 'DELETE')
                            <button type="submit" class="btn btn-link text-danger text-gradient px-3 mb-0" onclick="return confirm('Are you sure you want to delete this bookig?')"><i class="far fa-trash-alt me-2" aria-hidden="true"></i>Delete</button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
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