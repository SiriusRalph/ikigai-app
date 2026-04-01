<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>IKIZEN - About Us</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Beautiful Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }
        
        .heading-font {
            font-family: 'Playfair Display', serif;
        }
        
        body {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
        }
        
        .content-container {
            background-color: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        
        .gradient-text {
            background: linear-gradient(45deg, #3b82f6, #6366f1);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .floating {
            animation: floating 3s ease-in-out infinite;
        }
        
        @keyframes floating {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-8px); }
            100% { transform: translateY(0px); }
        }
        
        .fade-in-up {
            animation: fade-in-up 0.8s ease-out forwards;
        }
        
        @keyframes fade-in-up {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        
        .founder-card {
            background-color: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .founder-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(59, 130, 246, 0.15);
        }
        
        .stat-card {
            background: linear-gradient(135deg, #3b82f6, #6366f1);
            transition: all 0.3s ease;
        }
        
        .stat-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(59, 130, 246, 0.25);
        }
        
        .feature-icon {
            background: linear-gradient(135deg, #3b82f6, #6366f1);
            transition: all 0.3s ease;
        }
        
        .feature-icon:hover {
            transform: scale(1.05);
        }
        
        .timeline-item::before {
            content: '';
            position: absolute;
            left: 15px;
            top: 0;
            height: 100%;
            width: 2px;
            background: linear-gradient(to bottom, #3b82f6, #6366f1);
        }
        
        .timeline-dot {
            background: linear-gradient(135deg, #3b82f6, #6366f1);
            box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.2);
        }
        
        .profile-placeholder {
            background: linear-gradient(135deg, #f1f5f9, #e2e8f0);
            border: 2px dashed #cbd5e1;
            transition: all 0.3s ease;
        }
        
        .profile-placeholder:hover {
            border-color: #3b82f6;
            background: linear-gradient(135deg, #eff6ff, #dbeafe);
        }
    </style>
</head>

<body class="min-h-screen">
    <!-- Header -->
    <header class="py-4">
        <div class="container max-w-5xl mx-auto px-4">
            <div class="flex justify-center">
                <a href="/" class="flex items-center">
                    <img src="home/assets/img/1-removebg-preview.png" width="80" alt="IKIZEN Logo" class="floating">
                </a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="py-12">
        <div class="container max-w-5xl mx-auto px-4">
            <div class="text-center content-container rounded-2xl p-10 shadow-lg fade-in-up">
                <h1 class="text-4xl font-bold gradient-text heading-font mb-4">About IKIZEN</h1>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    We're two AI engineering students on a mission to help young people discover their true passion 
                    and find the career path that's perfect for them. Your career is our responsibility.
                </p>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="py-12">
        <div class="container max-w-5xl mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-6">
                <div class="content-container rounded-2xl p-8 shadow-lg fade-in-up" style="animation-delay: 0.1s;">
                    <div class="text-center mb-6">
                        <div class="feature-icon w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-compass text-lg text-white"></i>
                        </div>
                        <h3 class="text-xl font-semibold gradient-text heading-font">Our Mission</h3>
                    </div>
                    <p class="text-gray-600 leading-relaxed text-sm">
                        To help struggling young students, career switchers, and recent graduates find their most 
                        appropriate career path by connecting them with AI-matched experts who provide personalized 
                        courses, consultations, and career guidance.
                    </p>
                </div>
                
                <div class="content-container rounded-2xl p-8 shadow-lg fade-in-up" style="animation-delay: 0.2s;">
                    <div class="text-center mb-6">
                        <div class="feature-icon w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-seedling text-lg text-white"></i>
                        </div>
                        <h3 class="text-xl font-semibold gradient-text heading-font">Our Vision</h3>
                    </div>
                    <p class="text-gray-600 leading-relaxed text-sm">
                        To develop a generation of confident young people who know exactly what they want and where 
                        they're going through our comprehensive consultation and guidance programs.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-12">
        <div class="container max-w-5xl mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="stat-card rounded-xl p-4 text-center text-white fade-in-up" style="animation-delay: 0.1s;">
                    <div class="text-2xl font-bold mb-1">500+</div>
                    <div class="text-xs opacity-90">Students Guided</div>
                </div>
                <div class="stat-card rounded-xl p-4 text-center text-white fade-in-up" style="animation-delay: 0.2s;">
                    <div class="text-2xl font-bold mb-1">50+</div>
                    <div class="text-xs opacity-90">Expert Mentors</div>
                </div>
                <div class="stat-card rounded-xl p-4 text-center text-white fade-in-up" style="animation-delay: 0.3s;">
                    <div class="text-2xl font-bold mb-1">95%</div>
                    <div class="text-xs opacity-90">Success Rate</div>
                </div>
                <div class="stat-card rounded-xl p-4 text-center text-white fade-in-up" style="animation-delay: 0.4s;">
                    <div class="text-2xl font-bold mb-1">20+</div>
                    <div class="text-xs opacity-90">Career Fields</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Founders Section -->
    <section class="py-12">
        <div class="container max-w-5xl mx-auto px-4">
            <div class="text-center mb-10 fade-in-up">
                <h2 class="text-3xl font-bold gradient-text heading-font mb-3">Meet Our Founders</h2>
                <p class="text-gray-600">Two passionate AI engineering students who understand your journey</p>
            </div>
            
            <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <div class="founder-card rounded-2xl p-8 shadow-lg text-center fade-in-up" style="animation-delay: 0.2s;">
                    <div class="profile-placeholder w-24 h-24 rounded-full mx-auto mb-6 flex items-center justify-center">
                        <div class="text-center">
                            <img src="user/sa1-Photoroom.jpg" alt="Description of your image" class="w-full h-auto rounded">
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 heading-font">Sara Bouras</h3>
                    <p class="text-blue-600 font-medium mb-4 text-sm">Co-Founder & AI Engineer</p>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        AI engineering student passionate about using technology to solve real-world problems. 
                        Experienced the challenges of career uncertainty and dedicated to helping others find their path.
                    </p>
                </div>
                
                <div class="founder-card rounded-2xl p-8 shadow-lg text-center fade-in-up" style="animation-delay: 0.4s;">
                    <div class="profile-placeholder w-24 h-24 rounded-full mx-auto mb-6 flex items-center justify-center">
                        <div class="text-center">
                            <i class="fas fa-camera text-gray-400 text-lg mb-1"></i>
                            <div class="text-xs text-gray-500">Photo</div>
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 heading-font">Fatima Ezzahra Montacif</h3>
                    <p class="text-blue-600 font-medium mb-4 text-sm">Co-Founder & AI Engineer</p>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        AI engineering student with a deep understanding of career guidance challenges. 
                        Committed to building AI solutions that match young people with their perfect career paths.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Journey -->
    <section class="py-12">
        <div class="container max-w-5xl mx-auto px-4">
            <div class="content-container rounded-2xl p-10 shadow-lg fade-in-up">
                <h2 class="text-3xl font-bold gradient-text heading-font text-center mb-8">Our Journey</h2>
                
                <div class="relative max-w-3xl mx-auto">
                    <div class="space-y-6">
                        <div class="timeline-item relative pl-12 fade-in-up" style="animation-delay: 0.2s;">
                            <div class="timeline-dot absolute left-3 top-4 w-3 h-3 rounded-full -translate-x-1/2"></div>
                            <div class="bg-white rounded-lg p-6 shadow-sm">
                                <h3 class="font-semibold text-blue-600 heading-font">The Struggle</h3>
                                <p class="text-gray-600 mt-2 text-sm">As AI engineering students, we experienced firsthand the confusion and uncertainty of not knowing which career path to choose, despite our technical skills.</p>
                            </div>
                        </div>
                        
                        <div class="timeline-item relative pl-12 fade-in-up" style="animation-delay: 0.4s;">
                            <div class="timeline-dot absolute left-3 top-4 w-3 h-3 rounded-full -translate-x-1/2"></div>
                            <div class="bg-white rounded-lg p-6 shadow-sm">
                                <h3 class="font-semibold text-blue-600 heading-font">The Realization</h3>
                                <p class="text-gray-600 mt-2 text-sm">We realized that many young people face the same challenges we did - having skills but lacking proper guidance to find their true passion and career direction.</p>
                            </div>
                        </div>
                        
                        <div class="timeline-item relative pl-12 fade-in-up" style="animation-delay: 0.6s;">
                            <div class="timeline-dot absolute left-3 top-4 w-3 h-3 rounded-full -translate-x-1/2"></div>
                            <div class="bg-white rounded-lg p-6 shadow-sm">
                                <h3 class="font-semibold text-blue-600 heading-font">The Solution</h3>
                                <p class="text-gray-600 mt-2 text-sm">We decided to build IKIZEN - a platform that provides the career guidance we never had, using AI to match young people with expert mentors and personalized career paths.</p>
                            </div>
                        </div>
                        
                        <div class="timeline-item relative pl-12 fade-in-up" style="animation-delay: 0.8s;">
                            <div class="timeline-dot absolute left-3 top-4 w-3 h-3 rounded-full -translate-x-1/2"></div>
                            <div class="bg-white rounded-lg p-6 shadow-sm">
                                <h3 class="font-semibold text-blue-600 heading-font">The Mission Continues</h3>
                                <p class="text-gray-600 mt-2 text-sm">Today, we're dedicated to helping hundreds of young people find their IKIZEN - their reason for being - through personalized career guidance and mentorship.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-12">
        <div class="container max-w-5xl mx-auto px-4">
            <div class="text-center mb-8 fade-in-up">
                <h2 class="text-3xl font-bold gradient-text heading-font mb-3">What We Believe In</h2>
                <p class="text-gray-600">The values that drive our mission</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="content-container rounded-xl p-6 text-center shadow-lg fade-in-up" style="animation-delay: 0.1s;">
                    <div class="feature-icon w-10 h-10 rounded-full flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-heart text-sm text-white"></i>
                    </div>
                    <h3 class="font-semibold mb-2 heading-font text-sm">Empathy</h3>
                    <p class="text-xs text-gray-600">Understanding your struggles because we've been there too</p>
                </div>
                
                <div class="content-container rounded-xl p-6 text-center shadow-lg fade-in-up" style="animation-delay: 0.2s;">
                    <div class="feature-icon w-10 h-10 rounded-full flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-lightbulb text-sm text-white"></i>
                    </div>
                    <h3 class="font-semibold mb-2 heading-font text-sm">Innovation</h3>
                    <p class="text-xs text-gray-600">Using AI to create personalized career solutions</p>
                </div>
                
                <div class="content-container rounded-xl p-6 text-center shadow-lg fade-in-up" style="animation-delay: 0.3s;">
                    <div class="feature-icon w-10 h-10 rounded-full flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-hands-helping text-sm text-white"></i>
                    </div>
                    <h3 class="font-semibold mb-2 heading-font text-sm">Support</h3>
                    <p class="text-xs text-gray-600">Providing guidance every step of your career journey</p>
                </div>
                
                <div class="content-container rounded-xl p-6 text-center shadow-lg fade-in-up" style="animation-delay: 0.4s;">
                    <div class="feature-icon w-10 h-10 rounded-full flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-star text-sm text-white"></i>
                    </div>
                    <h3 class="font-semibold mb-2 heading-font text-sm">Purpose</h3>
                    <p class="text-xs text-gray-600">Helping you discover your true calling and passion</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact CTA -->
    <section class="py-12">
        <div class="container max-w-4xl mx-auto px-4">
            <div class="content-container rounded-2xl p-10 shadow-lg text-center fade-in-up">
                <h2 class="text-2xl font-bold gradient-text heading-font mb-3">Ready to Find Your IKIZEN?</h2>
                <p class="text-gray-600 mb-6">Let us help you discover your passion and guide you toward the perfect career path.</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#" class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white px-6 py-3 rounded-lg font-medium hover:shadow-lg transition-all hover:scale-105 text-sm">
                        Start Your Journey
                    </a>
                    <a href="#" class="border-2 border-blue-500 text-blue-600 px-6 py-3 rounded-lg font-medium hover:bg-blue-500 hover:text-white transition-all text-sm">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-6">
        <div class="container max-w-5xl mx-auto px-4">
            <div class="text-center text-sm text-gray-500 fade-in-up">
                &copy; 2025 IKIZEN. Made with ❤️ by Sara & Fatima Ezzahra
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.1/dist/gsap.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Scroll animations
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -30px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            // Observe all fade-in-up elements
            document.querySelectorAll('.fade-in-up').forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(20px)';
                el.style.transition = 'all 0.6s ease-out';
                observer.observe(el);
            });

            // Animate stats on scroll
            const statCards = document.querySelectorAll('.stat-card');
            const statsObserver = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const number = entry.target.querySelector('.text-2xl');
                        const finalValue = number.textContent;
                        const numericValue = parseInt(finalValue.replace(/[^\d]/g, ''));
                        
                        gsap.fromTo(number, 
                            { textContent: 0 },
                            { 
                                textContent: numericValue,
                                duration: 1.5,
                                ease: "power2.out",
                                snap: { textContent: 1 },
                                onUpdate: function() {
                                    const current = Math.floor(this.targets()[0].textContent);
                                    if (finalValue.includes('+')) {
                                        number.textContent = current + '+';
                                    } else if (finalValue.includes('%')) {
                                        number.textContent = current + '%';
                                    } else {
                                        number.textContent = current;
                                    }
                                }
                            }
                        );
                    }
                });
            }, observerOptions);

            statCards.forEach(card => {
                statsObserver.observe(card);
            });
        });
    </script>
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