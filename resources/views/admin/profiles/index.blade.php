<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="/dashboard/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="/dashboard/assets/img/favicon.png">
  <title>
    IKIZEN - Admin - Expert Management 
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
      --primary:    #1854AF;
      --primary-light: #6366F1;
      --primary-dark: #4338CA;
      --gradient: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
      --sidebar-width: 280px;
      --card-shadow: 0 4px 20px -1px rgba(0, 0, 0, 0.05), 0 2px 10px -1px rgba(0, 0, 0, 0.04);
      --transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }
    
    body {
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
      background-color: #F9FAFB;
    }
    
    .min-height-300 {
      background: var(--gradient) !important;
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
      transition: var(--transition);
    }
    
    .navbar-brand:hover .navbar-brand-img {
      transform: scale(1.05);
    }
    
    .nav-link {
      border-radius: 0.5rem;
      margin: 0.25rem 1rem;
      transition: var(--transition);
    }
    
    .nav-link:hover {
      background-color: rgba(79, 70, 229, 0.05);
      transform: translateX(4px);
    }
    
    .nav-link.active {
      background-color: rgba(79, 70, 229, 0.1);
      color: var(--primary) !important;
      font-weight: 600;
    }
    
    .nav-link.active .icon {
      background: var(--gradient);
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
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }
    
    .table-responsive {
      border-radius: 12px;
      overflow: hidden;
    }
    
    table {
      border-collapse: separate;
      border-spacing: 0;
    }
    
    thead th {
      background-color: #F3F4F6;
      color: #4B5563;
      font-weight: 600;
      padding: 1rem;
      border-bottom: 2px solid #E5E7EB;
    }
    
    tbody tr {
      transition: var(--transition);
    }
    
    tbody tr:hover {
      background-color: rgba(79, 70, 229, 0.03);
      transform: translateX(2px);
    }
    
    .avatar {
      border: 2px solid white;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      transition: var(--transition);
    }
    
    .avatar:hover {
      transform: scale(1.1);
    }
    
    .btn {
      transition: var(--transition);
      border-radius: 8px;
      font-weight: 500;
    }
    
    .btn:hover {
      transform: translateY(-2px);
    }
    
    .bg-gradient-warning {
      background: var(--gradient) !important;
      color: white;
    }
    
    .bg-gradient-warning:hover {
      background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%) !important;
    }
    
    .alert {
      border-radius: 8px;
      box-shadow: var(--card-shadow);
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
      transition: var(--transition);
    }
    
    .dropdown-item:hover {
      background-color: rgba(79, 70, 229, 0.1);
      color: var(--primary);
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
    
    /* Custom table styling */
    .table > :not(:first-child) {
      border-top: none;
    }
    
    td {
      padding: 1rem;
      vertical-align: middle;
    }
    
    .text-xs {
      font-size: 0.75rem;
    }
    
    .text-sm {
      font-size: 0.875rem;
    }
    
    /* Action buttons styling */
    .action-buttons {
      display: flex;
      gap: 0.5rem;
    }
    
    .btn-link {
      position: relative;
      overflow: hidden;
    }
    
    .btn-link:after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 0;
      height: 2px;
      background: var(--gradient);
      transition: var(--transition);
    }
    
    .btn-link:hover:after {
      width: 100%;
    }
    
    /* Card header styling */
    .card-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1.5rem;
      background-color: white;
      border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    }
    
    .card-header h5 {
      font-weight: 600;
      color: #111827;
      margin: 0;
    }
    
    /* Responsive adjustments */
    @media (max-width: 768px) {
      .action-buttons {
        flex-direction: column;
        gap: 0.25rem;
      }
      
      .card-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 1rem;
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
          <a class="nav-link" href="{{route('adminDashboardShow')}}">
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
          <a class="nav-link active" href="{{route('experts.indexProfiles')}}">
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
          <h6 class="font-weight-bolder text-white mb-0">Coaches</h6>
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
        <div class="d-flex align-items-center">
          <i class="fas fa-check-circle me-2"></i>
          <span>{{ session('success') }}</span>
        </div>
      </div>
      @endif

      @if(session('error'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <div class="d-flex align-items-center">
          <i class="fas fa-exclamation-circle me-2"></i>
          <span>{{ session('error') }}</span>
        </div>
      </div>
      @endif
      
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h5>List of experts</h5>
              <div class="text-end">
                <a class="btn bg-gradient-warning mb-0" href="{{ route('experts.createProfile') }}">
                  <i class="fas fa-plus me-2" aria-hidden="true"></i>New Profile
                </a>
              </div>
            </div>

            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Consultant</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Category</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Field</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Price</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Experience</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($profiles as $profile)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="{{ asset('storage/' . $profile->photo) }}" class="avatar avatar-sm me-3" alt="{{$profile->nom}}">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $profile->nom }}</h6>
                            <p class="text-xs text-secondary mb-0">{{ $profile->tel }}</p>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ $profile->categorie }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ $profile->domaine }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ $profile->tarif }} DHS</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ $profile->experience }} years</span>
                      </td>
                      <td class="align-middle action-buttons">
                        <a class="btn btn-link text-dark px-3 mb-0" href="{{ route('experts.editProfile', $profile->id) }}">
                          <i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit
                        </a>
                        <form action="{{ route('experts.destroyProfile', $profile->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-link text-danger text-gradient px-3 mb-0" onclick="return confirm('Are you sure you want to delete this profile?')">
                            <i class="far fa-trash-alt me-2" aria-hidden="true"></i>Delete
                          </button>
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

  <!-- Core JS Files -->
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
    
    // Add hover effect to table rows
    document.addEventListener('DOMContentLoaded', function() {
      const rows = document.querySelectorAll('tbody tr');
      rows.forEach(row => {
        row.addEventListener('mouseenter', function() {
          this.style.transform = 'translateX(5px)';
        });
        row.addEventListener('mouseleave', function() {
          this.style.transform = '';
        });
      });
    });
  </script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="/dashboard/assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>
</html>