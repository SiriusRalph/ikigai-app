<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
@include('user.css');
<title>IKIZEN - Contact</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  </head>

  <body>

    <main class="main" id="top">
@include('user.menu');

      <section class="contact-section" style="padding: 7rem 0; background-color: #f8f9fa;">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10">
              <div class="contact-wrapper">
                <div class="row g-0">
                  <!-- Contact Info Side -->
                  <div class="col-lg-5">
                    <div class="contact-info-panel text-white p-5" style="background: linear-gradient(135deg, #1853b2bb 0%, #1853b2 100%); height: 100%; border-radius: 12px 0 0 12px;">
                      <div class="info-header mb-5 reveal-left">
                        <span class="badge rounded-pill bg-white text-primary px-3 py-2 mb-3">Contact Us</span>
                        <h2 class="fs-3 fw-bold mb-4">Get in touch with our team</h2>
                        <p class="mb-5">Have questions or need assistance? We're here to help. Reach out to us through any channel below.</p>
                      </div>
                      
                      <div class="contact-details">
                        <div class="contact-item d-flex align-items-center mb-4 reveal-left" style="animation-delay: 0.2s;">
                          <div class="icon-box me-3">
                            <i class="fas fa-phone-alt"></i>
                          </div>
                          <div class="info">
                            <h6 class="mb-0">Phone Number</h6>
                            <p class="mb-0">06 13 45 76 00</p>
                          </div>
                        </div>
                        
                        <div class="contact-item d-flex align-items-center mb-4 reveal-left" style="animation-delay: 0.3s;">
                          <div class="icon-box me-3">
                            <i class="fas fa-envelope"></i>
                          </div>
                          <div class="info">
                            <h6 class="mb-0">Email Address</h6>
                            <p><a href="mailto:ikizzeen@gmail.com">ikizzeen@gmail.com</a></p>
                          </div>
                        </div>

                      </div>
                      
                      <div class="social-links mt-5 reveal-left" style="animation-delay: 0.5s;">
                        <h6 class="mb-3">Follow Us</h6>
                        <div class="d-flex gap-3">
                          <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                          <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Form Side -->
                  <div class="col-lg-7">
                    <div class="contact-form-panel bg-white p-5" style="border-radius: 0 12px 12px 0; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                      <div class="form-header mb-4 reveal-right">
                        <h3 class="fs-4 fw-bold">Send us a message</h3>
                        <p class="text-muted">Fill out the form below and we'll get back to you shortly</p>
                      </div>
                      
                      <form action="https://api.web3forms.com/submit" method="POST" id="contactForm" class="needs-validation" novalidate>
                        <input type="hidden" name="access_key" value="c667aef2-b7a4-4067-bf4d-c23cf3cb3cf0">
                        
                        <div class="mb-4 reveal-right" style="animation-delay: 0.2s;">
                          <label for="name" class="form-label">Full Name</label>
                          <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                            <input type="text" class="form-control form-control-lg border-start-0" name="name" id="name" placeholder="Enter your name" required>
                            <div class="invalid-feedback">Please enter your name</div>
                          </div>
                        </div>
                        
                        <div class="mb-4 reveal-right" style="animation-delay: 0.3s;">
                          <label for="email" class="form-label">Email Address</label>
                          <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            <input type="email" class="form-control form-control-lg border-start-0" name="email" id="email" placeholder="Enter your email" pattern="[^ @]*@[^ @]*" required>
                            <div class="invalid-feedback">Please enter a valid email address</div>
                          </div>
                        </div>
                        
                        <div class="mb-4 reveal-right" style="animation-delay: 0.4s;">
                          <label for="message" class="form-label">Message</label>
                          <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-comment-dots"></i></span>
                            <textarea class="form-control form-control-lg border-start-0" name="message" id="message" rows="4" placeholder="Write your message here..." required></textarea>
                            <div class="invalid-feedback">Please enter your message</div>
                          </div>
                        </div>
                        
                        <div class="mt-4 reveal-right" style="animation-delay: 0.5s;">
                          <button type="submit" id="form-submit" class="btn btn-primary btn-lg w-100 submit-button">
                            <span class="btn-text">Send Message</span>
                            <span class="btn-icon"><i class="fas fa-paper-plane ms-2"></i></span>
                          </button>
                        </div>
                      </form>
                      
                      <div id="message-container" class="mt-4"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>



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
        <section class="container">

            <div class="col-lg-12">
                <div id="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12469.776493332698!2d-80.14036379941481!3d25.907788681148624!2m3!1f357.26927939317244!2f20.870722720054623!3f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x88d9add4b4ac788f%3A0xe77469d09480fcdb!2sSunny%20Isles%20Beach!5e1!3m2!1sen!2sth!4v1642869952544!5m2!1sen!2sth" width="100%" height="500px" frameborder="0" style="border:0; border-radius: 10px; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);" allowfullscreen=""></iframe>
                </div>
            </div>
        </section>
        
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
            <div class="col-lg-5 col-md-7 col-12 mb-4 mb-md-7 mb-lg-0 order-0"> <img class="mb-4" src="home/assets/img/1-removebg-preview.png" width="150" alt="ikizen" />
              <p class="fs--1 text-secondary mb-0 fw-medium">Book your consultation in minutes, get the SOLUTION for your problems.</p>
            </div>
            <div class="col-lg-2 col-md-4 mb-4 mb-lg-0 order-lg-1 order-md-2">
              <h4 class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4">Ikizen</h4>
              <ul class="list-unstyled mb-0">
                <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="{{route('accueil')}}">About</a></li>
                <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="{{route('accueil')}}">Experts</a></li>
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
    <script src="//code.tidio.co/ezckblutrreap5ryuccizocwkfafx453.js" async></script>

    <script type="text/javascript" src="https://cdn.weglot.com/weglot.min.js"></script>
    <script>
        Weglot.initialize({
            api_key: 'wg_f046143884ddc4609603fcad0408ce432'
        });
    </script>
  </body>

</html>