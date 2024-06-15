<!DOCTYPE html>
<html>
<head>
    @include('user.css')
    <title>IKIGAI - Recommended Experts</title>
    <style>
        /* CSS de base */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        
        h1 {
            text-align: center;
            margin-top: 120px;
            color: #333;
        }
        
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        /* Expert Grid Styling */
        .expert-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }
        
        .expert-card {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            width: calc(25% - 40px);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }
        
        .expert-card:hover {
            transform: translateY(-5px);
        }
        
        .expert-card img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            margin-bottom: 15px;
        }
        
        .expert-card h3 {
            font-size: 1.2em;
            margin: 10px 0;
            color: #333;
        }
        
        .expert-card p {
            margin: 5px 0;
            color: #666;
        }
        
        .expert-card a {
            background-color: #5cb85c;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            margin-top: 10px;
        }
        
        .expert-card a:hover {
            background-color: #4cae4c;
        }
        
        @media (max-width: 768px) {
            .expert-card {
                width: calc(50% - 40px);
            }
        }
        
        @media (max-width: 480px) {
            .expert-card {
                width: calc(100% - 40px);
            }
        }
    </style>
</head>
<body>
    @include('user.menu')

    <div class="container">
        <h1>Recommended Experts</h1>
        @if($experts->isEmpty())
            <p>No experts found based on your responses.</p>
        @else
            <div class="expert-grid">
                @foreach ($experts as $expert)
                    <div class="expert-card">
                        <img src="{{ asset('storage/' . $expert->photo) }}" alt="{{ $expert->nom }}">
                        <h3>{{ $expert->nom }}</h3>
                        <p>{{ $expert->categorie }}</p>
                        <p>{{ $expert->experience }} years</p>
                        <p>{{ $expert->tarif }} DHS</p>
                        <a href="{{ route('consultations.create', ['expert_id' => $expert->id]) }}">Réserver</a>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
          <!-- <section> begin ============================-->
            <section id="footer" class="pb-0 pb-lg-4">

                <div class="container">
                  <div class="row">
                    <div class="col-lg-5 col-md-7 col-12 mb-4 mb-md-7 mb-lg-0 order-0"> <img class="mb-4" src="home/assets/img/1-removebg-preview.png" width="150" alt="ikigai" />
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
    @include('user.script')
</body>
</html>

