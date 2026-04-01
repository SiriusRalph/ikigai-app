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
    @include('user.menu')

    <section style="padding-top: 7rem; position: relative; overflow: hidden; background: linear-gradient(135deg, #f9fafb 0%, #e5e7eb 100%);">
      <!-- Floating Particles Background -->
      <div class="particles-container" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; z-index: 0; overflow: hidden;">
        <div class="particle" style="--size: 60px; --color: rgba(79, 70, 229, 0.1); --top: 20%; --left: 20%; --animation: float1 8s ease-in-out infinite;"></div>
        <div class="particle" style="--size: 40px; --color: rgba(99, 102, 241, 0.1); --top: 70%; --left: 10%; --animation: float2 10s ease-in-out infinite;"></div>
        <div class="particle" style="--size: 25px; --color: rgba(79, 70, 229, 0.1); --top: 30%; --right: 30%; --animation: float3 7s ease-in-out infinite;"></div>
        <div class="particle" style="--size: 15px; --color: rgba(99, 102, 241, 0.1); --top: 80%; --right: 15%; --animation: float1 12s ease-in-out infinite;"></div>
      </div>
      
      <div class="container">
        <div class="row align-items-center">
          <!-- Video Column (Original Placement) -->
          <div class="col-md-5 col-lg-6 order-0 order-md-1 text-end position-relative" style="z-index: 1;">
            <div class="video-container w-100 rounded- overflow-hidden shadow-lg" style="transition: all 0.5s ease;">
              <video class="hero-video w-100" autoplay loop muted playsinline style="transition: transform 0.5s ease;">
                <source src="home/assets/video/anim_logo.mp4" type="video/mp4">
              </video>
            </div>
          </div>
          
          <!-- Text Content Column -->
          <div class="col-md-7 col-lg-6 text-md-start text-center py-6 position-relative" style="z-index: 1;">
            <h4 class="fw-bold text-danger mb-3" style="opacity: 0; transform: translateY(20px); animation: fadeInUp 0.8s ease-out 0.2s forwards;">Take Your Career to Another Level</h4>
            <h1 class="hero-title mb-4" style="opacity: 0; transform: translateY(20px); animation: fadeInUp 0.8s ease-out 0.4s forwards; font-size: 2.5rem; line-height: 1.2; background: linear-gradient(to right, #4F46E5, #6366F1); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Work, studies and career guidance</h1>
            <p class="mb-4 fw-medium" style="opacity: 0; transform: translateY(20px); animation: fadeInUp 0.8s ease-out 0.6s forwards; color: #4b5563;">Don't look far, Ikizen is here <br class="d-none d-xl-block" />to help you find your way!!!<br class="d-none d-xl-block" /></p>
            <div class="text-center text-md-start" style="opacity: 0; transform: translateY(20px); animation: fadeInUp 0.8s ease-out 0.8s forwards;"> 
              <a class="btn btn-primary btn-lg me-md-4 mb-3 mb-md-0 border-0" href="{{ route('test.start') }}" role="button" style="background: linear-gradient(45deg, #4F46E5, #6366F1); box-shadow: 0 4px 15px rgba(79, 70, 229, 0.3); transition: all 0.3s ease; position: relative; overflow: hidden;">
                <span style="position: relative; z-index: 1;">Book now</span>
                <span class="hover-effect" style="position: absolute; top: 0; left: -100%; width: 100%; height: 100%; background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent); transition: all 0.5s ease;"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
      
      <style>
          /* Particle animations */
          @keyframes float1 {
              0%, 100% { transform: translate(0, 0) rotate(0deg); }
              25% { transform: translate(-15px, 15px) rotate(5deg); }
              50% { transform: translate(10px, 30px) rotate(-5deg); }
              75% { transform: translate(15px, 15px) rotate(2deg); }
          }
          
          @keyframes float2 {
              0%, 100% { transform: translate(0, 0) rotate(0deg); }
              25% { transform: translate(15px, -15px) rotate(-5deg); }
              50% { transform: translate(-10px, -30px) rotate(5deg); }
              75% { transform: translate(-15px, -15px) rotate(-2deg); }
          }
          
          @keyframes float3 {
              0%, 100% { transform: translate(0, 0) rotate(0deg); }
              25% { transform: translate(-25px, -25px) rotate(10deg); }
              50% { transform: translate(20px, 20px) rotate(-10deg); }
              75% { transform: translate(25px, -25px) rotate(5deg); }
          }
          
          @keyframes fadeInUp {
              from { opacity: 0; transform: translateY(20px); }
              to { opacity: 1; transform: translateY(0); }
          }
          
          .particle {
              position: absolute;
              border-radius: 50%;
              background: var(--color);
              width: var(--size);
              height: var(--size);
              top: var(--top);
              left: var(--left);
              right: var(--right);
              animation: var(--animation);
          }
          
          
          
          
          
          .btn-primary:hover {
              transform: translateY(-3px) !important;
              box-shadow: 0 10px 20px rgba(79, 70, 229, 0.4) !important;
          }
          
          .btn-primary:hover .hover-effect {
              left: 100%;
          }
      </style>
      
      <script>
          document.addEventListener('DOMContentLoaded', function() {
              // Add hover effect to video container
              
              
              // Add hover effect to button
              const btn = document.querySelector('.btn-primary');
              if (btn) {
                  btn.addEventListener('mouseenter', function() {
                      this.style.transform = 'translateY(-3px)';
                      this.style.boxShadow = '0 10px 20px rgba(79, 70, 229, 0.4)';
                  });
                  
                  btn.addEventListener('mouseleave', function() {
                      this.style.transform = 'translateY(0)';
                      this.style.boxShadow = '0 4px 15px rgba(79, 70, 229, 0.3)';
                  });
              }
          });
      </script>
    </section>

      <!-- <section> begin ============================-->
        <section class="pt-5 pt-md-9" id="service" style="position: relative; overflow: hidden; background: linear-gradient(to bottom, #ffffff 0%, #f8f9fa 100%);">
          <!-- Decorative elements -->
          <div class="position-absolute z-index--1 end-0 d-none d-lg-block">
            <svg width="200" height="200" viewBox="0 0 200 200" class="floating-shape">
              <defs>
                <linearGradient id="shapeGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                  <stop offset="0%" stop-color="rgba(79, 70, 229, 0.08)" />
                  <stop offset="100%" stop-color="rgba(99, 102, 241, 0.08)" />
                </linearGradient>
              </defs>
              <path d="M190,10 C230,40 230,110 190,140 C150,170 110,190 70,160 C30,130 10,80 30,40 C50,0 150,-20 190,10" fill="url(#shapeGradient)"></path>
            </svg>
          </div>
          
          <div class="position-absolute z-index--1 start-0 bottom-0 d-none d-lg-block">
            <svg width="150" height="150" viewBox="0 0 150 150" class="floating-shape-alt">
              <defs>
                <linearGradient id="shapeGradient2" x1="0%" y1="0%" x2="100%" y2="100%">
                  <stop offset="0%" stop-color="rgba(79, 70, 229, 0.05)" />
                  <stop offset="100%" stop-color="rgba(99, 102, 241, 0.05)" />
                </linearGradient>
              </defs>
              <circle cx="75" cy="75" r="60" fill="url(#shapeGradient2)"></circle>
            </svg>
          </div>
          
          <div class="container position-relative" style="z-index: 2;">
            <div class="mb-7 text-center">
              <div class="badge bg-light text-primary fw-medium mb-3 animate-element">IKIZEN</div>
              <h2 class="display-5 fw-bold text-capitalize mb-4 animate-element delay-1">
                <span class="gradient-text">Why Choose Ikizen?</span>
              </h2>
              <p class="lead text-muted mb-4 mx-auto animate-element delay-2" style="max-width: 650px;">
                Discover the premium services that make us the preferred choice for professionals.
              </p>
              <div class="divider mx-auto animate-element delay-3"></div>
            </div>
            
            <div class="row g-4">
              <!-- Service Card 1 -->
              <div class="col-lg-3 col-md-6 animate-card" data-delay="0.3s">
                <div class="card service-card h-100 border-0">
                  <div class="card-body p-4 p-xl-5 text-center">
                    <div class="icon-box mb-4">
                      <div class="icon-inner">
                        <svg viewBox="0 0 24 24" width="28" height="28" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon-svg">
                          <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                          <circle cx="9" cy="7" r="4"></circle>
                          <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                          <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                      </div>
                    </div>
                    <h4 class="fw-bold mb-3">Expert Coaches</h4>
                    <p class="text-muted mb-0">Our team consists of industry professionals with years of verified experience and proven success records.</p>
                  </div>
                </div>
              </div>
              
              <!-- Service Card 2 -->
              <div class="col-lg-3 col-md-6 animate-card" data-delay="0.4s">
                <div class="card service-card h-100 border-0">
                  <div class="card-body p-4 p-xl-5 text-center">
                    <div class="icon-box mb-4">
                      <div class="icon-inner">
                        <svg viewBox="0 0 24 24" width="28" height="28" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon-svg">
                          <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                          <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                        </svg>
                      </div>
                    </div>
                    <h4 class="fw-bold mb-3">Easy Access</h4>
                    <p class="text-muted mb-0">Book consultations online for faster access to information and seamless scheduling experience.</p>
                  </div>
                </div>
              </div>
              
              <!-- Service Card 3 -->
              <div class="col-lg-3 col-md-6 animate-card" data-delay="0.5s">
                <div class="card service-card h-100 border-0">
                  <div class="card-body p-4 p-xl-5 text-center">
                    <div class="icon-box mb-4">
                      <div class="icon-inner">
                        <svg viewBox="0 0 24 24" width="28" height="28" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon-svg">
                          <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                          <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                      </div>
                    </div>
                    <h4 class="fw-bold mb-3">One Click Solution</h4>
                    <p class="text-muted mb-0">Simple booking process — reserve your consultation and we'll handle everything else until your appointment.</p>
                  </div>
                </div>
              </div>
              
              <!-- Service Card 4 -->
              <div class="col-lg-3 col-md-6 animate-card" data-delay="0.6s">
                <div class="card service-card h-100 border-0">
                  <div class="card-body p-4 p-xl-5 text-center">
                    <div class="icon-box mb-4">
                      <div class="icon-inner">
                        <svg viewBox="0 0 24 24" width="28" height="28" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon-svg">
                          <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                        </svg>
                      </div>
                    </div>
                    <h4 class="fw-bold mb-3">Premium Experience</h4>
                    <p class="text-muted mb-0">Our top-rated service provides exceptional quality and satisfaction that exceeds expectations.</p>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- CTA Button -->
            <div class="text-center mt-5 animate-element delay-4">
              <a href="{{ route('test.start') }}" class="btn btn-primary btn-lg shadow-lg">Book Your Consultation</a>
            </div>
          </div>
        
          <style>
            /* Base Styles */
            :root {
              --primary: #4F46E5;
              --primary-light: #6366F1;
              --primary-dark: #4338CA;
              --primary-hover: #4338CA;
              --primary-bg-light: rgba(79, 70, 229, 0.1);
              --card-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
              --card-shadow-hover: 0 20px 40px rgba(79, 70, 229, 0.15);
              --animation-timing: cubic-bezier(0.25, 0.46, 0.45, 0.94);
            }
            
            /* Section Styling */
            #service {
              padding-top: 5rem;
              padding-bottom: 5rem;
            }
            
            /* Badge Styling */
            .badge {
              padding: 0.6rem 1.25rem;
              border-radius: 50px;
              font-size: 0.9rem;
              letter-spacing: 0.5px;
            }
            
            .gradient-text {
              background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
              -webkit-background-clip: text;
              -webkit-text-fill-color: transparent;
              background-clip: text;
              color: transparent;
            }
            
            /* Divider */
            .divider {
              width: 80px;
              height: 4px;
              background: linear-gradient(to right, var(--primary), var(--primary-light));
              border-radius: 2px;
              margin-bottom: 2rem;
            }
            
            /* Animation Elements */
            .animate-element {
              opacity: 0;
              transform: translateY(20px);
              animation: fadeInUp 0.8s var(--animation-timing) forwards;
            }
            
            .delay-1 {
              animation-delay: 0.2s;
            }
            
            .delay-2 {
              animation-delay: 0.4s;
            }
            
            .delay-3 {
              animation-delay: 0.6s;
            }
            
            .delay-4 {
              animation-delay: 0.8s;
            }
            
            .animate-card {
              opacity: 0;
              transform: translateY(30px);
            }
            
            /* Card Styling */
            /* Service Card Styling */
            .service-card {
              transition: all 0.5s var(--animation-timing);
              border-radius: 16px;
              overflow: hidden;
              box-shadow: var(--card-shadow);
              position: relative;
              z-index: 2; /* Increased z-index */
              background-color: #ffffff; /* Ensure solid background */
            }
            
            .service-card:before {
              content: '';
              position: absolute;
              top: 0;
              left: 0;
              width: 100%;
              height: 0;
              background: linear-gradient(135deg, var(--primary-bg-light) 0%, rgba(99, 102, 241, 0.08) 100%);
              transition: all 0.5s var(--animation-timing);
              z-index: -1; /* Place behind content */
            }
            
            .service-card:hover .icon-box {
              background: linear-gradient(135deg, rgba(79, 70, 229, 0.2) 0%, rgba(99, 102, 241, 0.2) 100%);
            }
            
            .service-card:hover .icon-svg {
              stroke: var(--primary);
            }
            
            .service-card:hover h4 {
              color: var(--primary);
            }
            
            .hover-indicator {
              position: absolute;
              bottom: 0;
              left: 0;
              height: 0;
              width: 100%;
              background: linear-gradient(to right, var(--primary), var(--primary-light));
              transition: all 0.3s var(--animation-timing);
            }
            
            .service-card:hover h4 {
              color: var(--primary);
            }
            .icon-box {
              width: 70px;
              height: 70px;
              border-radius: 50%;
              background: var(--primary-bg-light);
              display: flex;
              align-items: center;
              justify-content: center;
              margin: 0 auto;
              transition: all 0.4s var(--animation-timing);
            }
            
            .icon-inner {
              width: 50px;
              height: 50px;
              display: flex;
              align-items: center;
              justify-content: center;
            }
            
            .icon-svg {
              stroke: #6B7280;
              transition: all 0.4s var(--animation-timing);
            }
            
            /* Floating animations */
            .floating-shape {
              animation: float 10s ease-in-out infinite;
            }
            
            .floating-shape-alt {
              animation: float-alt 8s ease-in-out infinite;
            }
            
            /* Button styling */
            .btn-primary {
              background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
              border: none;
              padding: 0.8rem 2rem;
              border-radius: 50px;
              transition: all 0.3s ease;
            }
            
            .btn-primary:hover {
              background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%);
              transform: translateY(-3px);
            }
            
            /* Animations */
            @keyframes fadeInUp {
              from {
                opacity: 0;
                transform: translateY(20px);
              }
              to {
                opacity: 1;
                transform: translateY(0);
              }
            }
            
            @keyframes float {
              0%, 100% {
                transform: translateY(0) rotate(0deg);
              }
              50% {
                transform: translateY(-20px) rotate(5deg);
              }
            }
            
            @keyframes float-alt {
              0%, 100% {
                transform: translateY(0) rotate(0deg);
              }
              50% {
                transform: translateY(15px) rotate(-5deg);
              }
            }
            
            /* Responsive adjustments */
            @media (max-width: 991.98px) {
              .service-card {
                margin-bottom: 1.5rem;
              }
            }
          </style>
        
          <script>
            document.addEventListener('DOMContentLoaded', function() {
              // Animate cards on scroll with staggered delay
              const animateCards = document.querySelectorAll('.animate-card');
              
              // Intersection Observer for smooth animations
              const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                  if (entry.isIntersecting) {
                    const card = entry.target;
                    const delay = parseFloat(card.getAttribute('data-delay'));
                    
                    card.style.animation = `fadeInUp 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94) ${delay}s forwards`;
                    
                    // Unobserve after animation
                    observer.unobserve(card);
                  }
                });
              }, { threshold: 0.1 });
              
              // Observe each card
              animateCards.forEach(card => {
                observer.observe(card);
              });
              
              // Add enhanced interactions
              const serviceCards = document.querySelectorAll('.service-card');
              
              serviceCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                  this.style.transform = 'translateY(-10px)';
                  this.style.boxShadow = 'var(--card-shadow-hover)';
                  this.querySelector('h4').style.color = 'var(--primary)';
                  this.querySelector('.icon-svg').style.stroke = 'var(--primary)';
                  this.querySelector('.icon-box').style.background = 'linear-gradient(135deg, rgba(79, 70, 229, 0.2) 0%, rgba(99, 102, 241, 0.2) 100%)';
                });
                
                card.addEventListener('mouseleave', function() {
                  this.style.transform = '';
                  this.style.boxShadow = '';
                  this.querySelector('h4').style.color = '';
                  this.querySelector('.icon-svg').style.stroke = '';
                  this.querySelector('.icon-box').style.background = '';
                });
              });
            });
          </script>
        </section>
      <!-- <section> close ============================-->

      <!-- <section> begin ============================-->
        <section class="pt-5 pt-md-9" id="destination">
          <!-- Decorative elements -->
          <div class="position-absolute z-index--1 end-0 d-none d-lg-block">
            <svg width="200" height="200" viewBox="0 0 200 200" class="floating-shape">
              <defs>
                <linearGradient id="shapeGradient3" x1="0%" y1="0%" x2="100%" y2="100%">
                  <stop offset="0%" stop-color="rgba(79, 70, 229, 0.08)" />
                  <stop offset="100%" stop-color="rgba(99, 102, 241, 0.08)" />
                </linearGradient>
              </defs>
              <path d="M190,10 C230,40 230,110 190,140 C150,170 110,190 70,160 C30,130 10,80 30,40 C50,0 150,-20 190,10" fill="url(#shapeGradient3)"></path>
            </svg>
          </div>
          
          <div class="container position-relative" style="z-index: 2;">
            <div class="mb-7 text-center">
              <div class="badge bg-light text-primary fw-medium mb-3 animate-element">OUR COACHES</div>
              <h2 class="display-5 fw-bold text-capitalize mb-4 animate-element delay-1">
                <span class="gradient-text">Discover Our Expert Coaches</span>
              </h2>
              <p class="lead mb-4 mx-auto animate-element delay-2" style="max-width: 650px;">
                Meet our highly qualified professionals ready to guide you on your journey
              </p>
              <div class="divider mx-auto animate-element delay-3"></div>
            </div>
            
            <div class="row expert-cards g-4">
              <!-- Expert Cards will be rendered here with PHP -->
              <!-- Sample card structure for styling demonstration -->
              
              <!-- Expert Card 1 -->
              <div class="col-lg-4 col-md-6 mb-5 animate-card" data-delay="0.3s">
                <div class="expert-card">
                  <div class="expert-card-inner">
                    <!-- Front of Card -->
                    <div class="expert-card-front">
                      <div class="expert-image-container">
                        <div class="expert-image-wrapper">
                          <img src="https://www.ikizen.rf.gd/storage/photos/uHDDIil0o8d1LVShv56RrcrKIyHsJUS5hF9V3B5H.png" alt="Expert Name" class="expert-image">
                        </div>
                        <div class="expert-badge">Top Rated</div>
                      </div>
                      <div class="expert-info">
                        <h3 class="expert-name">Amal Hihi</h3>
                        <div class="expert-rating">
                          <span class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                          </span>
                          <span class="rating-count">4.5/5</span>
                          <span class="review-count ms-2">(24 reviews)</span>
                        </div>
                        <div class="expert-tags">
                          <span class="tag">Career</span>
                          
                        </div>
                        <div class="expert-details">
                          <div class="detail">
                            <svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2">
                              <path d="M20 7h-4a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4H4c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2z"></path>
                              <line x1="12" y1="11" x2="12" y2="17"></line>
                              <line x1="9" y1="14" x2="15" y2="14"></line>
                            </svg>
                            <span>Experience: 7 years</span>
                          </div>
                          <div class="detail">
                            <svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2">
                              <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                              <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                            </svg>
                            <span>600 DHS/30min</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <!-- Back of Card -->
                    <div class="expert-card-back">
                      <div class="expert-bio">
                        <h4>About Amal</h4>
                        <p>A certified coach, I've been supporting executives and recent graduates for 10 years in defining their goals, managing stress and career transition. My approach is based on active listening and concrete action.</p>
                        <div class="expertise-areas">
                          <h5>Areas of Expertise:</h5>
                          <ul>
                            <li>Career Development</li>
                            <li>business development</li>
                            <li>Business Strategy</li>
                          </ul>
                        </div>
                      </div>
                      <a href="{{ route('test.start') }}" class="book-button">
                        Book Consultation
                        <svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="ms-2">
                          <line x1="5" y1="12" x2="19" y2="12"></line>
                          <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- Expert Card 2 -->
              <div class="col-lg-4 col-md-6 mb-5 animate-card" data-delay="0.4s">
                <div class="expert-card">
                  <div class="expert-card-inner">
                    <!-- Front of Card -->
                    <div class="expert-card-front">
                      <div class="expert-image-container">
                        <div class="expert-image-wrapper">
                          <img src="https://www.ikizen.rf.gd/storage/photos/khn88oqMQGzJAKPHG13qiMkBAI4T41uBunoLZzOv.jpg" alt="Expert Name" class="expert-image">
                        </div>
                        <div class="expert-badge">Top Rated</div>
                      </div>
                      <div class="expert-info">
                        <h3 class="expert-name">Youssef Bentahir</h3>
                        <div class="expert-rating">
                          <span class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                          </span>
                          <span class="rating-count">5.0/5</span>
                          <span class="review-count ms-2">(36 reviews)</span>
                        </div>
                        <div class="expert-tags">
                          <span class="tag">Academics</span>
                          <span class="tag">School</span>
                        </div>
                        <div class="expert-details">
                          <div class="detail">
                            <svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2">
                              <path d="M20 7h-4a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4H4c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2z"></path>
                              <line x1="12" y1="11" x2="12" y2="17"></line>
                              <line x1="9" y1="14" x2="15" y2="14"></line>
                            </svg>
                            <span>Experience: 11 years</span>
                          </div>
                          <div class="detail">
                            <svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2">
                              <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                              <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                            </svg>
                            <span>900 DHS/30min</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <!-- Back of Card -->
                    <div class="expert-card-back">
                      <div class="expert-bio">
                        <h4>About Youssef</h4>
                        <p>A former HR recruiter, I use my expertise to help young talent boost their employability. From creating hard-hitting CVs to preparing for interviews, I help you turn your ambitions into reality.</p>
                        <div class="expertise-areas">
                          <h5>Areas of Expertise:</h5>
                          <ul>
                            <li>Psychologie</li>
                            <li>Stress Management</li>
                            <li>School-Life Balance</li>
                          </ul>
                        </div>
                      </div>
                      <a href="{{ route('test.start') }}" class="book-button">
                        Book Consultation
                        <svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="ms-2">
                          <line x1="5" y1="12" x2="19" y2="12"></line>
                          <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- Expert Card 3 -->
              <div class="col-lg-4 col-md-6 mb-5 animate-card" data-delay="0.5s">
                <div class="expert-card">
                  <div class="expert-card-inner">
                    <!-- Front of Card -->
                    <div class="expert-card-front">
                      <div class="expert-image-container">
                        <div class="expert-image-wrapper">
                          <img src="https://www.ikizen.rf.gd/storage/photos/Hsw2ror8bTpUjan6UL0w5W13T6wMugEWtX1IcwCB.jpg" alt="Expert Name" class="expert-image">
                        </div>
                        <div class="expert-badge">Top Rated</div>
                      </div>
                      <div class="expert-info">
                        <h3 class="expert-name">Tijania Birouk</h3>
                        <div class="expert-rating">
                          <span class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                          </span>
                          <span class="rating-count">4.0/5</span>
                          <span class="review-count ms-2">(18 reviews)</span>
                        </div>
                        <div class="expert-tags">
                          <span class="tag">Academics</span>
                          <span class="tag">School</span>
                        </div>
                        <div class="expert-details">
                          <div class="detail">
                            <svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2">
                              <path d="M20 7h-4a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4H4c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2z"></path>
                              <line x1="12" y1="11" x2="12" y2="17"></line>
                              <line x1="9" y1="14" x2="15" y2="14"></line>
                            </svg>
                            <span>Experience: 7 years</span>
                          </div>
                          <div class="detail">
                            <svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2">
                              <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                              <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                            </svg>
                            <span>600 DHS/30min</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <!-- Back of Card -->
                    <div class="expert-card-back">
                      <div class="expert-bio">
                        <h4>About Tijania</h4>
                        <p>My aim: to help you unlock your full potential. Using a personalised approach, I support you in developing your self-confidence, discipline and long-term vision.</p>
                        <div class="expertise-areas">
                          <h5>Areas of Expertise:</h5>
                          <ul>
                            <li>Personal Development</li>
                          </ul>
                        </div>
                      </div>
                      <a href="{{ route('test.start') }}" class="book-button">
                        Book Consultation
                        <svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="ms-2">
                          <line x1="5" y1="12" x2="19" y2="12"></line>
                          <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- View All Button -->
            <div class="text-center mt-4 animate-element delay-4">
              <a href="{{ route('test.start') }}" class="btn btn-primary btn-lg shadow-lg">View All Coaches</a>
            </div>
          </div>
        
          <style>
            /* Base Styles */
            :root {
              --primary: #4F46E5;
              --primary-light: #6366F1;
              --primary-dark: #4338CA;
              --primary-hover: #4338CA;
              --primary-bg-light: rgba(79, 70, 229, 0.1);
              --card-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
              --card-shadow-hover: 0 20px 40px rgba(79, 70, 229, 0.15);
              --animation-timing: cubic-bezier(0.25, 0.46, 0.45, 0.94);
            }
            
            /* Section Styling */
            #destination {
              padding-top: 5rem;
              padding-bottom: 5rem;
              position: relative;
              overflow: hidden;
              background: linear-gradient(to bottom, #ffffff 0%, #f8f9fa 100%);
            }
            
            /* Badge Styling */
            .badge {
              padding: 0.6rem 1.25rem;
              border-radius: 50px;
              font-size: 0.9rem;
              letter-spacing: 0.5px;
            }
            
            .gradient-text {
              background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
              -webkit-background-clip: text;
              -webkit-text-fill-color: transparent;
              background-clip: text;
              color: transparent;
            }
            
            /* Divider */
            .divider {
              width: 80px;
              height: 4px;
              background: linear-gradient(to right, var(--primary), var(--primary-light));
              border-radius: 2px;
              margin-bottom: 2rem;
            }
            
            /* Animation Elements */
            .animate-element {
              opacity: 0;
              transform: translateY(20px);
              animation: fadeInUp 0.8s var(--animation-timing) forwards;
            }
            
            .delay-1 {
              animation-delay: 0.2s;
            }
            
            .delay-2 {
              animation-delay: 0.4s;
            }
            
            .delay-3 {
              animation-delay: 0.6s;
            }
            
            .delay-4 {
              animation-delay: 0.8s;
            }
            
            .animate-card {
              opacity: 0;
              transform: translateY(30px);
            }
            
            /* Expert Card Styling */
            .expert-card {
              perspective: 1500px;
              height: 550px;
            }
            
            .expert-card-inner {
              position: relative;
              width: 100%;
              height: 100%;
              transition: transform 0.8s;
              transform-style: preserve-3d;
              box-shadow: var(--card-shadow);
              border-radius: 16px;
            }
            
            .expert-card:hover .expert-card-inner {
              transform: rotateY(180deg);
            }
            
            .expert-card-front, .expert-card-back {
              position: absolute;
              width: 100%;
              height: 100%;
              -webkit-backface-visibility: hidden;
              backface-visibility: hidden;
              border-radius: 16px;
              overflow: hidden;
            }
            
            .expert-card-front {
              background-color: #fff;
            }
            
            .expert-card-back {
              background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
              color: white;
              transform: rotateY(180deg);
              padding: 2rem;
              display: flex;
              flex-direction: column;
              justify-content: space-between;
            }
            
            /* Expert Image Container */
            .expert-image-container {
              position: relative;
              height: 280px;
              overflow: hidden;
              border-top-left-radius: 16px;
              border-top-right-radius: 16px;
            }
            
            .expert-image-wrapper {
              width: 100%;
              height: 100%;
              overflow: hidden;
            }
            
            .expert-image {
              width: 100%;
              height: 100%;
              object-fit: cover;
              transition: transform 0.5s var(--animation-timing);
            }
            
            .expert-card:hover .expert-image {
              transform: scale(1.05);
            }
            
            .expert-badge {
              position: absolute;
              top: 1rem;
              right: 1rem;
              background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
              color: white;
              padding: 0.4rem 0.8rem;
              border-radius: 50px;
              font-size: 0.75rem;
              font-weight: 600;
              box-shadow: 0 4px 10px rgba(79, 70, 229, 0.3);
            }
            
            /* Expert Info */
            .expert-info {
              padding: 1.5rem;
            }
            
            .expert-name {
              font-size: 1.25rem;
              font-weight: 700;
              margin-bottom: 0.5rem;
              color: #212529;
            }
            
            .expert-rating {
              display: flex;
              align-items: center;
              margin-bottom: 1rem;
              font-size: 0.9rem;
            }
            
            .stars {
              color: #FFC107;
              margin-right: 0.5rem;
            }
            
            .expert-tags {
              display: flex;
              flex-wrap: wrap;
              margin-bottom: 1rem;
              gap: 0.5rem;
            }
            
            .tag {
              background-color: var(--primary-bg-light);
              color: var(--primary);
              padding: 0.25rem 0.75rem;
              border-radius: 50px;
              font-size: 0.75rem;
              font-weight: 600;
            }
            
            .expert-details {
              display: flex;
              flex-direction: column;
              gap: 0.5rem;
            }
            
            .detail {
              display: flex;
              align-items: center;
              font-size: 0.875rem;
              color: #212529;
            }
            
            /* Expert Bio */
            .expert-bio h4 {
              margin-bottom: 1rem;
              font-size: 1.5rem;
              font-weight: 600;
            }
            
            .expert-bio p {
              margin-bottom: 1.5rem;
              line-height: 1.6;
            }
            
            .expertise-areas h5 {
              font-size: 1.1rem;
              margin-bottom: 0.75rem;
              font-weight: 600;
            }
            
            .expertise-areas ul {
              list-style-type: none;
              padding-left: 0;
              margin-bottom: 0;
            }
            
            .expertise-areas li {
              padding: 0.3rem 0;
            }
            
            .expertise-areas li:before {
              content: "✓";
              margin-right: 0.5rem;
              font-weight: bold;
            }
            
            /* Book Button */
            .book-button {
              display: inline-flex;
              align-items: center;
              justify-content: center;
              background-color: rgba(255, 255, 255, 0.2);
              color: white;
              padding: 0.75rem 1.5rem;
              border-radius: 50px;
              font-weight: 600;
              text-decoration: none;
              transition: all 0.3s ease;
              align-self: flex-start;
              margin-top: 1rem;
              border: 2px solid rgba(255, 255, 255, 0.3);
            }
            
            .book-button:hover {
              background-color: white;
              color: var(--primary);
              transform: translateY(-3px);
            }
            
            /* Button styling */
            .btn-primary {
              background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
              border: none;
              padding: 0.8rem 2rem;
              border-radius: 50px;
              transition: all 0.3s ease;
            }
            
            .btn-primary:hover {
              background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%);
              transform: translateY(-3px);
            }
            
            /* Floating animations */
            .floating-shape {
              animation: float 10s ease-in-out infinite;
            }
            
            /* Animations */
            @keyframes fadeInUp {
              from {
                opacity: 0;
                transform: translateY(20px);
              }
              to {
                opacity: 1;
                transform: translateY(0);
              }
            }
            
            @keyframes float {
              0%, 100% {
                transform: translateY(0) rotate(0deg);
              }
              50% {
                transform: translateY(-20px) rotate(5deg);
              }
            }
            
            @keyframes float-alt {
              0%, 100% {
                transform: translateY(0) rotate(0deg);
              }
              50% {
                transform: translateY(15px) rotate(-5deg);
              }
            }
            
            /* Responsive Adjustments */
            @media (max-width: 991.98px) {
              .expert-card {
                height: 520px;
                margin-bottom: 2rem;
              }
              
              .expert-image-container {
                height: 250px;
              }
            }
            
            @media (max-width: 767.98px) {
              .expert-card {
                max-width: 400px;
                margin-left: auto;
                margin-right: auto;
              }
            }
          </style>
        
          <script>
            document.addEventListener('DOMContentLoaded', function() {
              // Animate cards on scroll with staggered delay
              const animateCards = document.querySelectorAll('.animate-card');
              
              // Intersection Observer for smooth animations
              const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                  if (entry.isIntersecting) {
                    const card = entry.target;
                    const delay = parseFloat(card.getAttribute('data-delay'));
                    
                    card.style.animation = `fadeInUp 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94) ${delay}s forwards`;
                    
                    // Unobserve after animation
                    observer.unobserve(card);
                  }
                });
              }, { threshold: 0.1 });
              
              // Observe each card
              animateCards.forEach(card => {
                observer.observe(card);
              });
              
              // Add Font Awesome if not already included
              if (!document.querySelector('link[href*="font-awesome"]')) {
                const link = document.createElement('link');
                link.rel = 'stylesheet';
                link.href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css';
                document.head.appendChild(link);
              }
            });
          </script>
        </section>
      <!-- <section> close ============================-->

      <!-- <section> begin ============================-->
        <section id="booking" class="pt-5 pt-md-9" style="position: relative; overflow: hidden; background: linear-gradient(to bottom, #f8f9fa 0%, #ffffff 100%);">
          <!-- Decorative elements -->
          <div class="position-absolute z-index--1 start-0 top-0 d-none d-lg-block">
            <svg width="200" height="200" viewBox="0 0 200 200" class="floating-shape">
              <defs>
                <linearGradient id="bookingShapeGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                  <stop offset="0%" stop-color="rgba(79, 70, 229, 0.08)" />
                  <stop offset="100%" stop-color="rgba(99, 102, 241, 0.08)" />
                </linearGradient>
              </defs>
              <path d="M10,50 C-20,100 20,150 60,170 C100,190 160,180 180,130 C200,80 180,30 140,10 C100,-10 40,0 10,50" fill="url(#bookingShapeGradient)"></path>
            </svg>
          </div>
          
          <div class="position-absolute z-index--1 end-0 bottom-0 d-none d-lg-block">
            <svg width="150" height="150" viewBox="0 0 150 150" class="floating-shape-alt">
              <defs>
                <linearGradient id="bookingShapeGradient2" x1="0%" y1="0%" x2="100%" y2="100%">
                  <stop offset="0%" stop-color="rgba(79, 70, 229, 0.05)" />
                  <stop offset="100%" stop-color="rgba(99, 102, 241, 0.05)" />
                </linearGradient>
              </defs>
              <rect x="25" y="25" width="100" height="100" rx="20" ry="20" fill="url(#bookingShapeGradient2)"></rect>
            </svg>
          </div>
          
          <div class="container position-relative" style="z-index: 2;">
            <div class="mb-5 text-center animate-element">
              <div class="badge bg-light text-primary fw-medium mb-3">BOOK NOW</div>
              <h2 class="display-5 fw-bold text-capitalize mb-3">
                <span class="gradient-text">Easy and Fast Booking</span>
              </h2>
              <p class="lead text-muted mb-4 mx-auto" style="max-width: 650px;">
                Book your consultation in three simple steps and get expert advice when you need it.
              </p>
              <div class="divider mx-auto"></div>
            </div>
            
            <div class="row align-items-center">
              <div class="col-lg-6">
                <!-- Step 1 -->
                <div class="d-flex align-items-start mb-5 step-card animate-card" data-delay="0.3s">
                  <div class="step-number-container me-sm-4 me-3">
                    <div class="step-number bg-primary text-white">1</div>
                  </div>
                  <div class="flex-1">
                    <h4 class="fw-bold mb-3">Select the Expert</h4>
                    <p class="text-muted mb-0">Choose the coach you want, or the expert we recommend based on your specific needs and goals.</p>
                  </div>
                </div>
                
                <!-- Step 2 -->
                <div class="d-flex align-items-start mb-5 step-card animate-card" data-delay="0.5s">
                  <div class="step-number-container me-sm-4 me-3">
                    <div class="step-number bg-danger text-white">2</div>
                  </div>
                  <div class="flex-1">
                    <h4 class="fw-bold mb-3">Schedule Your Consultation</h4>
                    <p class="text-muted mb-0">Choose the date and time that suits your schedule, then complete your secure payment to confirm your booking.</p>
                  </div>
                </div>
                
                <!-- Step 3 -->
                <div class="d-flex align-items-start mb-5 step-card animate-card" data-delay="0.7s">
                  <div class="step-number-container me-sm-4 me-3">
                    <div class="step-number bg-info text-white">3</div>
                  </div>
                  <div class="flex-1">
                    <h4 class="fw-bold mb-3">Make Your Video Call</h4>
                    <p class="text-muted mb-0">When your consultation time arrives, connect with your expert through our seamless video call platform for personalized guidance.</p>
                  </div>
                </div>
                
                <!-- CTA Button -->
                <div class="mt-5 animate-element delay-4">
                  <a href="#" class="btn btn-primary btn-lg shadow-lg">Book Your Expert Now</a>
                </div>
              </div>
              
              <div class="col-lg-6 d-flex justify-content-center align-items-center">
                <div class="card position-relative shadow booking-card animate-card" data-delay="0.9s">
                  <div class="card-body p-4">
                    <img class="mb-4 mt-2 rounded-2 w-100 image-pulse" src="home/assets/img/right-image.svg" alt="booking" />
                    <div class="booking-status">
                      <div class="status-indicator online"></div>
                      <span>Experts Available Now</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
          <style>
            /* Base Styles */
            :root {
              --primary: #4F46E5;
              --primary-light: #6366F1;
              --primary-dark: #4338CA;
              --primary-hover: #4338CA;
              --primary-bg-light: rgba(79, 70, 229, 0.1);
              --danger: #EF4444;
              --info: #3B82F6;
              --card-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
              --card-shadow-hover: 0 20px 40px rgba(79, 70, 229, 0.15);
              --animation-timing: cubic-bezier(0.25, 0.46, 0.45, 0.94);
            }
            
            /* Section Styling */
            #booking {
              padding-top: 5rem;
              padding-bottom: 5rem;
            }
            
            .gradient-text {
              background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
              -webkit-background-clip: text;
              -webkit-text-fill-color: transparent;
              background-clip: text;
              color: transparent;
            }
            
            /* Badge Styling */
            .badge {
              padding: 0.6rem 1.25rem;
              border-radius: 50px;
              font-size: 0.9rem;
              letter-spacing: 0.5px;
            }
            
            /* Divider */
            .divider {
              width: 80px;
              height: 4px;
              background: linear-gradient(to right, var(--primary), var(--primary-light));
              border-radius: 2px;
              margin-bottom: 2rem;
            }
            
            /* Step Number Styling */
            .step-number-container {
              flex-shrink: 0;
            }
            
            .step-number {
              width: 60px;
              height: 60px;
              display: flex;
              align-items: center;
              justify-content: center;
              border-radius: 16px;
              font-size: 1.5rem;
              font-weight: bold;
              color: white;
              box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
              transition: all 0.4s var(--animation-timing);
            }
            
            /* Booking Card Styling */
            .booking-card {
              max-width: 400px;
              border-radius: 20px;
              overflow: hidden;
              transition: all 0.5s var(--animation-timing);
            }
            
            .booking-card:hover {
              transform: translateY(-10px);
              box-shadow: var(--card-shadow-hover);
            }
            
            .booking-status {
              display: flex;
              align-items: center;
              gap: 10px;
              padding: 10px 15px;
              background-color: var(--primary-bg-light);
              border-radius: 10px;
              margin-top: 10px;
            }
            
            .status-indicator {
              width: 12px;
              height: 12px;
              border-radius: 50%;
            }
            
            .status-indicator.online {
              background-color: #10B981;
              box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.2);
              animation: pulse 2s infinite;
            }
            
            /* Step Card Styling */
            .step-card {
              transition: all 0.5s var(--animation-timing);
              padding: 1.5rem;
              border-radius: 16px;
            }
            
            .step-card:hover {
              background-color: var(--primary-bg-light);
              transform: translateX(10px);
            }
            
            .step-card:hover .step-number {
              transform: rotate(10deg) scale(1.1);
            }
            
            /* Animation Elements */
            .animate-element {
              opacity: 0;
              transform: translateY(20px);
              animation: fadeInUp 0.8s var(--animation-timing) forwards;
            }
            
            .animate-card {
              opacity: 0;
              transform: translateY(30px);
            }
            
            .delay-1 {
              animation-delay: 0.2s;
            }
            
            .delay-2 {
              animation-delay: 0.4s;
            }
            
            .delay-3 {
              animation-delay: 0.6s;
            }
            
            .delay-4 {
              animation-delay: 0.8s;
            }
            
            /* Button styling */
            .btn-primary {
              background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
              border: none;
              padding: 0.8rem 2rem;
              border-radius: 50px;
              transition: all 0.3s ease;
            }
            
            .btn-primary:hover {
              background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%);
              transform: translateY(-3px);
            }
            
            /* Image animation */
            .image-pulse {
              animation: subtle-pulse 6s infinite var(--animation-timing);
            }
            
            /* Floating animations */
            .floating-shape {
              animation: float 10s ease-in-out infinite;
            }
            
            .floating-shape-alt {
              animation: float-alt 8s ease-in-out infinite;
            }
            
            /* Animations */
            @keyframes fadeInUp {
              from {
                opacity: 0;
                transform: translateY(20px);
              }
              to {
                opacity: 1;
                transform: translateY(0);
              }
            }
            
            @keyframes float {
              0%, 100% {
                transform: translateY(0) rotate(0deg);
              }
              50% {
                transform: translateY(-20px) rotate(5deg);
              }
            }
            
            @keyframes float-alt {
              0%, 100% {
                transform: translateY(0) rotate(0deg);
              }
              50% {
                transform: translateY(15px) rotate(-5deg);
              }
            }
            
            @keyframes pulse {
              0% {
                box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.7);
              }
              70% {
                box-shadow: 0 0 0 10px rgba(16, 185, 129, 0);
              }
              100% {
                box-shadow: 0 0 0 0 rgba(16, 185, 129, 0);
              }
            }
            
            @keyframes subtle-pulse {
              0%, 100% {
                transform: scale(1);
              }
              50% {
                transform: scale(1.02);
              }
            }
            
            /* Responsive adjustments */
            @media (max-width: 991.98px) {
              .booking-card {
                margin: 2rem auto 0;
                max-width: 90%;
              }
              
              .step-card {
                padding: 1rem;
              }
            }
          </style>
        
          <script>
            document.addEventListener('DOMContentLoaded', function() {
              // Animate cards on scroll with staggered delay
              const animateCards = document.querySelectorAll('.animate-card');
              
              // Intersection Observer for smooth animations
              const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                  if (entry.isIntersecting) {
                    const card = entry.target;
                    const delay = parseFloat(card.getAttribute('data-delay'));
                    
                    card.style.animation = `fadeInUp 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94) ${delay}s forwards`;
                    
                    // Unobserve after animation
                    observer.unobserve(card);
                  }
                });
              }, { threshold: 0.1 });
              
              // Observe each card
              animateCards.forEach(card => {
                observer.observe(card);
              });
              
              // Add hover interactions for step cards
              const stepCards = document.querySelectorAll('.step-card');
              
              stepCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                  this.style.background = 'var(--primary-bg-light)';
                  this.style.transform = 'translateX(10px)';
                  this.querySelector('.step-number').style.transform = 'rotate(10deg) scale(1.1)';
                });
                
                card.addEventListener('mouseleave', function() {
                  this.style.background = '';
                  this.style.transform = '';
                  this.querySelector('.step-number').style.transform = '';
                });
              });
            });
          </script>
        </section>
      <!-- <section> close ============================-->

      <!-- <section> begin ============================-->
        <section id="testimonial" class="pt-5 pt-md-9" style="position: relative; overflow: hidden; background: linear-gradient(to bottom, #ffffff 0%, #f8f9fa 100%);">
          <!-- Decorative elements -->
          <div class="position-absolute z-index--1 end-0 top-20 d-none d-lg-block">
            <svg width="180" height="180" viewBox="0 0 180 180" class="floating-shape">
              <defs>
                <linearGradient id="testimonialShapeGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                  <stop offset="0%" stop-color="rgba(79, 70, 229, 0.08)" />
                  <stop offset="100%" stop-color="rgba(99, 102, 241, 0.08)" />
                </linearGradient>
              </defs>
              <circle cx="90" cy="90" r="80" fill="url(#testimonialShapeGradient)"></circle>
            </svg>
          </div>
          
          <div class="position-absolute z-index--1 start-0 bottom-0 d-none d-lg-block">
            <svg width="160" height="160" viewBox="0 0 160 160" class="floating-shape-alt">
              <defs>
                <linearGradient id="testimonialShapeGradient2" x1="0%" y1="0%" x2="100%" y2="100%">
                  <stop offset="0%" stop-color="rgba(79, 70, 229, 0.05)" />
                  <stop offset="100%" stop-color="rgba(99, 102, 241, 0.05)" />
                </linearGradient>
              </defs>
              <path d="M30,20 C10,40 0,80 20,120 C40,160 100,160 140,130 C180,100 160,40 120,20 C80,0 50,0 30,20" fill="url(#testimonialShapeGradient2)"></path>
            </svg>
          </div>
        
          <div class="container position-relative" style="z-index: 2;">
            <div class="row align-items-center">
              <div class="col-lg-5">
                <div class="mb-5 text-start animate-element">
                  <div class="badge bg-light text-primary fw-medium mb-3">TESTIMONIALS</div>
                  <h2 class="display-5 fw-bold text-capitalize mb-3">
                    <span class="gradient-text">What People Say</span>
                  </h2>
                  <p class="lead text-muted mb-4">Discover how our consultations have transformed the lives and careers of our clients.</p>
                  <div class="divider me-auto"></div>
                </div>
              </div>
              
              <div class="col-lg-1"></div>
              
              <div class="col-lg-6">
                <div class="testimonial-carousel-container animate-card" data-delay="0.4s">
                  <div class="carousel slide carousel-fade position-static" id="testimonialIndicator" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <!-- Testimonial 1 -->
                      <div class="carousel-item position-relative active">
                        <div class="testimonial-card card shadow">
                          <div class="author-avatar">
                            <img class="rounded-circle fit-cover" src="home/assets/img/testimonial/author.png" height="80" width="80" alt="Adam Mounir" />
                          </div>
                          <div class="card-body p-4 p-xl-5">
                            <div class="quote-icon mb-3">
                              <svg viewBox="0 0 24 24" width="32" height="32" stroke="currentColor" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round" class="quote-svg">
                                <path d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V20c0 1 0 1 1 1z"></path>
                                <path d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2h.75c0 2.25.25 4-2.75 4v3c0 1 0 1 1 1z"></path>
                              </svg>
                            </div>
                            <p class="fw-medium mb-4">"Before graduating, I was lost about my career, but thanks to Ikizen and the advice of the experts, I was able to find my path by choosing to study computer science and I love it."</p>
                            <div class="testimonial-author">
                              <h5 class="fw-bold text-primary mb-1">Adam Mounir</h5>
                              <p class="text-muted mb-0">Baccalaureate student</p>
                            </div>
                          </div>
                        </div>
                        <div class="card shadow-sm testimonial-card-shadow"> </div>
                      </div>
                      
                      <!-- Testimonial 2 -->
                      <div class="carousel-item position-relative">
                        <div class="testimonial-card card shadow">
                          <div class="author-avatar">
                            <img class="rounded-circle fit-cover" src="home/assets/img/testimonial/author3.png" height="80" width="80" alt="Sara Ktoun" />
                          </div>
                          <div class="card-body p-4 p-xl-5">
                            <div class="quote-icon mb-3">
                              <svg viewBox="0 0 24 24" width="32" height="32" stroke="currentColor" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round" class="quote-svg">
                                <path d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V20c0 1 0 1 1 1z"></path>
                                <path d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2h.75c0 2.25.25 4-2.75 4v3c0 1 0 1 1 1z"></path>
                              </svg>
                            </div>
                            <p class="fw-medium mb-4">"Before, I worked as an employee in a private company as a community manager, but office hours were not for me. So I decided to convert."</p>
                            <div class="testimonial-author">
                              <h5 class="fw-bold text-primary mb-1">Sara Ktoun</h5>
                              <p class="text-muted mb-0">Photographer</p>
                            </div>
                          </div>
                        </div>
                        <div class="card shadow-sm testimonial-card-shadow"> </div>
                      </div>
                      
                      <!-- Testimonial 3 -->
                      <div class="carousel-item position-relative">
                        <div class="testimonial-card card shadow">
                          <div class="author-avatar">
                            <img class="rounded-circle fit-cover" src="home/assets/img/testimonial/author2.png" height="80" width="80" alt="Saad Rahmouni" />
                          </div>
                          <div class="card-body p-4 p-xl-5">
                            <div class="quote-icon mb-3">
                              <svg viewBox="0 0 24 24" width="32" height="32" stroke="currentColor" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round" class="quote-svg">
                                <path d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V20c0 1 0 1 1 1z"></path>
                                <path d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2h.75c0 2.25.25 4-2.75 4v3c0 1 0 1 1 1z"></path>
                              </svg>
                            </div>
                            <p class="fw-medium mb-4">"As CEO, I have a whole team to manage, so to be on the same wavelength as my team, I opted for a personal development consultation and it helped me."</p>
                            <div class="testimonial-author">
                              <h5 class="fw-bold text-primary mb-1">Saad Rahmouni</h5>
                              <p class="text-muted mb-0">CEO of X Company</p>
                            </div>
                          </div>
                        </div>
                        <div class="card shadow-sm testimonial-card-shadow"> </div>
                      </div>
                    </div>
                    
                    <div class="carousel-indicators custom-indicators">
                      <button class="active" type="button" data-bs-target="#testimonialIndicator" data-bs-slide-to="0" aria-current="true" aria-label="Testimonial 1"></button>
                      <button type="button" data-bs-target="#testimonialIndicator" data-bs-slide-to="1" aria-label="Testimonial 2"></button>
                      <button type="button" data-bs-target="#testimonialIndicator" data-bs-slide-to="2" aria-label="Testimonial 3"></button>
                    </div>
                    
                    <div class="carousel-controls">
                      <button class="carousel-control-prev" type="button" data-bs-target="#testimonialIndicator" data-bs-slide="prev">
                        <span class="control-icon prev-icon">
                          <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="15 18 9 12 15 6"></polyline>
                          </svg>
                        </span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#testimonialIndicator" data-bs-slide="next">
                        <span class="control-icon next-icon">
                          <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="9 18 15 12 9 6"></polyline>
                          </svg>
                        </span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
          <style>
            /* Base Styles */
            :root {
              --primary: #4F46E5;
              --primary-light: #6366F1;
              --primary-dark: #4338CA;
              --primary-hover: #4338CA;
              --primary-bg-light: rgba(79, 70, 229, 0.1);
              --card-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
              --card-shadow-hover: 0 20px 40px rgba(79, 70, 229, 0.15);
              --animation-timing: cubic-bezier(0.25, 0.46, 0.45, 0.94);
            }
            
            /* Section Styling */
            #testimonial {
              padding-top: 5rem;
              padding-bottom: 5rem;
            }
            
            /* Badge Styling */
            .badge {
              padding: 0.6rem 1.25rem;
              border-radius: 50px;
              font-size: 0.9rem;
              letter-spacing: 0.5px;
            }
            
            .gradient-text {
              background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
              -webkit-background-clip: text;
              -webkit-text-fill-color: transparent;
              background-clip: text;
              color: transparent;
            }
            
            /* Divider */
            .divider {
              width: 80px;
              height: 4px;
              background: linear-gradient(to right, var(--primary), var(--primary-light));
              border-radius: 2px;
              margin-bottom: 2rem;
            }
            
            /* Animation Elements */
            .animate-element {
              opacity: 0;
              transform: translateY(20px);
              animation: fadeInUp 0.8s var(--animation-timing) forwards;
            }
            
            .delay-1 {
              animation-delay: 0.2s;
            }
            
            .delay-2 {
              animation-delay: 0.4s;
            }
            
            .delay-3 {
              animation-delay: 0.6s;
            }
            
            .delay-4 {
              animation-delay: 0.8s;
            }
            
            .animate-card {
              opacity: 0;
              transform: translateY(30px);
            }
            
            /* Testimonial Styling */
            .testimonial-carousel-container {
              position: relative;
              margin-top: 2rem;
            }
            
            .testimonial-card {
              border-radius: 16px;
              border: none;
              position: relative;
              margin-bottom: 2rem;
              transition: all 0.5s var(--animation-timing);
            }
            
            .testimonial-card-shadow {
              position: absolute;
              top: 12px;
              left: 12px;
              width: 100%;
              height: 100%;
              border-radius: 16px;
              z-index: -1;
              background-color: rgba(79, 70, 229, 0.05);
            }
            
            .carousel-item.active .testimonial-card {
              animation: cardEnter 0.8s var(--animation-timing) forwards;
            }
            
            .author-avatar {
              position: absolute;
              top: -40px;
              left: 30px;
              border: 4px solid white;
              border-radius: 50%;
              box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
              background-color: white;
              transition: all 0.3s ease;
            }
            
            .carousel-item.active .author-avatar {
              animation: avatarPulse 0.5s ease-out 0.3s forwards;
            }
            
            .quote-icon {
              color: var(--primary-light);
              opacity: 0.5;
            }
            
            .testimonial-author {
              margin-top: 1.5rem;
              padding-top: 1rem;
              border-top: 1px solid rgba(0, 0, 0, 0.05);
            }
            
            /* Custom Carousel Controls & Indicators */
            .carousel-controls {
              display: flex;
              position: absolute;
              right: 20px;
              bottom: 20px;
              gap: 10px;
            }
            
            .carousel-control-prev,
            .carousel-control-next {
              position: relative;
              width: 40px;
              height: 40px;
              border-radius: 50%;
              background-color: white;
              opacity: 0.9;
              display: flex;
              align-items: center;
              justify-content: center;
              box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
              transition: all 0.3s ease;
            }
            
            .carousel-control-prev:hover,
            .carousel-control-next:hover {
              background-color: var(--primary);
              opacity: 1;
            }
            
            .carousel-control-prev:hover .control-icon,
            .carousel-control-next:hover .control-icon {
              stroke: white;
            }
            
            .control-icon {
              stroke: var(--primary);
              transition: all 0.3s ease;
            }
            
            .custom-indicators {
              position: absolute;
              left: 30px;
              bottom: 20px;
              margin: 0;
              display: flex;
              gap: 5px;
            }
            
            .carousel-indicators button {
              width: 10px;
              height: 10px;
              border-radius: 50%;
              background-color: #CBD5E1;
              opacity: 0.5;
              transition: all 0.3s ease;
            }
            
            .carousel-indicators button.active {
              background-color: var(--primary);
              opacity: 1;
              width: 30px;
              border-radius: 10px;
            }
            
            /* Floating animations */
            .floating-shape {
              animation: float 10s ease-in-out infinite;
            }
            
            .floating-shape-alt {
              animation: float-alt 8s ease-in-out infinite;
            }
            
            /* Animations */
            @keyframes fadeInUp {
              from {
                opacity: 0;
                transform: translateY(20px);
              }
              to {
                opacity: 1;
                transform: translateY(0);
              }
            }
            
            @keyframes float {
              0%, 100% {
                transform: translateY(0) rotate(0deg);
              }
              50% {
                transform: translateY(-20px) rotate(5deg);
              }
            }
            
            @keyframes float-alt {
              0%, 100% {
                transform: translateY(0) rotate(0deg);
              }
              50% {
                transform: translateY(15px) rotate(-5deg);
              }
            }
            
            @keyframes cardEnter {
              0% {
                opacity: 0;
                transform: translateY(30px);
              }
              100% {
                opacity: 1;
                transform: translateY(0);
              }
            }
            
            @keyframes avatarPulse {
              0% {
                transform: scale(0.95);
              }
              50% {
                transform: scale(1.05);
              }
              100% {
                transform: scale(1);
              }
            }
            
            /* Responsive adjustments */
            @media (max-width: 991.98px) {
              #testimonial {
                padding-top: 4rem;
                padding-bottom: 4rem;
              }
              
              .testimonial-carousel-container {
                margin-top: 3rem;
              }
              
              .carousel-controls {
                right: 50%;
                transform: translateX(50%);
                bottom: -20px;
              }
              
              .custom-indicators {
                left: 50%;
                transform: translateX(-50%);
                bottom: -50px;
              }
            }
          </style>
        
          <script>
            document.addEventListener('DOMContentLoaded', function() {
              // Animate cards on scroll with staggered delay
              const animateCards = document.querySelectorAll('.animate-card');
              
              // Intersection Observer for smooth animations
              const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                  if (entry.isIntersecting) {
                    const card = entry.target;
                    const delay = parseFloat(card.getAttribute('data-delay')) || 0;
                    
                    card.style.animation = `fadeInUp 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94) ${delay}s forwards`;
                    
                    // Unobserve after animation
                    observer.unobserve(card);
                  }
                });
              }, { threshold: 0.1 });
              
              // Observe each card
              animateCards.forEach(card => {
                observer.observe(card);
              });
              
              // Enhanced carousel functionality
              const carousel = document.getElementById('testimonialIndicator');
              
              carousel.addEventListener('slide.bs.carousel', function (e) {
                // Remove animation classes from previous item
                const prevItem = e.from;
                const items = document.querySelectorAll('.carousel-item');
                
                items[prevItem].querySelector('.testimonial-card').style.animation = 'none';
                items[prevItem].querySelector('.author-avatar').style.animation = 'none';
                
                // Add animation to new item after a short delay
                setTimeout(() => {
                  items[e.to].querySelector('.testimonial-card').style.animation = 'cardEnter 0.8s var(--animation-timing) forwards';
                  items[e.to].querySelector('.author-avatar').style.animation = 'avatarPulse 0.5s ease-out 0.3s forwards';
                }, 50);
              });
            });
          </script>
        </section>
      <!-- <section> close ============================-->

      <!-- <section> begin ============================-->
        <section id="footer" class="pb-0 pb-lg-4" style="position: relative; overflow: hidden; background: linear-gradient(to bottom, #f8f9fa 0%, #e9ecef 100%);">
          <!-- Decorative elements -->
          <div class="position-absolute z-index--1 end-0 top-20 d-none d-lg-block">
            <svg width="180" height="180" viewBox="0 0 180 180" class="floating-shape">
              <defs>
                <linearGradient id="footerShapeGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                  <stop offset="0%" stop-color="rgba(79, 70, 229, 0.08)" />
                  <stop offset="100%" stop-color="rgba(99, 102, 241, 0.08)" />
                </linearGradient>
              </defs>
              <circle cx="90" cy="90" r="80" fill="url(#footerShapeGradient)"></circle>
            </svg>
          </div>
          
          <div class="position-absolute z-index--1 start-0 bottom-0 d-none d-lg-block">
            <svg width="160" height="160" viewBox="0 0 160 160" class="floating-shape-alt">
              <defs>
                <linearGradient id="footerShapeGradient2" x1="0%" y1="0%" x2="100%" y2="100%">
                  <stop offset="0%" stop-color="rgba(79, 70, 229, 0.05)" />
                  <stop offset="100%" stop-color="rgba(99, 102, 241, 0.05)" />
                </linearGradient>
              </defs>
              <path d="M30,20 C10,40 0,80 20,120 C40,160 100,160 140,130 C180,100 160,40 120,20 C80,0 50,0 30,20" fill="url(#footerShapeGradient2)"></path>
            </svg>
          </div>
        
          <div class="footer-bg-wrapper">
            <div class="footer-bg-animation">
              <div class="footer-bg-shape shape1"></div>
              <div class="footer-bg-shape shape2"></div>
              <div class="footer-bg-shape shape3"></div>
              <div class="footer-bg-shape shape4"></div>
            </div>
          </div>
        
          <div class="container position-relative" style="z-index: 2;">
            <div class="row">
              <div class="col-lg-5 col-md-7 col-12 mb-4 mb-md-7 mb-lg-0 order-0 animate-element"> 
                <img class="mb-4 pulse-animation" src="home/assets/img/1-removebg-preview.png" width="150" alt="ikizen" />
                <p class="fs--1 text-secondary mb-0 fw-medium fade-in-animation">Book your consultation in minutes, get the SOLUTION for your problems.</p>
              </div>
              
              <div class="col-lg-2 col-md-4 mb-4 mb-lg-0 order-lg-1 order-md-2 animate-element delay-1">
                <h4 class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4 gradient-text">Ikizen</h4>
                <ul class="list-unstyled mb-0">
                  <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none footer-link" href="{{route('accueil')}}">About</a></li>
                  <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none footer-link" href="#destination">Experts</a></li>
                </ul>
              </div>
              
              <div class="col-lg-2 col-md-4 mb-4 mb-lg-0 order-lg-2 order-md-3 animate-element delay-2">
                <h4 class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4 gradient-text">Contact</h4>
                <ul class="list-unstyled mb-0">
                  <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none footer-link" href="{{route('contact')}}">Help</a></li>
                  <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none footer-link" href="{{route('contact')}}">Contact</a></li>
                </ul>
              </div>
              
              <div class="col-lg-2 col-md-4 mb-4 mb-lg-0 order-lg-3 order-md-4 animate-element delay-3">
                <h4 class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4 gradient-text">More</h4>
                <div class="icon-group mb-4"> 
                  <a class="text-decoration-none icon-item shadow-social pop-animation" id="facebook" href="https://fr.linkedin.com/" target="_blank"><i class="fab fa-linkedin"> </i></a>
                  <a class="text-decoration-none icon-item shadow-social pop-animation" id="instagram" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"> </i></a>
                </div>
              </div>
            </div>
            
            <div class="row mt-4">
              <div class="col-12 text-center">
                <p class="text-muted mb-0 fs--1 fade-in-animation">&copy; All rights reserved Ikizen.</p>
              </div>
            </div>
          </div>
        
          <style>
            /* Base Styles */
            :root {
              --primary: #4F46E5;
              --primary-light: #6366F1;
              --primary-dark: #4338CA;
              --primary-hover: #4338CA;
              --primary-bg-light: rgba(79, 70, 229, 0.1);
              --animation-timing: cubic-bezier(0.25, 0.46, 0.45, 0.94);
            }
            
            /* Footer Background */
            #footer {
              position: relative;
              padding-top: 3rem;
              background: linear-gradient(to bottom, #ffffff 0%, #f8f9fa 100%);
            }
            
            /* Gradient Text */
            .gradient-text {
              background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
              -webkit-background-clip: text;
              -webkit-text-fill-color: transparent;
              background-clip: text;
              color: transparent;
            }
            
            /* Animation Elements */
            .animate-element {
              opacity: 0;
              transform: translateY(20px);
              animation: fadeInUp 0.8s var(--animation-timing) forwards;
            }
            
            .delay-1 {
              animation-delay: 0.2s;
            }
            
            .delay-2 {
              animation-delay: 0.4s;
            }
            
            .delay-3 {
              animation-delay: 0.6s;
            }
            
            /* Footer Link Animation */
            .footer-link {
              position: relative;
              transition: all 0.3s ease;
              padding-left: 0;
              display: inline-block;
            }
            
            .footer-link:before {
              content: '';
              position: absolute;
              left: 0;
              bottom: -2px;
              width: 0;
              height: 2px;
              background: linear-gradient(to right, var(--primary), var(--primary-light));
              transition: width 0.3s ease;
            }
            
            .footer-link:hover {
              padding-left: 5px;
              color: var(--primary) !important;
            }
            
            .footer-link:hover:before {
              width: 100%;
            }
            
            /* Icon Group Animation */
            .icon-group {
              display: flex;
              gap: 15px;
            }
            
            .icon-item {
              width: 40px;
              height: 40px;
              display: flex;
              align-items: center;
              justify-content: center;
              border-radius: 50%;
              background-color: white;
              color: var(--primary);
              box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
              transition: all 0.3s ease;
              position: relative;
              overflow: hidden;
            }
            
            .icon-item:after {
              content: '';
              position: absolute;
              top: 0;
              left: 0;
              width: 100%;
              height: 100%;
              background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
              opacity: 0;
              transition: opacity 0.3s ease;
              z-index: -1;
            }
            
            .icon-item:hover {
              transform: translateY(-5px);
              color: white;
            }
            
            .icon-item:hover:after {
              opacity: 1;
            }
            
            /* Custom Animations */
            .pulse-animation {
              animation: pulse 2s ease-in-out infinite;
            }
            
            .pop-animation {
              animation: pop 0.4s ease-out forwards;
            }
            
            .fade-in-animation {
              animation: fadeIn 1s ease-out forwards;
            }
            
            /* Footer Background Animation */
            .footer-bg-wrapper {
              position: absolute;
              top: 0;
              left: 0;
              width: 100%;
              height: 100%;
              overflow: hidden;
              z-index: 0;
            }
            
            .footer-bg-animation {
              position: absolute;
              top: 0;
              left: 0;
              width: 100%;
              height: 100%;
            }
            
            .footer-bg-shape {
              position: absolute;
              border-radius: 50%;
              background: linear-gradient(135deg, rgba(79, 70, 229, 0.05) 0%, rgba(99, 102, 241, 0.05) 100%);
            }
            
            .shape1 {
              width: 300px;
              height: 300px;
              top: -150px;
              right: -100px;
              animation: float 15s ease-in-out infinite;
            }
            
            .shape2 {
              width: 200px;
              height: 200px;
              bottom: -100px;
              left: 10%;
              animation: float-alt 12s ease-in-out infinite;
            }
            
            .shape3 {
              width: 100px;
              height: 100px;
              top: 30%;
              left: 20%;
              animation: float 10s ease-in-out infinite;
            }
            
            .shape4 {
              width: 150px;
              height: 150px;
              bottom: 20%;
              right: 10%;
              animation: float-alt 8s ease-in-out infinite;
            }
            
            /* Floating animations */
            .floating-shape {
              animation: float 10s ease-in-out infinite;
            }
            
            .floating-shape-alt {
              animation: float-alt 8s ease-in-out infinite;
            }
            
            /* Animations */
            @keyframes fadeInUp {
              from {
                opacity: 0;
                transform: translateY(20px);
              }
              to {
                opacity: 1;
                transform: translateY(0);
              }
            }
            
            @keyframes fadeIn {
              from {
                opacity: 0;
              }
              to {
                opacity: 1;
              }
            }
            
            @keyframes float {
              0%, 100% {
                transform: translateY(0) rotate(0deg);
              }
              50% {
                transform: translateY(-20px) rotate(5deg);
              }
            }
            
            @keyframes float-alt {
              0%, 100% {
                transform: translateY(0) rotate(0deg);
              }
              50% {
                transform: translateY(15px) rotate(-5deg);
              }
            }
            
            @keyframes pulse {
              0%, 100% {
                transform: scale(1);
              }
              50% {
                transform: scale(1.05);
              }
            }
            
            @keyframes pop {
              0% {
                transform: scale(0);
                opacity: 0;
              }
              80% {
                transform: scale(1.1);
                opacity: 1;
              }
              100% {
                transform: scale(1);
                opacity: 1;
              }
            }
            
            /* Mobile-Friendly Responsive Styles */
            @media (max-width: 991.98px) {
              .icon-item {
                margin-right: 10px;
              }
            }
            
            /* Mobile specific improvements */
            @media (max-width: 767.98px) {
              #footer {
                padding-top: 2rem;
                padding-bottom: 2rem;
              }
              
              .container {
                padding-left: 1rem;
                padding-right: 1rem;
              }
              
              /* Logo adjustments for mobile */
              .pulse-animation {
                width: 120px !important;
                max-width: 120px;
              }
              
              /* Text adjustments */
              .fs--1 {
                font-size: 0.9rem !important;
                line-height: 1.5;
              }
              
              /* Footer headings */
              .gradient-text {
                font-size: 1.2rem !important;
                margin-bottom: 1rem !important;
              }
              
              /* Footer links */
              .footer-link {
                font-size: 0.95rem !important;
                padding: 0.25rem 0;
                display: block;
              }
              
              /* Social icons for mobile */
              .icon-group {
                justify-content: flex-start;
                margin-bottom: 2rem !important;
              }
              
              .icon-item {
                width: 45px;
                height: 45px;
                margin-right: 15px;
              }
              
              /* Column spacing adjustments */
              .col-12, .col-md-4 {
                margin-bottom: 2rem;
              }
              
              .col-12:last-child {
                margin-bottom: 0;
              }
              
              /* Copyright text */
              .text-center p {
                margin-top: 1.5rem;
                padding-top: 1.5rem;
                border-top: 1px solid rgba(0, 0, 0, 0.1);
              }
              
              /* Animation adjustments for mobile */
              .animate-element {
                animation-duration: 0.6s;
              }
              
              /* Reduce background shapes on mobile for performance */
              .footer-bg-shape {
                opacity: 0.3;
              }
              
              .shape1, .shape2 {
                display: none;
              }
              
              .shape3 {
                width: 80px;
                height: 80px;
              }
              
              .shape4 {
                width: 100px;
                height: 100px;
              }
            }
            
            /* Extra small devices */
            @media (max-width: 575.98px) {
              #footer {
                padding-top: 1.5rem;
              }
              
              .container {
                padding-left: 0.75rem;
                padding-right: 0.75rem;
              }
              
              .pulse-animation {
                width: 100px !important;
                max-width: 100px;
              }
              
              .gradient-text {
                font-size: 1.1rem !important;
              }
              
              .footer-link {
                font-size: 0.9rem !important;
              }
              
              .icon-item {
                width: 40px;
                height: 40px;
                margin-right: 12px;
              }
              
              .fs--1 {
                font-size: 0.85rem !important;
              }
              
              /* Stack content vertically on very small screens */
              .row > div {
                text-align: center;
              }
              
              .icon-group {
                justify-content: center;
              }
            }
            
            /* Landscape mobile orientation */
            @media (max-width: 767.98px) and (orientation: landscape) {
              #footer {
                padding-top: 1rem;
                padding-bottom: 1rem;
              }
              
              .col-12, .col-md-4 {
                margin-bottom: 1rem;
              }
              
              .gradient-text {
                margin-bottom: 0.5rem !important;
              }
            }
          </style>
        
          <script>
            document.addEventListener('DOMContentLoaded', function() {
              // Animate elements on scroll with staggered delay
              const animateElements = document.querySelectorAll('.animate-element');
              
              // Intersection Observer for smooth animations
              const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                  if (entry.isIntersecting) {
                    const element = entry.target;
                    // Use the class name to determine the delay, or default to no delay
                    const hasDelay1 = element.classList.contains('delay-1');
                    const hasDelay2 = element.classList.contains('delay-2');
                    const hasDelay3 = element.classList.contains('delay-3');
                    
                    let delay = '0s';
                    if (hasDelay1) delay = '0.2s';
                    if (hasDelay2) delay = '0.4s';
                    if (hasDelay3) delay = '0.6s';
                    
                    element.style.animationDelay = delay;
                    element.style.animationName = 'fadeInUp';
                    
                    // Unobserve after animation
                    observer.unobserve(element);
                  }
                });
              }, { threshold: 0.1 });
              
              // Observe each element
              animateElements.forEach(element => {
                observer.observe(element);
              });
              
              // Add sequential pop animation to social icons
              const socialIcons = document.querySelectorAll('.icon-item');
              socialIcons.forEach((icon, index) => {
                icon.style.animationDelay = (0.2 * index) + 's';
              });
            });
          </script>
        </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      
    </main>
    {{-- @include('profile.partials.chatbot') --}}

    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->
    @include('user.script')

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
            api_key: 'wg_795455906f46076b7d3ac2c832807b665',
            dropdown_languages: ['en', 'es', 'fr', 'de'],
            button_style: {
            full_name: true,
            with_name: true,
            with_flags: true,
            flag_type: 'circle',
            text_color: '#000000',
            background_color: '#ffffff',
            hover_color: '#f2f2f2'
        }
        });
        
    </script>
    
    
  </body>

</html>