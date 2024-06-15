<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
@include('user.css');
<title>IKIGAI - Contact</title>
  </head>

  <body>

    <main class="main" id="top">
@include('user.menu');

      <section style="padding-top: 7rem;">
        <div class="container">
          <div class="row align-items-center">
                <div class="col-lg-6">
                  <div class="section-heading">
                    <h5 class="text-secondary">| Contact</h5>
                    <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">Be in touch with our team!</h3>
                    <p>If you have any complaints or questions, do not hesitate to contact 
                        our customer service via telephone, email or this contact form.</p>
                  </div>

  
                      <div class="row">
                        <div class="task" draggable="true">  

                            <div class="col-lg-12">
                            <div>
                                <img src="home/assets/img/phone-icon.png" alt="tel">
                                <p>06 13 45 76 00<br><span>Phone number</span></p>
                            </div>
                            </div>

                        </div>

                        <div class="task" draggable="true">  

                            <div class="col-lg-12">
                            <div >
                                <img src="home/assets/img/email-icon.png" alt="mail" width="70px" >
                                <p>info@ikigai.com<br><span>Email</span></p>
                            </div>
                            </div>
                        </div>


                      </div>
            
                </div>
                <div class="col-lg-6">
                <form action="https://api.web3forms.com/submit" method="POST">
                    <div class="row">
                      <input type="hidden" name="access_key" value="af53162f-7913-47fb-955e-699701978fa6">
                      <div class="col-lg-12">
                        <fieldset>
                          <label for="name">Full name</label>
                          <input type="text" class="form-control" name="name" id="name" placeholder="Your name..." autocomplete="on" required="">
                        </fieldset>
                      </div>
                      <div class="col-lg-12">
                        <fieldset>
                          <label for="email">Email</label>
                          <input type="email" class="form-control" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..." required="">
                        </fieldset>
                      </div>
                      <div class="col-lg-12">
                        <fieldset>
                          <label for="message">Message</label>
                          <textarea name="message" class="form-control" id="message" placeholder="Your Message"></textarea>
                        </fieldset>
                      </div>
                      <div class="col-lg-12">
                        <fieldset>
                          <button type="submit" id="form-submit" class="btn btn-primary mt-3">Submit</button>
                        </fieldset>
                      </div>
                    </div>
                  </form>
                </div>
                <div id="message-container"></div>
        

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
                          <p class="fw-medium mb-4">&quot;Avant d'avoir mon diplôme, j'étais perdu concernant ma carrière, mais grâce à Ikigai et aux conseils des experts, j'ai pu trouver ma voie en choisissant d'étudier l'informatique et j'adore.&quot;</p>
                          <h5 class="text-secondary">Adam Mounir</h5>
                          <p class="fw-medium fs--1 mb-0">Etudiant en bac</p>
                        </div>
                      </div>
                      <div class="card shadow-sm position-absolute top-0 z-index--1 mb-3 w-100 h-100" style="border-radius:10px;transform:translate(25px, 25px)"> </div>
                    </div>
                    <div class="carousel-item position-relative ">
                      <div class="card shadow" style="border-radius:10px;">
                        <div class="position-absolute start-0 top-0 translate-middle"> <img class="rounded-circle fit-cover" src="home/assets/img/testimonial/author3.png" height="65" width="65" alt="" /></div>
                        <div class="card-body p-4">
                          <p class="fw-medium mb-4">&quot;Avant je travaillais salariée dans une entreprise privée comme community manager, mais les horaires de bureaux n'étaient pas faites pour moi. Alors j'ai décidé de me convertir.&quot;</p>
                          <h5 class="text-secondary">Sara Ktoun</h5>
                          <p class="fw-medium fs--1 mb-0">Photographe</p>
                        </div>
                      </div>
                      <div class="card shadow-sm position-absolute top-0 z-index--1 mb-3 w-100 h-100" style="border-radius:10px;transform:translate(25px, 25px)"> </div>
                    </div>
                    <div class="carousel-item position-relative ">
                      <div class="card shadow" style="border-radius:10px;">
                        <div class="position-absolute start-0 top-0 translate-middle"> <img class="rounded-circle fit-cover" src="home/assets/img/testimonial/author2.png" height="65" width="65" alt="" /></div>
                        <div class="card-body p-4">
                          <p class="fw-medium mb-4">&quot;Etant CEO, j'ai toute une équipe à gérer, alors pour être dans la même longueur d'onde que mon équipe, j'ai opté pour une consultation en développement personnel et cela m'a aidé.&quot;</p>
                          <h5 class="text-secondary">Saad Rahmouni</h5>
                          <p class="fw-medium fs--1 mb-0">CEO de X Company</p>
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