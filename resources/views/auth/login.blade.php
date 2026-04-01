<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>IKIZEN - Login</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Animation Library -->
    <link href="https://cdn.jsdelivr.net/npm/animate.css@4.1.1/animate.min.css" rel="stylesheet">
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        }
        
        .login-container {
            background-color: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
        }
        
        .form-input {
            transition: all 0.3s ease;
        }
        
        .form-input:focus {
            border-color: #4F46E5;
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.2);
            transform: translateY(-2px);
        }
        
        .login-btn {
            background: linear-gradient(45deg, #4F46E5, #6366F1);
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(79, 70, 229, 0.25);
        }
        
        .login-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 7px 14px rgba(79, 70, 229, 0.3);
        }
        
        .image-container {
            background-position: center;
            background-size: cover;
            position: relative;
            overflow: hidden;
        }
        
        .image-container::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(79, 70, 229, 0.7) 0%, rgba(99, 102, 241, 0.5) 100%);
        }
        
        .floating {
            animation: floating 3s ease-in-out infinite;
        }
        
        @keyframes floating {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }
        
        .slide-in-left {
            animation: slide-in-left 0.8s ease-out forwards;
        }
        
        @keyframes slide-in-left {
            from { transform: translateX(-50px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        
        .fade-in-up {
            animation: fade-in-up 0.8s ease-out forwards;
        }
        
        @keyframes fade-in-up {
            from { transform: translateY(30px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        
        .gradient-text {
            background: linear-gradient(45deg, #4F46E5, #6366F1);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .pulse {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(79, 70, 229, 0.7); }
            70% { box-shadow: 0 0 0 15px rgba(79, 70, 229, 0); }
            100% { box-shadow: 0 0 0 0 rgba(79, 70, 229, 0); }
        }
        
        /* Floating particles */
        .particle {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
        }
        
        .p1 {
            width: 60px;
            height: 60px;
            top: 20%;
            left: 20%;
            animation: float1 8s ease-in-out infinite;
        }
        
        .p2 {
            width: 40px;
            height: 40px;
            top: 70%;
            left: 10%;
            animation: float2 10s ease-in-out infinite;
        }
        
        .p3 {
            width: 25px;
            height: 25px;
            top: 30%;
            right: 30%;
            animation: float3 7s ease-in-out infinite;
        }
        
        .p4 {
            width: 15px;
            height: 15px;
            top: 80%;
            right: 15%;
            animation: float1 12s ease-in-out infinite;
        }
        
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
    </style>
</head>

<body class="min-h-screen flex items-center justify-center p-4">
    <!-- Particles -->
    <div class="particle p1"></div>
    <div class="particle p2"></div>
    <div class="particle p3"></div>
    <div class="particle p4"></div>

    <div class="container max-w-6xl mx-auto">
        <div class="flex justify-center mb-8 slide-in-left">
            <a href="/" class="flex items-center">
                <img src="home/assets/img/1-removebg-preview.png" width="90" alt="IKIZEN Logo" class="floating">
            </a>
        </div>
        
        <div class="flex flex-col lg:flex-row rounded-3xl shadow-2xl overflow-hidden">
            <!-- Left side: Form -->
            <div class="w-full lg:w-5/12 p-8 lg:p-12 login-container fade-in-up" style="animation-delay: 0.2s;">
                <div class="max-w-md mx-auto">
                    <h2 class="text-3xl font-bold mb-2 gradient-text">Welcome Back</h2>
                    <p class="text-gray-600 mb-8">Enter your credentials to access your account</p>
                    
                    <form method="POST" action="{{ route('login') }}" class="space-y-6">
                        @csrf
                        
                        <div class="space-y-2 fade-in-up" style="animation-delay: 0.4s;">
                            <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-envelope text-gray-400"></i>
                                </div>
                                <input type="email" id="email" name="email" required autofocus 
                                    class="form-input block w-full pl-10 pr-3 py-4 rounded-lg border border-gray-300 focus:outline-none"
                                    placeholder="Enter your email">
                            </div>
                            <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-red-600" />
                        </div>
                        
                        <div class="space-y-2 fade-in-up" style="animation-delay: 0.6s;">
                            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-lock text-gray-400"></i>
                                </div>
                                <input type="password" id="password" name="password" required 
                                    class="form-input block w-full pl-10 pr-3 py-4 rounded-lg border border-gray-300 focus:outline-none"
                                    placeholder="Enter your password">
                            </div>
                            <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm text-red-600" />
                        </div>
                        
                        <div class="flex items-center justify-between fade-in-up" style="animation-delay: 0.8s;">
                            <div class="flex items-center">
                                <input id="remember_me" name="remember" type="checkbox" 
                                    class="h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                <label for="remember_me" class="ml-2 block text-sm text-gray-700">
                                    Remember me
                                </label>
                            </div>
                            
                            @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" 
                                class="text-sm font-medium text-indigo-600 hover:text-indigo-500 transition-colors">
                                Forgot password?
                            </a>
                            @endif
                        </div>
                        
                        <div class="fade-in-up" style="animation-delay: 1s;">
                            <button type="submit" 
                                class="login-btn w-full flex justify-center py-4 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white focus:outline-none">
                                Sign in to account
                            </button>
                        </div>
                        
                        <div class="mt-6 text-center fade-in-up" style="animation-delay: 1.2s;">
                            <p class="text-sm text-gray-600">
                                Don't have an account?
                                <a href="{{ route('register') }}" class="font-medium text-indigo-600 hover:text-indigo-500 transition-colors">
                                    Create account
                                </a>
                            </p>
                        </div>
                        
                        <div class="mt-8 fade-in-up" style="animation-delay: 1.4s;">
                            <div class="relative">
                                <div class="absolute inset-0 flex items-center">
                                    <div class="w-full border-t border-gray-300"></div>
                                </div>
                                <div class="relative flex justify-center text-sm">
                                    <span class="px-2 bg-white text-gray-500">Or continue with</span>
                                </div>
                            </div>
                            
                            <div class="mt-6 grid grid-cols-3 gap-3">
                                <a href="#" class="w-full flex items-center justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-500 hover:bg-gray-50 transition-colors">
                                    <i class="fab fa-google text-xl"></i>
                                </a>
                                <a href="#" class="w-full flex items-center justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-500 hover:bg-gray-50 transition-colors">
                                    <i class="fab fa-facebook-f text-xl"></i>
                                </a>
                                <a href="#" class="w-full flex items-center justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-500 hover:bg-gray-50 transition-colors">
                                    <i class="fab fa-apple text-xl"></i>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
            <!-- Right side: Image -->
            <div class="w-full lg:w-7/12 hidden lg:block image-container" style="background-image: url('home/assets/img/imagepc.jpeg');">
                <div class="h-full flex flex-col justify-center items-center text-white p-12 relative z-10">
                    <div class="text-center max-w-lg fade-in-up" style="animation-delay: 0.7s;">
                        <h2 class="text-4xl font-bold mb-6">Transform Your Digital Experience</h2>
                        <p class="text-lg mb-8">Join IKIZEN and discover a new world of opportunities and innovations.</p>
                        <div class="pulse inline-block">
                            <span class="px-6 py-3 bg-white text-indigo-600 rounded-lg font-medium">Learn More</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-8 text-sm text-gray-500 fade-in-up" style="animation-delay: 1.8s;">
            &copy; 2023 IKIZEN. All rights reserved.
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.1/dist/gsap.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add hover effect to input fields
            const inputs = document.querySelectorAll('.form-input');
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.classList.add('ring-2', 'ring-indigo-200');
                });
                input.addEventListener('blur', function() {
                    this.parentElement.classList.remove('ring-2', 'ring-indigo-200');
                });
            });
            
            // Animate the form elements on page load
            gsap.from(".login-container", {
                opacity: 0,
                y: 30,
                duration: 1,
                ease: "power3.out"
            });
            
            // Add a little animation to the particles
            gsap.to(".particle", {
                opacity: 0.8,
                stagger: 0.2,
                repeat: -1,
                yoyo: true,
                duration: 2
            });
        });
    </script>
</body>
</html>
