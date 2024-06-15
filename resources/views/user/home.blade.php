<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
@include('user.css')
<title>IKIGAI | Your career, our responsability</title>
  </head>

  <body>

    <main class="main" id="top">
@include('user.menu');

      <section style="padding-top: 7rem;">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-5 col-lg-6 order-0 order-md-1 text-end">
                <div class="video-container">
                    <video class="hero-video" autoplay loop muted playsinline>
                      <source src="home/assets/video/anim_logo.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
            <div class="col-md-7 col-lg-6 text-md-start text-center py-6">
              <h4 class="fw-bold text-danger mb-3">Take Your Career to Another Level</h4>
              <h1 class="hero-title">Work, studies and career guidance</h1>
              <p class="mb-4 fw-medium">Don't look far, Ikigai is here <br class="d-none d-xl-block" />to help you find your way!!!<br class="d-none d-xl-block" /></p>
              <div class="text-center text-md-start"> <a class="btn btn-primary btn-lg me-md-4 mb-3 mb-md-0 border-0 primary-btn-shadow" href="{{ route('test.start') }}" role="button">Book now</a>
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
            <h5 class="text-secondary">IKIGAI </h5>
            <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">Why Ikigai ?</h3>
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

            @foreach ($experts as $expert)      
                <div class="col-md-4 mb-4">
                    <div class="card overflow-hidden shadow"> <img src="{{ asset('storage/' . $expert->photo) }}" alt="expert image" >
                        <div class="card-body py-4 px-3">
                            <div class="d-flex flex-column flex-lg-row justify-content-between mb-3">
                                <h4 class="text-secondary fw-medium">
                                    <a class="link-900 text-decoration-none stretched-link" href="{{ route('consultations.create', ['expert_id' => $expert->id]) }}">{{ $expert->prenom }} {{ $expert->nom }}</a>
                                </h4>
                                <span class="fs-1 fw-medium">Tarif: {{ $expert->tarif }} DHS/30min</span>
                            </div>
                            <div class="d-flex align-items-center"><span class="fs-0 fw-medium">Experience: {{ $expert->experience }} years</span></div>
                        </div>
                    </div>
                </div>
            @endforeach

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
                <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">Book your consultation NOW</h3>
              </div>
              <div class="d-flex align-items-start mb-5">
                <div class="bg-primary me-sm-4 me-3 p-3" style="border-radius: 13px"> <img src="home/assets/img/steps/selection.svg" width="22" alt="steps" /></div>
                <div class="flex-1">
                  <h5 class="text-secondary fw-bold fs-0">Select the expert</h5>
                  <p>Choose the coach you want, or the <br class="d-none d-sm-block"> expert we recommend you.</p>
                </div>
              </div>
              <div class="d-flex align-items-start mb-5">
                <div class="bg-danger me-sm-4 me-3 p-3" style="border-radius: 13px"> <img src="home/assets/img/steps/water-sport.svg" width="22" alt="steps" /></div>
                <div class="flex-1">
                  <h5 class="text-secondary fw-bold fs-0">Schedule your consultation</h5>
                  <p>Choose the date and time that suits<br class="d-none d-sm-block"> you, and make your payment.</p>
                </div>
              </div>
              <div class="d-flex align-items-start mb-5">
                <div class="bg-info me-sm-4 me-3 p-3" style="border-radius: 13px"> <img src="home/assets/img/steps/taxi.svg" width="22" alt="steps" /></div>
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
                          <p class="fw-medium mb-4">&quot;Before graduating, I was lost about my career, but thanks to Ikigai and the advice of the experts, I was able to find my path by choosing to study computer science and I love it.&quot;</p>
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
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->
    @include('user.script');
  </body>

</html>