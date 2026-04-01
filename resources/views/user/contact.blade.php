<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<head>
    @include('user.css')
    <title>IKIZEN - Contact</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Contact Page Styles */
        .contact-section {
            padding: 7rem 0;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        }
        
        .contact-card {
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 30px 70px rgba(0, 0, 0, 0.15);
        }
        
        .contact-info {
            background: linear-gradient(135deg, #4F46E5 0%, #6366F1 100%);
            color: white;
            padding: 3rem;
            height: 100%;
        }
        
        .contact-info .badge {
            background-color: rgba(255, 255, 255, 0.2);
            color: white;
            font-weight: 500;
            letter-spacing: 0.5px;
        }
        
        .contact-info h2 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
        }
        
        .contact-info p {
            opacity: 0.9;
            margin-bottom: 2rem;
        }
        
        .contact-item {
            margin-bottom: 1.5rem;
            transition: all 0.3s ease;
        }
        
        .contact-item:hover {
            transform: translateX(5px);
        }
        
        .icon-box {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            background-color: rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            margin-right: 1rem;
        }
        
        .contact-item h6 {
            font-weight: 600;
            margin-bottom: 0.25rem;
        }
        
        .contact-item p, .contact-item a {
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 0;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .contact-item a:hover {
            color: white;
            text-decoration: underline;
        }
        
        .social-links {
            margin-top: 3rem;
        }
        
        .social-links h6 {
            font-weight: 600;
            margin-bottom: 1rem;
        }
        
        .social-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.1);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1rem;
            margin-right: 0.75rem;
            transition: all 0.3s ease;
        }
        
        .social-icon:hover {
            background-color: rgba(255, 255, 255, 0.2);
            transform: translateY(-3px);
        }
        
        .contact-form {
            padding: 3rem;
            background-color: white;
            height: 100%;
        }
        
        .form-header h3 {
            font-size: 1.75rem;
            font-weight: 700;
            color: #2d3748;
            margin-bottom: 0.5rem;
        }
        
        .form-header p {
            color: #718096;
            margin-bottom: 2rem;
        }
        
        .form-label {
            font-weight: 600;
            color: #2d3748;
            margin-bottom: 0.5rem;
        }
        
        .form-control {
            padding: 1rem;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            border-color: #4F46E5;
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.2);
        }
        
        .input-group-text {
            background-color: #f8fafc;
            border: 1px solid #e2e8f0;
            border-right: none;
            border-radius: 12px 0 0 12px !important;
        }
        
        .form-control.border-start-0 {
            border-left: none;
            border-radius: 0 12px 12px 0 !important;
        }
        
        .submit-button {
            background: linear-gradient(135deg, #4F46E5 0%, #6366F1 100%);
            border: none;
            padding: 1rem;
            font-weight: 600;
            letter-spacing: 0.5px;
            border-radius: 12px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .submit-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(79, 70, 229, 0.3);
        }
        
        .submit-button .btn-icon {
            transition: all 0.3s ease;
        }
        
        .submit-button:hover .btn-icon {
            transform: translateX(5px);
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
        
        .reveal {
            opacity: 0;
            animation: fadeInUp 0.8s ease forwards;
        }
        
        .reveal-left {
            animation-delay: 0.2s;
        }
        
        .reveal-right {
            animation-delay: 0.4s;
        }
        
        /* Responsive adjustments */
        @media (max-width: 991.98px) {
            .contact-info {
                border-radius: 16px 16px 0 0;
            }
            
            .contact-form {
                border-radius: 0 0 16px 16px;
            }
        }
    </style>
</head>

<body>
    <main class="main" id="top">
        @include('user.menu')

        <section class="contact-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="contact-card">
                            <div class="row g-0">
                                <!-- Contact Info Side -->
                                <div class="col-lg-5">
                                    <div class="contact-info">
                                        <div class="info-header mb-5 reveal">
                                            <span class="badge rounded-pill px-3 py-2 mb-3 reveal">Contact Us</span>
                                            <h2 class="mb-4 reveal reveal-left">Get in touch with our team</h2>
                                            <p class="mb-5 reveal reveal-left">Have questions or need assistance? We're here to help. Reach out to us through any channel below.</p>
                                        </div>
                                        
                                        <div class="contact-details">
                                            <div class="contact-item d-flex align-items-center mb-4 reveal reveal-left">
                                                <div class="icon-box">
                                                    <i class="fas fa-phone-alt"></i>
                                                </div>
                                                <div class="info">
                                                    <h6 class="mb-0">Phone Number</h6>
                                                    <p class="mb-0">06 13 45 76 00</p>
                                                </div>
                                            </div>
                                            
                                            <div class="contact-item d-flex align-items-center mb-4 reveal reveal-left">
                                                <div class="icon-box">
                                                    <i class="fas fa-envelope"></i>
                                                </div>
                                                <div class="info">
                                                    <h6 class="mb-0">Email Address</h6>
                                                    <p><a href="mailto:ikizzeen@gmail.com">ikizzeen@gmail.com</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="social-links mt-5 reveal reveal-left">
                                            <h6 class="mb-3">Follow Us</h6>
                                            <div class="d-flex">
                                                <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                                                <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Form Side -->
                                <div class="col-lg-7">
                                    <div class="contact-form">
                                        <div class="form-header mb-4 reveal reveal-right">
                                            <h3>Send us a message</h3>
                                            <p>Fill out the form below and we'll get back to you shortly</p>
                                        </div>
                                        
                                        <form action="https://api.web3forms.com/submit" method="POST" id="contactForm" class="needs-validation" novalidate>
                                            <input type="hidden" name="access_key" value="c667aef2-b7a4-4067-bf4d-c23cf3cb3cf0">
                                            
                                            <div class="mb-4 reveal reveal-right">
                                                <label for="name" class="form-label">Full Name</label>
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                    <input type="text" class="form-control form-control-lg border-start-0" name="name" id="name" placeholder="Enter your name" required>
                                                    <div class="invalid-feedback">Please enter your name</div>
                                                </div>
                                            </div>
                                            
                                            <div class="mb-4 reveal reveal-right">
                                                <label for="email" class="form-label">Email Address</label>
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                                    <input type="email" class="form-control form-control-lg border-start-0" name="email" id="email" placeholder="Enter your email" required>
                                                    <div class="invalid-feedback">Please enter a valid email address</div>
                                                </div>
                                            </div>
                                            
                                            <div class="mb-4 reveal reveal-right">
                                                <label for="message" class="form-label">Message</label>
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="fas fa-comment-dots"></i></span>
                                                    <textarea class="form-control form-control-lg border-start-0" name="message" id="message" rows="4" placeholder="Write your message here..." required></textarea>
                                                    <div class="invalid-feedback">Please enter your message</div>
                                                </div>
                                            </div>
                                            
                                            <div class="mt-4 reveal reveal-right">
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

        <!-- Rest of your sections (testimonials, footer, etc.) -->
       
    </main>

    @include('user.script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Form validation
            (function() {
                'use strict';
                
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.querySelectorAll('.needs-validation');
                
                // Loop over them and prevent submission
                Array.prototype.slice.call(forms)
                    .forEach(function(form) {
                        form.addEventListener('submit', function(event) {
                            if (!form.checkValidity()) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            
                            form.classList.add('was-validated');
                        }, false);
                    });
            })();
            
            // Animate elements when they come into view
            const animateOnScroll = () => {
                const elements = document.querySelectorAll('.reveal');
                
                elements.forEach(element => {
                    const elementPosition = element.getBoundingClientRect().top;
                    const screenPosition = window.innerHeight / 1.2;
                    
                    if (elementPosition < screenPosition) {
                        element.style.animationPlayState = 'running';
                    }
                });
            };
            
            window.addEventListener('scroll', animateOnScroll);
            animateOnScroll(); // Run once on page load
            
            // Form submission handling
            const contactForm = document.getElementById('contactForm');
            if (contactForm) {
                contactForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    const submitButton = document.getElementById('form-submit');
                    const originalText = submitButton.innerHTML;
                    
                    // Change button text and add loading state
                    submitButton.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>Sending...';
                    submitButton.disabled = true;
                    
                    // Simulate form submission (replace with actual AJAX call)
                    setTimeout(() => {
                        // Reset button
                        submitButton.innerHTML = originalText;
                        submitButton.disabled = false;
                        
                        // Show success message
                        const messageContainer = document.getElementById('message-container');
                        messageContainer.innerHTML = `
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Success!</strong> Your message has been sent. We'll get back to you soon.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        `;
                        
                        // Reset form
                        contactForm.reset();
                        contactForm.classList.remove('was-validated');
                    }, 2000);
                });
            }
        });
    </script>
</body>
</html>