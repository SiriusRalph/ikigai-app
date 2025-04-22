<x-guest-layout>
    <div class="forgot-password-container">
        <div class="forgot-password-card">
            <div class="card-header">
                <div class="icon-container">
                    <div class="icon-circle">
                        <svg class="lock-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path fill="none" d="M0 0h24v24H0z"/>
                            <path d="M12 1C8.676 1 6 3.676 6 7v2H4v14h16V9h-2V7c0-3.324-2.676-6-6-6zm0 2c2.276 0 4 1.724 4 4v2H8V7c0-2.276 1.724-4 4-4zm-6 8h12v10H6V11z"/>
                        </svg>
                    </div>
                </div>
                <h1 class="title">{{ __('Reset Password') }}</h1>
                <p class="subtitle">{{ __('We will send you a link to reset your password') }}</p>
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="session-status" :status="session('status')" />

            <form method="POST" action="{{ route('password.email') }}" class="reset-form">
                @csrf

                <!-- Email Address -->
                <div class="form-group">
                    <label for="email" class="form-label">{{ __('Email Address') }}</label>
                    <div class="input-wrapper">
                        <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path fill="none" d="M0 0h24v24H0z"/>
                            <path d="M3 3h18a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm17 4.238l-7.928 7.1L4 7.216V19h16V7.238zM4.511 5l7.55 6.662L19.502 5H4.511z"/>
                        </svg>
                        <input id="email" class="form-input" type="email" name="email" value="{{ old('email') }}" required autofocus placeholder="Enter your email address" />
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="input-error" />
                </div>

                <div class="form-actions">
                    <button type="submit" class="reset-button">
                        <span class="button-text">{{ __('Send Reset Link') }}</span>
                        <svg class="button-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path fill="none" d="M0 0h24v24H0z"/>
                            <path d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"/>
                        </svg>
                    </button>
                </div>

                <div class="back-link-container">
                    <a href="{{ route('login') }}" class="back-link">
                        <svg class="back-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path fill="none" d="M0 0h24v24H0z"/>
                            <path d="M7.828 11H20v2H7.828l5.364 5.364-1.414 1.414L4 12l7.778-7.778 1.414 1.414z"/>
                        </svg>
                        <span>{{ __('Back to login') }}</span>
                    </a>
                </div>
            </form>

            <div class="card-footer">
                <div class="help-text">
                    {{ __('If you are having trouble, contact our support team') }}
                </div>
            </div>
        </div>

        <div class="animated-background">
            <div class="shape shape1"></div>
            <div class="shape shape2"></div>
            <div class="shape shape3"></div>
            <div class="shape shape4"></div>
        </div>
    </div>

    <style>
        /* Base Styles */
        :root {
            --primary-color: #4a6cf7;
            --primary-light: rgba(74, 108, 247, 0.1);
            --primary-dark: #3a56c5;
            --text-color: #2d3748;
            --text-light: #718096;
            --background-color: #f7fafc;
            --card-bg: #ffffff;
            --border-color: #e2e8f0;
            --error-color: #f56565;
            --success-color: #48bb78;
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            --shadow-xl: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background-color: var(--background-color);
            color: var(--text-color);
            line-height: 1.6;
        }

        /* Forgot Password Container */
        .forgot-password-container {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem;
            position: relative;
            overflow: hidden;
        }

        /* Forgot Password Card */
        .forgot-password-card {
            width: 100%;
            max-width: 450px;
            background-color: var(--card-bg);
            border-radius: 16px;
            box-shadow: var(--shadow-xl);
            overflow: hidden;
            position: relative;
            z-index: 10;
            transform: translateY(30px);
            opacity: 0;
            animation: cardFadeIn 0.8s forwards ease-out;
        }

        .card-header {
            text-align: center;
            padding: 2.5rem 2rem 1.5rem;
            position: relative;
        }

        .icon-container {
            margin-bottom: 1.5rem;
            display: flex;
            justify-content: center;
        }

        .icon-circle {
            width: 70px;
            height: 70px;
            background-color: var(--primary-light);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: pulseIcon 2s infinite ease-in-out;
        }

        .lock-icon {
            width: 32px;
            height: 32px;
            fill: var(--primary-color);
            animation: lockWiggle 6s infinite ease-in-out;
        }

        .title {
            font-size: 1.7rem;
            font-weight: 700;
            margin-bottom: 0.8rem;
            color: var(--text-color);
            animation: fadeInUp 0.5s 0.2s forwards;
            opacity: 0;
        }

        .subtitle {
            font-size: 1rem;
            color: var(--text-light);
            margin-bottom: 0.8rem;
            animation: fadeInUp 0.5s 0.3s forwards;
            opacity: 0;
        }

        .session-status {
            background-color: var(--success-color);
            color: white;
            padding: 1rem;
            margin: 0 2rem 1.5rem;
            border-radius: 8px;
            font-size: 0.9rem;
            animation: statusSlideIn 0.5s ease-out;
            max-height: 300px;
            transition: max-height 0.5s ease;
        }

        .session-status:empty {
            display: none;
        }

        .reset-form {
            padding: 0 2rem 2rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
            animation: fadeInUp 0.5s 0.4s forwards;
            opacity: 0;
        }

        .form-label {
            display: block;
            font-size: 0.9rem;
            font-weight: 500;
            margin-bottom: 0.5rem;
            color: var(--text-color);
        }

        .input-wrapper {
            position: relative;
        }

        .input-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            width: 20px;
            height: 20px;
            fill: var(--text-light);
            transition: all 0.3s ease;
        }

        .form-input {
            width: 100%;
            padding: 0.9rem 1rem 0.9rem 3rem;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            font-size: 1rem;
            color: var(--text-color);
            background-color: var(--card-bg);
            transition: all 0.3s ease;
        }

        .form-input:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px var(--primary-light);
        }

        .form-input:focus + .input-icon {
            fill: var(--primary-color);
        }

        .input-error {
            margin-top: 0.5rem;
            font-size: 0.85rem;
            color: var(--error-color);
            display: block;
            animation: errorShake 0.5s ease-in-out;
        }

        .form-actions {
            margin-top: 2rem;
            animation: fadeInUp 0.5s 0.5s forwards;
            opacity: 0;
        }

        .reset-button {
            width: 100%;
            padding: 1rem;
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .reset-button:hover {
            box-shadow: 0 7px 14px rgba(74, 108, 247, 0.25);
            transform: translateY(-2px);
        }

        .reset-button:active {
            transform: translateY(0);
            box-shadow: 0 3px 8px rgba(74, 108, 247, 0.2);
        }

        .reset-button::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 5px;
            height: 5px;
            background: rgba(255, 255, 255, 0.5);
            opacity: 0;
            border-radius: 100%;
            transform: scale(1, 1) translate(-50%);
            transform-origin: 50% 50%;
        }

        .reset-button:focus:not(:active)::after {
            animation: ripple 1s ease-out;
        }

        .button-text {
            margin-right: 0.75rem;
        }

        .button-icon {
            width: 18px;
            height: 18px;
            fill: white;
            transition: transform 0.3s ease;
        }

        .reset-button:hover .button-icon {
            transform: translateX(3px);
        }

        .back-link-container {
            text-align: center;
            margin-top: 1.5rem;
            animation: fadeInUp 0.5s 0.6s forwards;
            opacity: 0;
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            text-decoration: none;
            color: var(--text-light);
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }

        .back-link:hover {
            color: var(--primary-color);
        }

        .back-icon {
            width: 16px;
            height: 16px;
            fill: currentColor;
            margin-right: 0.5rem;
            transition: transform 0.3s ease;
        }

        .back-link:hover .back-icon {
            transform: translateX(-3px);
        }

        .card-footer {
            padding: 1.5rem 2rem;
            background-color: rgba(247, 250, 252, 0.5);
            border-top: 1px solid var(--border-color);
            text-align: center;
            animation: fadeInUp 0.5s 0.7s forwards;
            opacity: 0;
        }

        .help-text {
            font-size: 0.85rem;
            color: var(--text-light);
        }

        /* Animated Background */
        .animated-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            overflow: hidden;
        }

        .shape {
            position: absolute;
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            border-radius: 50%;
            opacity: 0.05;
            animation: float 15s infinite ease-in-out;
        }

        .shape1 {
            width: 300px;
            height: 300px;
            top: -150px;
            left: -150px;
            opacity: 0.05;
            animation-delay: 0s;
        }

        .shape2 {
            width: 500px;
            height: 500px;
            bottom: -250px;
            right: -250px;
            opacity: 0.07;
            animation-delay: 3s;
        }

        .shape3 {
            width: 200px;
            height: 200px;
            top: 10%;
            right: 10%;
            opacity: 0.04;
            animation-delay: 6s;
        }

        .shape4 {
            width: 400px;
            height: 400px;
            bottom: 10%;
            left: 5%;
            opacity: 0.06;
            animation-delay: 9s;
        }

        @keyframes cardFadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

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

        @keyframes pulseIcon {
            0% {
                transform: scale(1);
                box-shadow: 0 0 0 0 rgba(74, 108, 247, 0.3);
            }
            50% {
                transform: scale(1.05);
                box-shadow: 0 0 0 10px rgba(74, 108, 247, 0);
            }
            100% {
                transform: scale(1);
                box-shadow: 0 0 0 0 rgba(74, 108, 247, 0);
            }
        }

        @keyframes lockWiggle {
            0%, 100% {
                transform: rotate(0);
            }
            92% {
                transform: rotate(0);
            }
            94% {
                transform: rotate(-10deg);
            }
            96% {
                transform: rotate(10deg);
            }
            98% {
                transform: rotate(-5deg);
            }
        }

        @keyframes statusSlideIn {
            from {
                transform: translateY(-100%);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes errorShake {
            0%, 100% {
                transform: translateX(0);
            }
            10%, 30%, 50%, 70%, 90% {
                transform: translateX(-5px);
            }
            20%, 40%, 60%, 80% {
                transform: translateX(5px);
            }
        }

        @keyframes ripple {
            0% {
                transform: scale(0, 0);
                opacity: 0.5;
            }
            100% {
                transform: scale(20, 20);
                opacity: 0;
            }
        }

        @keyframes float {
            0% {
                transform: translateY(0) rotate(0deg);
            }
            50% {
                transform: translateY(-20px) rotate(5deg);
            }
            100% {
                transform: translateY(0) rotate(0deg);
            }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const formInput = document.querySelector('.form-input');
            
            formInput.addEventListener('focus', function() {
                this.parentElement.classList.add('input-focused');
            });
            
            formInput.addEventListener('blur', function() {
                if (!this.value) {
                    this.parentElement.classList.remove('input-focused');
                }
            });
            
            const resetButton = document.querySelector('.reset-button');
            
            resetButton.addEventListener('mousedown', function(e) {
                const x = e.clientX - this.getBoundingClientRect().left;
                const y = e.clientY - this.getBoundingClientRect().top;
                
                const ripple = document.createElement('span');
                ripple.classList.add('ripple');
                ripple.style.left = `${x}px`;
                ripple.style.top = `${y}px`;
                
                this.appendChild(ripple);
                
                setTimeout(() => {
                    ripple.remove();
                }, 600);
            });
        });
    </script>
</x-guest-layout>