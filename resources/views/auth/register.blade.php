<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IKIZEN - Register</title>
  <link rel="icon" type="image/png" href="dashboard/assets/img/favicon.png">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.0/css/all.min.css">
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js"></script>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #f5f7fa;
      overflow-x: hidden;
    }
    .bg-gradient {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }
    .form-input {
      transition: all 0.3s;
      border: 1px solid #e2e8f0;
      padding: 0.75rem 1rem;
      border-radius: 0.5rem;
      background-color: #fff;
      width: 100%;
    }
    .form-input:focus {
      border-color: #667eea;
      box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
      outline: none;
    }
    .btn-primary {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      transition: all 0.3s;
    }
    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 7px 14px rgba(50, 50, 93, 0.1), 0 3px 6px rgba(0, 0, 0, 0.08);
    }
    .input-group {
      position: relative;
    }
    .input-icon {
      position: absolute;
      top: 50%;
      left: 1rem;
      transform: translateY(-50%);
      color: #a0aec0;
    }
    .input-with-icon {
      padding-left: 2.75rem;
    }
    .animate-float {
      animation: float 6s ease-in-out infinite;
    }
    @keyframes float {
      0% { transform: translateY(0px); }
      50% { transform: translateY(-20px); }
      100% { transform: translateY(0px); }
    }
    .text-gradient {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
    .glass-effect {
      backdrop-filter: blur(10px);
      background-color: rgba(255, 255, 255, 0.8);
      border: 1px solid rgba(255, 255, 255, 0.2);
      box-shadow: 0 8px 32px rgba(31, 38, 135, 0.15);
    }
    .register-shape-1 {
      position: absolute;
      top: -150px;
      right: -150px;
      width: 300px;
      height: 300px;
      border-radius: 50%;
      background: linear-gradient(to right, #4facfe 0%, #00f2fe 100%);
      opacity: 0.2;
      filter: blur(30px);
      z-index: 0;
    }
    .register-shape-2 {
      position: absolute;
      bottom: -150px;
      left: -150px;
      width: 300px;
      height: 300px;
      border-radius: 50%;
      background: linear-gradient(to right, #43e97b 0%, #38f9d7 100%);
      opacity: 0.2;
      filter: blur(30px);
      z-index: 0;
    }
    .form-checkbox {
      cursor: pointer;
      width: 1rem;
      height: 1rem;
      transition: all 0.3s;
      border: 2px solid #d1d5db;
      border-radius: 0.25rem;
    }
    .form-checkbox:checked {
      border-color: #667eea;
      background-color: #667eea;
    }
    .form-checkbox:focus {
      outline: none;
      box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.2);
    }
  </style>
</head>
<body>
  <div class="register-shape-1"></div>
  <div class="register-shape-2"></div>

  <div class="min-h-screen flex flex-col lg:flex-row">
    <!-- Left Section (Brand) -->
    <div class="lg:w-1/2 bg-gradient text-white flex items-center justify-center p-10 relative overflow-hidden">
      <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-full h-full bg-pattern"></div>
      </div>
      
      <div class="relative z-10 text-center max-w-lg">
        <a href="/" class="flex justify-center mb-8">
          <img src="home/assets/img/1-removebg-preview.png" class="h-24 animate-float" alt="IKIZEN Logo">
        </a>
        
        <h1 class="text-4xl font-bold mb-6">Join Our Community</h1>
        <p class="text-xl opacity-80 mb-8">Create an account and start your journey with IKIZEN's powerful platform.</p>
        
        <div class="flex justify-center space-x-4 mt-12">
          <div class="bg-white bg-opacity-20 p-6 rounded-lg text-center w-32">
            <i class="fas fa-shield-alt text-2xl mb-2"></i>
            <p class="text-sm">Secure</p>
          </div>
          <div class="bg-white bg-opacity-20 p-6 rounded-lg text-center w-32">
            <i class="fas fa-bolt text-2xl mb-2"></i>
            <p class="text-sm">Fast</p>
          </div>
          <div class="bg-white bg-opacity-20 p-6 rounded-lg text-center w-32">
            <i class="fas fa-sync-alt text-2xl mb-2"></i>
            <p class="text-sm">Reliable</p>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Right Section (Form) -->
    <div class="lg:w-1/2 flex items-center justify-center p-6 lg:p-10">
      <div class="w-full max-w-md glass-effect rounded-2xl p-8 relative z-10">
        <div class="text-center mb-8">
          <h2 class="text-3xl font-bold text-gray-800">Create Account</h2>
          <p class="text-gray-500 mt-2">Fill in your details to register</p>
        </div>
        
        <form method="POST" action="{{ route('register') }}" class="space-y-6">
          @csrf
          
          <!-- Name -->
          <div class="input-group">
            <span class="input-icon">
              <i class="fas fa-user"></i>
            </span>
            <input type="text" id="name" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Full Name" class="form-input input-with-icon">
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
          </div>
          
          <!-- Email -->
          <div class="input-group">
            <span class="input-icon">
              <i class="fas fa-envelope"></i>
            </span>
            <input type="email" id="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Email Address" class="form-input input-with-icon">
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
          </div>
          
          <!-- Password -->
          <div class="input-group">
            <span class="input-icon">
              <i class="fas fa-lock"></i>
            </span>
            <input type="password" id="password" name="password" required autocomplete="new-password" placeholder="Password" class="form-input input-with-icon">
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
          </div>
          
          <!-- Confirm Password -->
          <div class="input-group">
            <span class="input-icon">
              <i class="fas fa-lock"></i>
            </span>
            <input type="password" id="password_confirmation" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" class="form-input input-with-icon">
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
          </div>
          
          <!-- Terms -->
          <div class="flex items-center">
            <input type="checkbox" id="terms" class="form-checkbox mr-2" required>
            <label for="terms" class="text-sm text-gray-600">
              I agree to the <a href="javascript:;" class="text-gradient font-medium">Terms and Conditions</a>
            </label>
          </div>
          
          <!-- Submit Button -->
          <button type="submit" class="btn-primary w-full py-3 text-white font-medium rounded-lg">
            Create Account
          </button>
        </form>
        
        <!-- Sign In Link -->
        <p class="mt-8 text-center text-gray-600 text-sm">
          Already have an account? <a href="{{ route('login') }}" class="text-gradient font-medium">Sign in</a>
        </p>
      </div>
    </div>
  </div>
  
  <script>
    // Initialize animations when the page loads
    document.addEventListener('DOMContentLoaded', () => {
      gsap.from(".glass-effect", {
        duration: 1,
        y: 30,
        opacity: 0,
        ease: "power3.out"
      });
      
      gsap.from(".input-group", {
        duration: 0.6,
        y: 20,
        opacity: 0,
        stagger: 0.1,
        ease: "power3.out",
        delay: 0.3
      });
      
      // Enhance input fields
      const inputs = document.querySelectorAll('.form-input');
      inputs.forEach(input => {
        input.addEventListener('focus', () => {
          input.closest('.input-group').querySelector('.input-icon').style.color = '#667eea';
        });
        
        input.addEventListener('blur', () => {
          input.closest('.input-group').querySelector('.input-icon').style.color = '#a0aec0';
        });
      });
    });
  </script>
</body>
</html>
