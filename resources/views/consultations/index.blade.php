<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/home/assets/css/theme.css">
    <link rel="icon" type="image/png" sizes="32x32" href="/dashboard/assets/img/favicon.png">
    <title>IKIZEN - My Consultations</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <style>
        /* Core Styles */
        :root {
            --primary-blue: #1854AF;
            --accent-orange: #FF743E;
            --highlight-yellow: #FFDE59;
            --light-gray: #f8f9fa;
            --medium-gray: #e9ecef;
            --text-dark: #343a40;
            --text-muted: #6c757d;
            --shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            --transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: var(--text-dark);
        }

        .book-consul {
            display: flex;
            flex-direction: column;
            min-height: 80vh;
            padding: 4rem 0;
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
        }

        /* Balanced Decorative Elements */
        .decorative-circle {
            position: absolute;
            z-index: 0;
            border-radius: 50%;
            opacity: 0.06;
        }

        .decorative-circle-1 {
            width: 200px;
            height: 200px;
            right: 10%;
            top: 15%;
            background: var(--primary-blue);
            animation: float 12s ease-in-out infinite;
        }

        .decorative-circle-2 {
            width: 150px;
            height: 150px;
            left: 8%;
            bottom: 20%;
            background: var(--accent-orange);
            animation: float-alt 10s ease-in-out infinite;
        }

        .decorative-circle-3 {
            width: 100px;
            height: 100px;
            right: 15%;
            bottom: 25%;
            background: var(--highlight-yellow);
            animation: float 8s ease-in-out infinite;
        }

        .decorative-circle-4 {
            width: 120px;
            height: 120px;
            left: 12%;
            top: 25%;
            background: var(--primary-blue);
            animation: float-alt 14s ease-in-out infinite;
        }

        /* Section Header - Centered and Balanced */
        .section-header {
            text-align: center;
            position: relative;
            z-index: 2;
            margin-bottom: 3rem;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.8s ease-out forwards;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .section-badge {
            display: inline-block;
            background: linear-gradient(135deg, rgba(24, 84, 175, 0.1), rgba(24, 84, 175, 0.05));
            color: var(--primary-blue);
            font-size: 0.9rem;
            font-weight: 500;
            padding: 0.6rem 1.8rem;
            border-radius: 50px;
            margin-bottom: 1.2rem;
            border: 1px solid rgba(24, 84, 175, 0.1);
        }

        .section-title {
            font-size: 2.8rem;
            font-weight: 700;
            margin-bottom: 1.2rem;
            color: var(--text-dark);
            position: relative;
            display: block;
            line-height: 1.2;
        }

        .section-title span {
            background: linear-gradient(135deg, var(--primary-blue) 0%, #4377D1 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .section-divider {
            width: 80px;
            height: 4px;
            background: linear-gradient(to right, var(--primary-blue), var(--accent-orange));
            border-radius: 2px;
            margin: 0 auto 1.5rem;
        }

        .section-subtitle {
            font-size: 1.1rem;
            color: var(--text-muted);
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }

        /* Centered Tab Navigation */
        .consultation-tabs {
            display: flex;
            justify-content: center;
            margin-bottom: 3rem;
            position: relative;
            z-index: 2;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.8s ease-out forwards;
            animation-delay: 0.2s;
            gap: 0.5rem;
        }

        .tab-btn {
            background-color: white;
            border: 2px solid transparent;
            padding: 0.8rem 2rem;
            border-radius: 50px;
            font-weight: 500;
            color: var(--text-muted);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }

        .tab-btn::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(24, 84, 175, 0.1), rgba(24, 84, 175, 0.05));
            transition: left 0.3s ease;
            z-index: -1;
            border-radius: 50px;
        }

        .tab-btn:hover::before {
            left: 0;
        }

        .tab-btn:hover {
            color: var(--primary-blue);
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(24, 84, 175, 0.15);
        }

        .tab-btn.active {
            color: var(--primary-blue);
            background: linear-gradient(135deg, rgba(24, 84, 175, 0.1), rgba(24, 84, 175, 0.05));
            border-color: rgba(24, 84, 175, 0.2);
            box-shadow: 0 8px 25px rgba(24, 84, 175, 0.15);
        }

        /* Balanced Grid Layout */
        .consultation-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            position: relative;
            z-index: 2;
            max-width: 1200px;
            margin: 0 auto;
            justify-items: center;
        }

        /* Enhanced Card Styles */
        .consultation-card {
            background-color: #fff;
            border-radius: 20px;
            box-shadow: var(--shadow);
            overflow: hidden;
            transition: var(--transition);
            position: relative;
            opacity: 0;
            transform: translateY(30px);
            width: 100%;
            max-width: 380px;
            border: 1px solid rgba(24, 84, 175, 0.05);
        }

        .consultation-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
        }

        .card-decoration {
            position: absolute;
            top: 0;
            right: 0;
            width: 100px;
            height: 100px;
            background: linear-gradient(135deg, rgba(24, 84, 175, 0.08), transparent);
            border-radius: 0 20px 0 100px;
            z-index: 1;
        }

        .card-header {
            padding: 2rem;
            background: linear-gradient(135deg, rgba(24, 84, 175, 0.03), rgba(24, 84, 175, 0.01));
            position: relative;
            z-index: 2;
            border-bottom: 1px solid rgba(24, 84, 175, 0.08);
        }

        .expert-info {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .expert-avatar {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid white;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            flex-shrink: 0;
        }

        .expert-details {
            flex-grow: 1;
        }

        .expert-name {
            font-weight: 600;
            font-size: 1.2rem;
            margin-bottom: 0.3rem;
            color: var(--primary-blue);
            line-height: 1.3;
        }

        .expert-specialty {
            font-size: 0.9rem;
            color: var(--text-muted);
            font-weight: 400;
        }

        .card-body {
            padding: 2rem;
            position: relative;
            z-index: 2;
        }

        .consultation-info {
            margin-bottom: 1.5rem;
        }

        .info-row {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
            gap: 1rem;
        }

        .info-row:last-child {
            margin-bottom: 0;
        }

        .info-icon {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, rgba(24, 84, 175, 0.1), rgba(24, 84, 175, 0.05));
            color: var(--primary-blue);
            border-radius: 50%;
            flex-shrink: 0;
            font-size: 0.9rem;
        }

        .info-content {
            flex-grow: 1;
            min-width: 0;
        }

        .info-label {
            font-size: 0.85rem;
            color: var(--text-muted);
            margin-bottom: 0.3rem;
            font-weight: 500;
        }

        .info-value {
            font-weight: 600;
            color: var(--text-dark);
            line-height: 1.4;
        }

        .status-badge {
            display: inline-block;
            padding: 0.4rem 1.2rem;
            font-size: 0.85rem;
            font-weight: 600;
            border-radius: 50px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .status-pending {
            background: linear-gradient(135deg, rgba(255, 193, 7, 0.2), rgba(255, 193, 7, 0.1));
            color: #d39e00;
            border: 1px solid rgba(255, 193, 7, 0.3);
        }

        .status-completed {
            background: linear-gradient(135deg, rgba(25, 135, 84, 0.2), rgba(25, 135, 84, 0.1));
            color: #198754;
            border: 1px solid rgba(25, 135, 84, 0.3);
        }

        .status-cancelled {
            background: linear-gradient(135deg, rgba(220, 53, 69, 0.2), rgba(220, 53, 69, 0.1));
            color: #dc3545;
            border: 1px solid rgba(220, 53, 69, 0.3);
        }

        .card-footer {
            padding: 1.5rem 2rem;
            border-top: 1px solid rgba(24, 84, 175, 0.08);
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: linear-gradient(135deg, rgba(24, 84, 175, 0.02), transparent);
        }

        .price-tag {
            font-weight: 700;
            font-size: 1.1rem;
            color: var(--primary-blue);
        }

        /* Enhanced Button Styles */
        .btn-action {
            padding: 0.7rem 1.8rem;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.9rem;
            cursor: pointer;
            transition: var(--transition);
            border: none;
            position: relative;
            overflow: hidden;
        }

        .btn-delay {
            background: linear-gradient(135deg, var(--accent-orange), #e56a38);
            color: white;
            box-shadow: 0 4px 15px rgba(255, 116, 62, 0.3);
        }

        .btn-delay:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(255, 116, 62, 0.4);
        }

        .btn-rate {
            background: linear-gradient(135deg, var(--primary-blue), #15499d);
            color: white;
            box-shadow: 0 4px 15px rgba(24, 84, 175, 0.3);
        }

        .btn-rate:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(24, 84, 175, 0.4);
        }

        .rating-display {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-weight: 600;
            color: var(--text-dark);
        }

        /* Centered Empty State */
        .empty-state {
            text-align: center;
            padding: 4rem 2rem;
            background: linear-gradient(135deg, white, #f8f9fa);
            border-radius: 20px;
            box-shadow: var(--shadow);
            margin: 2rem auto;
            max-width: 600px;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.8s ease-out forwards;
            animation-delay: 0.2s;
            border: 1px solid rgba(24, 84, 175, 0.05);
        }

        .empty-state-icon {
            font-size: 4rem;
            margin-bottom: 2rem;
            color: var(--accent-orange);
            opacity: 0.7;
            display: block;
        }

        .empty-state-title {
            font-size: 1.8rem;
            margin-bottom: 1rem;
            font-weight: 700;
            color: var(--text-dark);
        }

        .empty-state-text {
            color: var(--text-muted);
            margin-bottom: 2rem;
            font-size: 1.1rem;
            line-height: 1.6;
        }

        .btn-book {
            background: linear-gradient(135deg, var(--primary-blue), #15499d);
            color: white;
            padding: 1rem 2.5rem;
            border-radius: 50px;
            font-weight: 600;
            display: inline-block;
            text-decoration: none;
            transition: var(--transition);
            box-shadow: 0 6px 20px rgba(24, 84, 175, 0.3);
        }

        .btn-book:hover {
            background: linear-gradient(135deg, #15499d, var(--primary-blue));
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(24, 84, 175, 0.4);
            color: white;
            text-decoration: none;
        }

        /* Enhanced Alert Styles */
        .alert {
            padding: 1.2rem 2rem;
            border-radius: 15px;
            margin-bottom: 2rem;
            position: relative;
            z-index: 2;
            opacity: 0;
            transform: translateY(-10px);
            animation: fadeInDown 0.5s ease-out forwards;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .alert-success {
            background: linear-gradient(135deg, rgba(25, 135, 84, 0.15), rgba(25, 135, 84, 0.08));
            color: #198754;
            border-left: 4px solid #198754;
            border: 1px solid rgba(25, 135, 84, 0.2);
        }

        .alert-danger {
            background: linear-gradient(135deg, rgba(220, 53, 69, 0.15), rgba(220, 53, 69, 0.08));
            color: #dc3545;
            border-left: 4px solid #dc3545;
            border: 1px solid rgba(220, 53, 69, 0.2);
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.6);
            opacity: 0;
            transition: opacity 0.3s ease;
            backdrop-filter: blur(4px);
        }

        .modal.show {
            opacity: 1;
        }

        .modal-content {
            background-color: #fff;
            margin: 8% auto;
            max-width: 520px;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            transform: translateY(-50px);
            opacity: 0;
            transition: all 0.4s ease-out;
        }

        .modal.show .modal-content {
            transform: translateY(0);
            opacity: 1;
        }

        .modal-header {
            padding: 2rem;
            position: relative;
            background: linear-gradient(135deg, var(--primary-blue), #4377D1);
            color: white;
        }

        .modal-title {
            margin: 0;
            font-weight: 600;
            font-size: 1.4rem;
        }

        .close {
            position: absolute;
            right: 2rem;
            top: 2rem;
            color: white;
            font-size: 1.5rem;
            font-weight: 700;
            cursor: pointer;
            opacity: 0.8;
            transition: opacity 0.2s ease;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
        }

        .close:hover {
            opacity: 1;
            background: rgba(255, 255, 255, 0.2);
        }

        .modal-body {
            padding: 2rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.7rem;
            font-weight: 600;
            color: var(--text-dark);
        }

        .form-control {
            display: block;
            width: 100%;
            padding: 1rem 1.2rem;
            font-size: 1rem;
            line-height: 1.5;
            color: var(--text-dark);
            background-color: #fff;
            background-clip: padding-box;
            border: 2px solid var(--medium-gray);
            border-radius: 12px;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .form-control:focus {
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 0.2rem rgba(24, 84, 175, 0.15);
            outline: 0;
        }

        .modal-footer {
            padding: 1.5rem 2rem;
            background: linear-gradient(135deg, var(--light-gray), #f1f3f4);
            text-align: right;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes float {
            0%, 100% {
                transform: translate(0, 0) rotate(0deg);
            }
            33% {
                transform: translate(15px, -15px) rotate(2deg);
            }
            66% {
                transform: translate(-10px, 10px) rotate(-1deg);
            }
        }

        @keyframes float-alt {
            0%, 100% {
                transform: translate(0, 0) rotate(0deg);
            }
            33% {
                transform: translate(-12px, 18px) rotate(-2deg);
            }
            66% {
                transform: translate(8px, -12px) rotate(1deg);
            }
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .consultation-cards {
                max-width: 900px;
            }
        }

        @media (max-width: 991.98px) {
            .section-title {
                font-size: 2.3rem;
            }
            .consultation-cards {
                grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            }
            .decorative-circle-1,
            .decorative-circle-2,
            .decorative-circle-3,
            .decorative-circle-4 {
                opacity: 0.04;
            }
        }

        @media (max-width: 767.98px) {
            .book-consul {
                padding: 3rem 0;
            }
            .section-title {
                font-size: 2rem;
            }
            .consultation-cards {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }
            .consultation-tabs {
                flex-wrap: wrap;
                gap: 0.5rem;
            }
            .tab-btn {
                padding: 0.7rem 1.5rem;
                font-size: 0.9rem;
                margin-bottom: 0.5rem;
            }
            .card-header,
            .card-body,
            .card-footer {
                padding: 1.5rem;
            }
            .modal-content {
                margin: 5% auto;
                max-width: 95%;
            }
        }

        @media (max-width: 575.98px) {
            .section-badge {
                font-size: 0.8rem;
                padding: 0.5rem 1.5rem;
            }
            .section-title {
                font-size: 1.8rem;
            }
            .section-subtitle {
                font-size: 1rem;
            }
            .consultation-cards {
                grid-template-columns: 1fr;
            }
            .decorative-circle-1,
            .decorative-circle-2,
            .decorative-circle-3,
            .decorative-circle-4 {
                display: none;
            }
        }
    </style>
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
                <a class="nav-link fw-medium" aria-current="page" href="{{route('accueil')}}">Ikizen</a>
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
            <a class="nav-link fw-medium" href="{{route('consultations.index')}}">My consultations</a>
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
            </ul>
          </div>
        </div>
    </nav>

    <div style="height: 100px;"></div>

    <!-- CONTENT AREA STARTS HERE - THIS IS THE SECTION TO BE REDESIGNED -->
    <section class="book-consul">
        <!-- Decorative elements -->
        <div class="decorative-circle decorative-circle-1"></div>
        <div class="decorative-circle decorative-circle-2"></div>
        <div class="decorative-blob"></div>

        <div class="container position-relative">
            <!-- Session Messages -->
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
      
            @if(session('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
            @endif

            <!-- Section Header -->
          <div class="section-header">
                <div class="section-badge">My Appointments</div>
                <h2 class="section-title"><span>My Consultations</span></h2>
                <div class="section-divider"></div>
                <p class="section-subtitle">View and manage all your scheduled consultations with our expert professionals</p>
            </div>

            <!-- Tab Navigation -->
            <div class="consultation-tabs">
                <button class="tab-btn active" data-tab="all">All Consultations</button>
                <button class="tab-btn" data-tab="upcoming">Upcoming</button>
                <button class="tab-btn" data-tab="completed">Completed</button>
            </div>

            <!-- Consultation Cards -->
            @if($consultations->isEmpty())
                <div class="empty-state">
                    <div class="empty-state-icon">
                        <i class="fas fa-calendar-xmark"></i>
                    </div>
                    <h3 class="empty-state-title">No consultations yet</h3>
                    <p class="empty-state-text">You don't have any scheduled consultations. Book your first consultation with one of our experts.</p>
                    <a href="{{ route('test.start') }}" class="btn-book">Book Appointment</a>
                </div>
            @else
                <div class="consultation-cards">
                    @foreach($consultations as $index => $consultation)
                        <div class="consultation-card" 
                             style="animation: fadeInUp 0.8s ease-out forwards; animation-delay: {{ 0.1 + ($index * 0.1) }}s"
                             data-status="{{ $consultation->statut }}">
                            <div class="card-decoration"></div>
                            <div class="card-header">
                                <div class="expert-info">
                                    <img src="{{ asset('storage/' . $consultation->expert->photo) }}" class="expert-avatar" alt="{{ $consultation->expert->nom }}">
                                    <div class="expert-details">
                                        <h4 class="expert-name">{{ $consultation->expert->nom }}</h4>
                                        <p class="expert-specialty">{{ $consultation->expert->categorie }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="consultation-info">
                                    <div class="info-row">
                                        <div class="info-icon">
                                            <i class="far fa-calendar"></i>
                                        </div>
                                        <div class="info-content">
                                            <div class="info-label">Date</div>
                                            <div class="info-value">{{ $consultation->date_consultation }}</div>
                                        </div>
                                    </div>
                                    <div class="info-row">
                                        <div class="info-icon">
                                            <i class="far fa-clock"></i>
                                        </div>
                                        <div class="info-content">
                                            <div class="info-label">Time</div>
                                            <div class="info-value">{{ $consultation->heure_debut }}</div>
                                        </div>
                                    </div>
                                    <div class="info-row">
                                        <div class="info-icon">
                                            <i class="fas fa-hourglass-half"></i>
                                        </div>
                                        <div class="info-content">
                                            <div class="info-label">Duration</div>
                                            <div class="info-value">{{ $consultation->duree }} minutes</div>
                                        </div>
                                    </div>
                                    <div class="info-row">
                                        <div class="info-icon">
                                            <i class="fas fa-tag"></i>
                                        </div>
                                        <div class="info-content">
                                            <div class="info-label">Status</div>
                                            <div class="info-value">
                                                @if ($consultation->statut == 'non réalisée')
                                                    <span class="status-badge status-pending">Pending</span>
                                                @elseif ($consultation->statut == 'annulée')
                                                    <span class="status-badge status-cancelled">Cancelled</span>
                                                    <div class="info-label mt-2">Reason:</div>
                                                    <div class="info-value text-muted">{{ $consultation->motif_annulation }}</div>
                                                @elseif ($consultation->statut == 'réalisée')
                                                    <span class="status-badge status-completed">Completed</span>
                                                @else
                                                    <span class="status-badge">{{ $consultation->statut }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="price-tag">{{ $consultation->montant }} DHS</div>
                                <div>
                                    @if($consultation->statut == 'non réalisée')
                                        <button type="button" class="btn-action btn-delay" onclick="openDelayModal('{{ $consultation->id }}')">
                                            <i class="fas fa-clock me-1"></i> Delay
                                        </button>
                                    @endif
                                    @if($consultation->statut == 'réalisée' && is_null($consultation->rating))
                                        <button type="button" class="btn-action btn-rate" onclick="openRateModal('{{ $consultation->id }}')">
                                            <i class="fas fa-star me-1"></i> Rate
                                        </button>
                                    @elseif($consultation->statut == 'réalisée')
                                        <div class="rating-display">
                                            <span class="rating-text">{{ $consultation->rating }}</span>
                                            <i class="fas fa-star" style="color: var(--highlight-yellow);"></i>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>

        <!-- Delay Modal -->
        <div id="delayModal" class="modal">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delay Your Consultation</h4>
                    <span class="close" onclick="closeDelayModal()">&times;</span>
                </div>
                <form id="delayForm" action="" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="delay_reason" class="form-label">Reason for delay</label>
                            <textarea name="motif_annulation" id="delay_reason" class="form-control" required rows="3" placeholder="Please explain why you need to delay this consultation"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="delay_date" class="form-label">Preferred new date</label>
                            <input type="date" name="delay_date" id="delay_date" class="form-control" required min="{{ date('Y-m-d') }}">
                        </div>
                        <div class="form-group">
                            <label for="delay_time" class="form-label">Preferred new time</label>
                            <input type="time" name="delay_time" id="delay_time" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn-action btn-delay">Submit Request</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Rate Modal -->
        <div id="rateModal" class="modal">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Rate Your Consultation</h4>
                    <span class="close" onclick="closeRateModal()">&times;</span>
                </div>
                <form id="rateForm" action="" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="rating" class="form-label">Your rating</label>
                            <div class="rating-selector">
                                <select name="rating" id="rating" class="form-control" required>
                                    <option value="">Choose a rating...</option>
                                    @for($i = 1; $i <= 5; $i++)
                                        <option value="{{ $i }}">{{ $i }} ⭐</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn-action btn-rate">Submit Rating</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- CONTENT AREA ENDS HERE -->

    <!-- <section> begin ============================-->
    <section id="footer" class="pb-0 pb-lg-4">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-md-7 col-12 mb-4 mb-md-7 mb-lg-0 order-0"> <img class="mb-4" src="/home/assets/img/1-removebg-preview.png" width="150" alt="ikizen" />
              <p class="fs--1 text-secondary mb-0 fw-medium">Book your consultation in minutes, get the SOLUTION for your problems.</p>
            </div>
            <div class="col-lg-2 col-md-4 mb-4 mb-lg-0 order-lg-1 order-md-2">
              <h4 class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4">Ikizen</h4>
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
        <p class="mb-0 text-secondary fs--1 fw-medium">All rights reserved ikizen </p>
      </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Tab functionality
            const tabButtons = document.querySelectorAll('.tab-btn');
            const consultationCards = document.querySelectorAll('.consultation-card');
            
            tabButtons.forEach(button => {
                button.addEventListener('click', () => {
                    // Remove active class from all buttons
                    tabButtons.forEach(btn => btn.classList.remove('active'));
                    
                    // Add active class to clicked button
                    button.classList.add('active');
                    
                    // Filter cards based on tab
                    const tabType = button.getAttribute('data-tab');
                    
                    consultationCards.forEach(card => {
                        const status = card.getAttribute('data-status');
                        
                        if (tabType === 'all') {
                            card.style.display = 'block';
                        } else if (tabType === 'upcoming' && status === 'non réalisée') {
                            card.style.display = 'block';
                        } else if (tabType === 'completed' && status === 'réalisée') {
                            card.style.display = 'block';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                });
            });
        });

        // Modal functions
        function openDelayModal(consultationId) {
            const modal = document.getElementById("delayModal");
            const form = document.getElementById("delayForm");
            
            // Set the form action
            form.action = "{{ route('consultations.cancel', '') }}/" + consultationId;
            
            // Show modal with animation
            modal.style.display = "block";
            setTimeout(() => modal.classList.add('show'), 10);
        }

        function closeDelayModal() {
            const modal = document.getElementById("delayModal");
            modal.classList.remove('show');
            setTimeout(() => modal.style.display = "none", 300);
        }

        function openRateModal(consultationId) {
            const modal = document.getElementById("rateModal");
            const form = document.getElementById("rateForm");
            
            // Set the form action
            form.action = "{{ route('consultations.rate', '') }}/" + consultationId;
            
            // Show modal with animation
            modal.style.display = "block";
            setTimeout(() => modal.classList.add('show'), 10);
        }

        function closeRateModal() {
            const modal = document.getElementById("rateModal");
            modal.classList.remove('show');
            setTimeout(() => modal.style.display = "none", 300);
        }

        // Close modals when clicking outside
        window.onclick = function(event) {
            const delayModal = document.getElementById("delayModal");
            const rateModal = document.getElementById("rateModal");
            
            if (event.target === delayModal) {
                closeDelayModal();
            }
            
            if (event.target === rateModal) {
                closeRateModal();
            }
        }
    </script>

    <!-- JavaScripts -->
    <script src="/home/vendors/@popperjs/popper.min.js"></script>
    <script src="/home/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="/home/vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="/home/vendors/fontawesome/all.min.js"></script>
    <script src="/home/assets/js/theme.js"></script>

    <script src="//code.tidio.co/ezckblutrreap5ryuccizocwkfafx453.js" async></script>

    <script type="text/javascript" src="https://cdn.weglot.com/weglot.min.js"></script>
    <script>
        Weglot.initialize({
            api_key: 'wg_795455906f46076b7d3ac2c832807b665'
        });
    </script>
</body>
</html>
