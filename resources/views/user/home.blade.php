<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <head>
    @include('user.css')
    <title>IKIZEN | Your career, our responsability</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  </head>

  <body>

    <main class="main" id="top">
    @include('user.menu');

      <section style="padding-top: 7rem;">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-5 col-lg-6 order-0 order-md-1 text-end">
                <div class="video-container w-100">
                    <video class="hero-video" autoplay loop muted playsinline>
                      <source src="home/assets/video/anim_logo.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
            <div class="col-md-7 col-lg-6 text-md-start text-center py-6">
              <h4 class="fw-bold text-danger mb-3 animate-element fade-in-up">Take Your Career to Another Level</h4>
              <h1 class="hero-title animate-element fade-in-up">Work, studies and career guidance</h1>
              <p class="mb-4 fw-medium animate-element fade-in-up" style="animation-delay: 0.4s;">Don't look far, Ikizen is here <br class="d-none d-xl-block" />to help you find your way!!!<br class="d-none d-xl-block" /></p>
              <div class="text-center text-md-start animate-element fade-in-up" style="animation-delay: 0.6s;"> <a class="btn btn-primary btn-lg me-md-4 mb-3 mb-md-0 border-0 primary-btn-shadow float-animation pulse-button" href="{{ route('test.start') }}" role="button">Book now</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- <section> begin ============================-->
      <section class="pt-5 pt-md-9" id="service">

        <div class="container">
          <div class="position-absolute z-index--1 end-0 d-none d-lg-block"><img src="home/assets/img/category/shape.svg" style="max-width: 200px" alt="service" /></div>
          <div class="mb-7 text-center">
            <h5 class="text-secondary">IKIZEN </h5>
            <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">Why Ikizen ?</h3>
          </div>
          <div class="row">
            <div class="col-lg-3 col-sm-6 mb-6">
              <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                <div class="card-body p-xxl-5 p-4"> <img src="home/assets/img/category/entraineur.png" width="75" alt="Service" />
                  <h4 class="mb-3">Experienced coaches</h4>
                  <p class="mb-0 fw-medium">All our experts have years of experience.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-6">
              <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                <div class="card-body p-xxl-5 p-4"> <img src="home/assets/img/category/carte-dacces.png" width="75" alt="Service" />
                  <h4 class="mb-3">Access facility</h4>
                  <p class="mb-0 fw-medium">By booking consultations online, access to information is faster</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-6">
              <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                <div class="card-body p-xxl-5 p-4"> <img src="home/assets/img/category/cliquez-sur.png" width="75" alt="Service" />
                  <h4 class="mb-3">In one click</h4>
                  <p class="mb-0 fw-medium">Once your consultation is booked, all you have to do is wait for the day.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-6">
              <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                <div class="card-body p-xxl-5 p-4"> <img src="home/assets/img/category/examen.png" width="75" alt="Service" />
                  <h4 class="mb-3">Experience</h4>
                  <p class="mb-0 fw-medium">Our service is one of the best!!</p>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->

      <!-- <section> begin ============================-->
      <section class="pt-5" id="destination">

        <div class="container">
          <div class="position-absolute start-100 bottom-0 translate-middle-x d-none d-xl-block ms-xl-n4"><img src="home/assets/img/dest/shape.svg" alt="destination" /></div>
          <div class="mb-7 text-center">
            <h5 class="text-secondary">Our Coaches </h5>
            <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">Discover our coaches selection</h3>
          </div>
          <div class="row">

            <div class="row expert-cards">
              @foreach ($experts as $expert)      
                <div class="col-md-4 mb-5">
                  <!-- Expert Card with Animation -->
                  <div class="expert-card">
                    <div class="expert-card-inner">
                      <!-- Front of Card -->
                      <div class="expert-card-front">
                        <div class="expert-image-container">
                          <div class="expert-image-wrapper">
                            <img src="{{ asset('storage/' . $expert->photo) }}" alt="{{ $expert->prenom }} {{ $expert->nom }}" class="expert-image">
                          </div>
                          <div class="expert-badge">Top Rated</div>
                        </div>
                        <div class="expert-info">
                          <h3 class="expert-name">{{ $expert->prenom }} {{ $expert->nom }}</h3>

                          @php
                            $ratings = $expert->consultations->pluck('rating')->filter();
                            $averageRating = $ratings->count() ? number_format($ratings->avg(), 1) : null;
                            $reviewCount = $ratings->count();

                          @endphp

                          @if ($averageRating)
                            <div class="expert-rating">
                              <span class="stars">
                                @for ($i = 0; $i < floor($averageRating); $i++)
                                  <i class="fas fa-star"></i>
                                @endfor
                                @if ($averageRating - floor($averageRating) >= 0.5)
                                  <i class="fas fa-star-half-alt"></i>
                                @endif
                              </span>
                              <span class="rating-count">{{ $averageRating }}/5</span>
                              <span class="review-count text-muted ms-2">({{ $reviewCount }} reviews)</span>

                            </div>
                          @else
                            <div class="expert-rating text-muted">Not yet rated</div>
                          @endif

                          <div class="expert-tags">
                            @foreach (explode(',', $expert->categorie) as $cat)
                              <span class="tag">{{ trim($cat) }}</span>
                            @endforeach
                          </div>
                          <div class="expert-details">
                            <div class="detail">
                              <i class="me-2 fas fa-briefcase"></i>
                              <span>Experience: {{ $expert->experience }} years</span>
                            </div>
                            <div class="detail">
                              <i class="me-2 fas fa-money-bill-wave"></i>
                              <span>{{ $expert->tarif }} DHS/30min</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="expert-card-back">
                        <div class="expert-bio">
                          <h4>About {{ $expert->prenom }}</h4>
                          <p>{{ $expert->bio ?? 'No bio available for this expert.' }}</p>
                          <div class="expertise-areas">
                            <h5>Areas of Expertise:</h5>
                            <ul>
                              @foreach (explode(',', $expert->domaine) as $dom)
                                <li>{{ trim($dom) }}</li>
                              @endforeach
                            </ul>
                          </div>
                        </div>
                        <a href="{{ route('consultations.create', ['expert_id' => $expert->id]) }}" class="book-button">
                          Book Consultation
                          <i class="fas fa-arrow-right"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
            

          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->

      <!-- <section> begin ============================-->
      <section id="booking">

        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="mb-4 text-start">
                <h5 class="text-secondary">Easy and Fast </h5>
                <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">Book your consultation <span class="text-primary">NOW</span> </h3>
              </div>
              <div class="d-flex align-items-start mb-5">
                <div class="step-number bg-primary me-sm-4 me-3 p-3" style="border-radius: 13px"> 1</div>
                <div class="flex-1">
                  <h5 class="text-secondary fw-bold fs-0">Select the expert</h5>
                  <p>Choose the coach you want, or the <br class="d-none d-sm-block"> expert we recommend you.</p>
                </div>
              </div>
              <div class="d-flex align-items-start mb-5">
                <div class="step-number bg-danger me-sm-4 me-3 p-3" style="border-radius: 13px">2 </div>
                <div class="flex-1">
                  <h5 class="text-secondary fw-bold fs-0">Schedule your consultation</h5>
                  <p>Choose the date and time that suits<br class="d-none d-sm-block"> you, and make your payment.</p>
                </div>
              </div>
              <div class="d-flex align-items-start mb-5">
                <div class="step-number bg-info me-sm-4 me-3 p-3" style="border-radius: 13px">3 </div>
                <div class="flex-1">
                  <h5 class="text-secondary fw-bold fs-0">Make your video call</h5>
                  <p> When your consultation time arrives, <br class="d-none d-sm-block"> communicate with the expert through video call.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 d-flex justify-content-center align-items-start">
              <div class="card position-relative shadow" style="max-width: 370px;">
                <div class="position-absolute z-index--1 me-10 me-xxl-0" style="right:-160px;top:-210px;"> <img src="home/assets/img/steps/bg.png" style="max-width:550px;" alt="shape" /></div>
                <div class="card-body p-3"> <img class="mb-4 mt-2 rounded-2 w-100" src="home/assets/img/right-image.svg" alt="booking" />

                </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->

      <!-- <section> begin ============================-->
      <section id="testimonial">

        <div class="container">
          <div class="row">
            <div class="col-lg-5">
              <div class="mb-8 text-start">
                <h5 class="text-secondary">Testimonials </h5>
                <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">What people say about Us.</h3>
              </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-6">
              <div class="pe-7 ps-5 ps-lg-0">
                <div class="carousel slide carousel-fade position-static" id="testimonialIndicator" data-bs-ride="carousel">
                  <div class="carousel-indicators">
                    <button class="active" type="button" data-bs-target="#testimonialIndicator" data-bs-slide-to="0" aria-current="true" aria-label="Testimonial 0"></button>
                    <button class="false" type="button" data-bs-target="#testimonialIndicator" data-bs-slide-to="1" aria-current="true" aria-label="Testimonial 1"></button>
                    <button class="false" type="button" data-bs-target="#testimonialIndicator" data-bs-slide-to="2" aria-current="true" aria-label="Testimonial 2"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item position-relative active">
                      <div class="card shadow" style="border-radius:10px;">
                        <div class="position-absolute start-0 top-0 translate-middle"> <img class="rounded-circle fit-cover" src="home/assets/img/testimonial/author.png" height="65" width="65" alt="" /></div>
                        <div class="card-body p-4">
                          <p class="fw-medium mb-4">&quot;Before graduating, I was lost about my career, but thanks to Ikizen and the advice of the experts, I was able to find my path by choosing to study computer science and I love it.&quot;</p>
                          <h5 class="text-secondary">Adam Mounir</h5>
                          <p class="fw-medium fs--1 mb-0">Baccalaureate student</p>
                        </div>
                      </div>
                      <div class="card shadow-sm position-absolute top-0 z-index--1 mb-3 w-100 h-100" style="border-radius:10px;transform:translate(25px, 25px)"> </div>
                    </div>
                    <div class="carousel-item position-relative ">
                      <div class="card shadow" style="border-radius:10px;">
                        <div class="position-absolute start-0 top-0 translate-middle"> <img class="rounded-circle fit-cover" src="home/assets/img/testimonial/author3.png" height="65" width="65" alt="" /></div>
                        <div class="card-body p-4">
                          <p class="fw-medium mb-4">&quot;Before, I worked as an employee in a private company as a community manager, but office hours were not for me. So I decided to convert.&quot;</p>
                          <h5 class="text-secondary">Sara Ktoun</h5>
                          <p class="fw-medium fs--1 mb-0">Photographer</p>
                        </div>
                      </div>
                      <div class="card shadow-sm position-absolute top-0 z-index--1 mb-3 w-100 h-100" style="border-radius:10px;transform:translate(25px, 25px)"> </div>
                    </div>
                    <div class="carousel-item position-relative ">
                      <div class="card shadow" style="border-radius:10px;">
                        <div class="position-absolute start-0 top-0 translate-middle"> <img class="rounded-circle fit-cover" src="home/assets/img/testimonial/author2.png" height="65" width="65" alt="" /></div>
                        <div class="card-body p-4">
                          <p class="fw-medium mb-4">&quot;As CEO, I have a whole team to manage, so to be on the same wavelength as my team, I opted for a personal development consultation and it helped me.&quot;</p>
                          <h5 class="text-secondary">Saad Rahmouni</h5>
                          <p class="fw-medium fs--1 mb-0">CEO of X Company</p>
                        </div>
                      </div>
                      <div class="card shadow-sm position-absolute top-0 z-index--1 mb-3 w-100 h-100" style="border-radius:10px;transform:translate(25px, 25px)"> </div>
                    </div>
                  </div>
                  <div class="carousel-navigation d-flex flex-column flex-between-center position-absolute end-0 top-lg-50 bottom-0 translate-middle-y z-index-1 me-3 me-lg-0" style="height:60px;width:20px;">
                    <button class="carousel-control-prev position-static" type="button" data-bs-target="#testimonialIndicator" data-bs-slide="prev"><img src="home/assets/img/icons/up.svg" width="16" alt="icon" /></button>
                    <button class="carousel-control-next position-static" type="button" data-bs-target="#testimonialIndicator" data-bs-slide="next"><img src="home/assets/img/icons/down.svg" width="16" alt="icon" /></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->

      <!-- <section> begin ============================-->
      <section id="footer" class="pb-0 pb-lg-4">

        <div class="footer-bg-wrapper">
          <div class="footer-bg-animation">
            <div class="footer-bg-shape shape1"></div>
            <div class="footer-bg-shape shape2"></div>
            <div class="footer-bg-shape shape3"></div>
            <div class="footer-bg-shape shape4"></div>
          </div>
        </div>


        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-md-7 col-12 mb-4 mb-md-7 mb-lg-0 order-0"> <img class="mb-4 float-animation" src="home/assets/img/1-removebg-preview.png" width="150" alt="ikizen" />
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
    </main>
    {{-- @include('profile.partials.chatbot') --}}

    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->
    @include('user.script');

    <script>
      // Add animation when cards enter viewport
      document.addEventListener('DOMContentLoaded', function() {
        const expertCards = document.querySelectorAll('.expert-card');
        
        const observerOptions = {
          threshold: 0.3,
          rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver(function(entries, observer) {
          entries.forEach(entry => {
            if (entry.isIntersecting) {
              entry.target.classList.add('animate-in');
              observer.unobserve(entry.target);
            }
          });
        }, observerOptions);
        
        expertCards.forEach(card => {
          observer.observe(card);
          
          // Add initial hidden state for animation
          card.style.opacity = '0';
          card.style.transform = 'translateY(30px)';
          card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        });
        
        // Animation class
        document.head.insertAdjacentHTML('beforeend', `
          <style>
            .expert-card.animate-in {
              opacity: 1 !important;
              transform: translateY(0) !important;
            }
            
            .col-md-4:nth-child(2) .expert-card {
              transition-delay: 0.2s;
            }
            
            .col-md-4:nth-child(3) .expert-card {
              transition-delay: 0.4s;
            }
          </style>
        `);
      });
    </script>

    <script>
      document.addEventListener('DOMContentLoaded', function() {
        function isInViewport(element) {
          const rect = element.getBoundingClientRect();
          return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
          );
        }
      
        const animateElements = document.querySelectorAll('.animate-element');
        
        function animateOnScroll() {
          animateElements.forEach(element => {
            if (isInViewport(element) && !element.classList.contains('animated')) {
              const delay = element.style.animationDelay || '0s';
              
              setTimeout(() => {
                element.classList.add('animated');
              }, parseFloat(delay) * 1000);
            }
          });
        }
        
        animateOnScroll();
        
        window.addEventListener('scroll', animateOnScroll);
      });
      </script>

    <script src="//code.tidio.co/ezckblutrreap5ryuccizocwkfafx453.js" async></script>

    <script type="text/javascript" src="https://cdn.weglot.com/weglot.min.js"></script>
    <script>
        Weglot.initialize({
            api_key: 'wg_f046143884ddc4609603fcad0408ce432'
        });
    </script>
  </body>

</html>