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
      overflow: hidden;
    }
    
    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }
    
    .card-header {
      background-color: white;
      border-bottom: 1px solid rgba(0, 0, 0, 0.05);
      padding: 1.5rem;
    }
    
    .card-header h5 {
      font-weight: 600;
      color: #111827;
      margin: 0;
    }
    
    .form-control {
      border-radius: 8px;
      padding: 0.75rem 1rem;
      border: 1px solid #E5E7EB;
      transition: var(--transition);
    }
    
    .form-control:focus {
      border-color: var(--primary-light);
      box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
    }
    
    select.form-control {
      appearance: none;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%236B7280' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      background-position: right 1rem center;
      background-size: 16px 12px;
    }
    
    textarea.form-control {
      min-height: 120px;
    }
    
    .btn {
      transition: var(--transition);
      border-radius: 8px;
      font-weight: 500;
      padding: 0.75rem 1.5rem;
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
    
    label {
      font-weight: 500;
      color: #374151;
      margin-bottom: 0.5rem;
      display: block;
    }
    
    .invalid-feedback {
      color: #EF4444;
      font-size: 0.875rem;
      margin-top: 0.25rem;
    }
    
    .is-invalid {
      border-color: #EF4444;
    }
    
    .is-invalid:focus {
      border-color: #EF4444;
      box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.1);
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
    
    /* Form group styling */
    .form-group {
      margin-bottom: 1.5rem;
    }
    
    /* File input styling */
    .custom-file-input {
      position: relative;
    }
    
    .custom-file-input input[type="file"] {
      position: absolute;
      left: 0;
      top: 0;
      opacity: 0;
      width: 100%;
      height: 100%;
      cursor: pointer;
    }
    
    .custom-file-label {
      display: block;
      padding: 0.75rem 1rem;
      border: 1px solid #E5E7EB;
      border-radius: 8px;
      background-color: #F9FAFB;
      transition: var(--transition);
    }
    
    .custom-file-input:hover .custom-file-label {
      border-color: var(--primary-light);
    }
    
    /* Responsive adjustments */
    @media (max-width: 768px) {
      .card-header {
        padding: 1rem;
      }
      
      .form-control {
        padding: 0.65rem 0.9rem;
      }
      
      .btn {
        padding: 0.65rem 1.25rem;
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
      <div class="row">
        <div class="col-xl-10 col-lg-10 col-md-8 mx-auto">
          <div class="card z-index-0">
            <div class="card-header text-center pt-4">
              <h5>Create an expert profile</h5>
            </div>
            <div class="card-body">
              <form action="{{ route('experts.storeProfile') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="user_id">Select Expert User:</label>
                  <select name="user_id" id="user_id" class="form-control" required>
                    @foreach($users as $user)
                      <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                  </select>
                </div>
                
                <div class="form-group">
                  <label for="nom">Name:</label>
                  <input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" id="nom" required>
                  @error('nom')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                
                <div class="form-group">
                  <label for="tel">Phone:</label>
                  <input type="text" class="form-control @error('tel') is-invalid @enderror" name="tel" id="tel" required>
                  @error('tel')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="genre">Gender</label>
                  <select name="genre" id="genre" class="form-control" required>
                    <option value="homme">Male</option>
                    <option value="femme">Female</option>
                  </select>
                  @error('genre')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="bio">Bio:</label>
                  <textarea class="form-control @error('bio') is-invalid @enderror" id="bio" name="bio" rows="4">Enter the expert biography</textarea>
                  @error('bio')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              
                <div class="form-group">
                  <label for="categorie">Category:</label>
                  <input type="text" class="form-control @error('categorie') is-invalid @enderror" name="categorie" id="categorie" required>
                  @error('categorie')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="domaine">Field:</label>
                  <input type="text" class="form-control @error('domaine') is-invalid @enderror" name="domaine" id="domaine" placeholder="Ex: career coaching, soft skills" required>
                  @error('domaine')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="tarif">Price:</label>
                  <input type="text" class="form-control @error('tarif') is-invalid @enderror" name="tarif" id="tarif" required>
                  @error('tarif')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                
                <div class="form-group">
                  <label for="experience">Years of experience:</label>
                  <input type="number" class="form-control @error('experience') is-invalid @enderror" name="experience" id="experience" required>
                  @error('experience')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                
                <div class="form-group">
                  <label for="photo">Picture:</label>
                  <div class="custom-file-input">
                    <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" id="photo" required>
                    <div class="custom-file-label">Choose file...</div>
                  </div>
                  @error('photo')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                
                <button class="btn bg-gradient-warning w-100 my-4 mb-2" type="submit">Create Profile</button>
              </form>
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
    
    // Update file input label
    document.addEventListener('DOMContentLoaded', function() {
      const fileInput = document.getElementById('photo');
      const fileLabel = document.querySelector('.custom-file-label');
      
      if (fileInput && fileLabel) {
        fileInput.addEventListener('change', function() {
          if (this.files && this.files.length > 0) {
            fileLabel.textContent = this.files[0].name;
          }
        });
      }
    });
  </script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="/dashboard/assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>
</html>