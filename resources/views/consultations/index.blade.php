<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/home/assets/css/theme.css">

    <link rel="icon" type="image/png" sizes="32x32" href="/dashboard/assets/img/favicon.png">

    <title>IKIZEN - My Consultations</title>

    <style>
        .btn-cancel {
            background-color: #ff4d4d;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-cancel:hover {
            background-color: #ff1a1a;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
        }

        table {
            border-collapse: collapse;
        }

        th, td {
            text-align: left;
            padding: 15px;
            border-bottom: 1px solid #1351b447;
        }

        th {
            background-color: #f6f3f1;
            font-weight: bold;
        }

    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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


    <div class="container table-responsive book">
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

        <h2 class="text-warning mb-4 text-center">My consultations</h2>
        @if($consultations->isEmpty())
            <p>No consultation programmed.</p>
        @else
            <table>
                <thead>
                    <tr>
                        <th>Expert</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Duration</th>
                        <th>Price</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($consultations as $consultation)
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <img src="{{ asset('storage/' . $consultation->expert->photo) }}" width="70px" class="me-3" alt="{{$consultation->expert->nom}}">
                                      </div>
                                    <div class="d-flex flex-column justify-content-center">
                                      <h6 class="mb-0 text-sm">{{$consultation->expert->nom}}</h6>
                                      <p class="text-xs text-secondary mb-0">{{ $consultation->expert->categorie }}</p>
                                    </div>
                                  </div>
                            
                            </td>
                            <td>{{ $consultation->date_consultation }}</td>
                            <td>{{ $consultation->heure_debut }}</td>
                            <td>{{ $consultation->duree }} min</td>
                            <td>{{ $consultation->montant }} DHS</td>
                            <td>
                                @if ($consultation->statut == 'non réalisée')
                                <span class="badge badge-sm bg-warning">{{ $consultation->statut }}</span>
                                @elseif ($consultation->statut == 'annulée')
                                    <span class="badge badge-sm bg-danger">{{ $consultation->statut }}</span>
                                    <p class="text-xs text-secondary mb-0">{{ $consultation->motif_annulation }}</p>
                                @elseif ($consultation->statut == 'réalisée')
                                    <span class="badge badge-sm bg-success">{{ $consultation->statut }}</span>
                                @else
                                    <span class="badge badge-sm">{{ $consultation->statut }}</span>
                                @endif
                            </td>
                            <td>
                                @if($consultation->statut == 'non réalisée')
                                    <form action="{{ route('consultations.cancel', $consultation->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        <button type="button" class="btn btn-info" onclick="openModal()">Cancel</button>
                                        <!-- Modal -->
                                        <div id="myModal" class="modal">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <span class="close" onclick="closeModal()">&times;</span>
                                                    <h4>Do you want to cancel your consultation ?</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="motif_annulation">Reason for cancellation</label>
                                                        <textarea name="motif_annulation" id="motif_annulation" class="form-control" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-default">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                @endif
                                @if($consultation->statut == 'réalisée' && is_null($consultation->rating))
                                    <form action="{{ route('consultations.rate', $consultation->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        <button type="button" class="btn btn-success" onclick="openRate()">Rate</button>
                                        <!-- Modal -->
                                        <div id="rate" class="modal">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <span class="close" onclick="closeRate()">&times;</span>
                                                    <h4>Rate the expert</h4>
                                                </div>
                                                <div class="modal-body">

                                                    <div class="form-group">
                                                      <label for="rating">Votre note :</label>
                                                      <select name="rating" class="form-control" required>
                                                        <option value="">Choisissez...</option>
                                                        @for($i = 1; $i <= 5; $i++)
                                                            <option value="{{ $i }}">{{ $i }} ⭐</option>
                                                        @endfor
                                                      </select>
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-default">Rate</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                      @elseif($consultation->statut == 'réalisée')
                                      <p>Given rate : {{ $consultation->rating }} ⭐</p>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
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
        function openModal() {
            document.getElementById("myModal").style.display = "block";
        }

        function closeModal() {
            document.getElementById("myModal").style.display = "none";
        }

        function openRate() {
            document.getElementById("rate").style.display = "block";
        }

        function closeRate() {
            document.getElementById("rate").style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == document.getElementById("myModal")) {
                closeModal();
            }

            if (event.target == document.getElementById("rate")) {
                closeRate();
            }
        }
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

    <script src="//code.tidio.co/ezckblutrreap5ryuccizocwkfafx453.js" async></script>

    <script type="text/javascript" src="https://cdn.weglot.com/weglot.min.js"></script>
    <script>
        Weglot.initialize({
            api_key: 'wg_f046143884ddc4609603fcad0408ce432'
        });
    </script>
</body>
</html>
