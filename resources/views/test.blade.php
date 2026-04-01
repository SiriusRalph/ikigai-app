<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IKIZEN - Test</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @include('user.css')
    <style>
        body {
            font-family: sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        /* Container principal */
        #questionnaire-container {
            width: 600px;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            position: relative;
            overflow: hidden;
            z-index: 1;
            border: 1px solid rgba(255, 255, 255, 0.2);
            margin-top: 100px;
            border-radius: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 30px;
            text-align: center;
        }

        #questionnaire-container::before {
            content: '';
            position: absolute;
            top: -50px;
            left: -50px;
            width: 100px;
            height: 100px;
            background: linear-gradient(135deg, #1350b4 0%, #1350b4 100%);
            border-radius: 50%;
            z-index: -1;
            opacity: 0.5;
        }
        
        #questionnaire-container::after {
            content: '';
            position: absolute;
            bottom: -70px;
            right: -70px;
            width: 150px;
            height: 150px;
            background: linear-gradient(135deg, #f35526 0%, #ff8370 100%);
            border-radius: 50%;
            z-index: -1;
            opacity: 0.5;
        }

        /* Titres et descriptions */
        .title {
            color: #f35526;
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        .progress-container {
            width: 100%;
            height: 6px;
            background: linear-gradient(to right, rgba(243, 85, 38, 0.1), rgba(62, 157, 110, 0.1));
            border-radius: 10px;
            margin-bottom: 40px;
            margin-top: 0;
            overflow: hidden;
            position: relative;
        }

        .progress-bar {
            height: 100%;
            background: linear-gradient(to right, #f35526, #1350b4);
            border-radius: 10px;
            transition: width 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }
        
        .progress-bar::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(90deg, 
                         rgba(255,255,255,0) 0%, 
                         rgba(255,255,255,0.5) 50%, 
                         rgba(255,255,255,0) 100%);
            animation: shine 1.5s infinite;
            transform: translateX(-100%);
        }

        @keyframes shine {
            100% {
                transform: translateX(100%);
            }
        }

        .step-indicator {
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
            gap: 5px;
        }
        
        .step {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background-color: rgba(243, 85, 38, 0.3);
            transition: all 0.3s ease;
        }
        
        .step.active {
            background-color: #f35526;
            transform: scale(1.5);
        }

        /* Containers des questions */
        .question-container {
            margin-bottom: 20px;
            display: none; 
            transform: translateY(20px);
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            background-color: rgba(255, 255, 255, 0.7);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
            border: 1px solid rgba(243, 85, 38, 0.1);

        }
        .question-container::before {
            content: 'Q';
            position: absolute;
            top: -15px;
            left: -15px;
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #f35526 0%, #ff8370 100%);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            box-shadow: 0 4px 10px rgba(243, 85, 38, 0.3);
            font-size: 1.2em;
        }

        .question-container.active {
            display: block; 
            opacity: 1;
            transform: translateY(0);
            animation: fadeInQuestion 0.7s cubic-bezier(0.4, 0, 0.2, 1);
        }

        @keyframes fadeInQuestion {
            0% {
                opacity: 0;
                transform: translateY(20px) scale(0.95);
            }
            70% {
                transform: translateY(-5px) scale(1.02);
            }
            100% {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }


        .question-container label {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
        }

        /* Styles pour les inputs */
        .input-text,
        .input-select,
        .input-radio {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }
        .input-text:focus{
            outline-color: #f35526;
        }

        .input-radio {
            width: auto;
            margin-right: 5px;
        }

        /* Groupes de radio */
        .radio-group {
            text-align: left;
        }

        /* Boutons */
        .btn-submit {
            background-color: #3e9d6e;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
        }

        .btn-submit:hover {
            background-color: #4cae4ccc;
        }

        .btn-navigation {
            background-color: #1350B4;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            margin: 10px;
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(19, 80, 180, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;

        }

        .btn-navigation:hover {
            background-color: #007bff;
        }

        .navigation-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    @include('user.menu')
    <div id="questionnaire-container">
        <div class="decoration decoration-1"></div>
        <div class="decoration decoration-2"></div>
        <div class="decoration decoration-3"></div>

        <h1 class="title">IKIZEN</h1>
        <p class="">Help us match you to the right coach.</p>
        <p class="">Consultants will be ranked by score.</p>

        <div class="progress-container">
            <div class="progress-bar" style="width: 0%"></div>
        </div>

        <div class="step-indicator">
            @foreach($questions as $index => $question)
                <div class="step {{ $index == 0 ? 'active' : '' }}" data-step="{{ $index }}"></div>
            @endforeach
        </div>

        <form action="{{ route('recommend') }}" method="POST" id="questionnaire-form">
            @csrf
            @foreach($questions as $index => $question)
                <div class="question-container {{ $index == 0 ? 'active' : '' }}" data-question-index="{{ $index }}">
                    <label for="question-{{ $question->id }}">{{ $question->question }}</label>
                    @if($question->type == 'text')
                        <input type="text" name="answers[{{ $question->id }}]" id="question-{{ $question->id }}" class="input-text" required>
                    @elseif($question->type == 'select')
                        <select name="answers[{{ $question->id }}]" id="question-{{ $question->id }}" class="input-select" required>
                            @foreach($question->options as $option)
                                <option value="{{ $option }}">{{ $option }}</option>
                            @endforeach
                        </select>
                    @elseif($question->type == 'radio')
                        <div class="radio-group">
                            @foreach($question->options as $option)
                                <label for="question-{{ $question->id }}-{{ $option }}">
                                    <input type="radio" name="answers[{{ $question->id }}]" value="{{ $option }}" id="question-{{ $question->id }}-{{ $option }}" class="input-radio" required>
                                    {{ $option }}
                                </label>
                            @endforeach
                        </div>
                    @endif
                </div>
            @endforeach
            <div class="navigation-buttons">
                <button type="button" class="btn-navigation" id="prev-question"><i class="me-2 fas fa-arrow-left"></i> Previous</button>
                <button type="button" class="btn-navigation" id="next-question">Next<i class="ms-2 fas fa-arrow-right"></i></button>
            </div>
            <button type="submit" class="btn-submit" id="submit-button" style="display: none;"><i class="fas fa-paper-plane"></i> Submit Test</button>
        </form>
    </div>

    @include('user.script')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const totalQuestions = {{ count($questions) }};
            let currentQuestionIndex = 0;

            const questionContainers = document.querySelectorAll('.question-container');
            const stepIndicators = document.querySelectorAll('.step');
            const progressBar = document.querySelector('.progress-bar');

            const prevButton = document.getElementById('prev-question');
            const nextButton = document.getElementById('next-question');
            const submitButton = document.getElementById('submit-button');

            function showQuestion(index) {
                questionContainers.forEach((container, i) => {
                    container.classList.toggle('active', i === index);
                });

                stepIndicators.forEach((step, i) => {
                    step.classList.toggle('active', i === index);
                });

                prevButton.style.display = index === 0 ? 'none' : 'flex';
                nextButton.style.display = index === totalQuestions - 1 ? 'none' : 'flex';
                submitButton.style.display = index === totalQuestions - 1 ? 'inline-block' : 'none';

                const progress = ((index + 1) / totalQuestions) * 100;
                progressBar.style.width = progress + '%';
                
                setTimeout(() => {
                    document.querySelector('.question-container.active').classList.add('animated');
                }, 10);
            }

            prevButton.addEventListener('click', function () {
                if (currentQuestionIndex > 0) {
                    currentQuestionIndex--;
                    showQuestion(currentQuestionIndex);
                }
            });

            nextButton.addEventListener('click', function () {
                if (currentQuestionIndex < totalQuestions - 1) {
                    currentQuestionIndex++;
                    showQuestion(currentQuestionIndex);
                }
            });

            setTimeout(() => {
                document.getElementById('questionnaire-container').style.opacity = 1;
                document.getElementById('questionnaire-container').style.transform = 'translateY(0)';
            }, 200);

            prevButton.style.display = 'none';
            showQuestion(0);
        });
    </script>
    <script src="//code.tidio.co/ezckblutrreap5ryuccizocwkfafx453.js" async></script>

    <script type="text/javascript" src="https://cdn.weglot.com/weglot.min.js"></script>
    <script>
        Weglot.initialize({
            api_key: 'wg_f046143884ddc4609603fcad0408ce432'
        });
    </script>

    <script type="text/javascript" src="https://cdn.weglot.com/weglot.min.js"></script>
    <script>
        Weglot.initialize({
            api_key: 'wg_795455906f46076b7d3ac2c832807b665'
        });
    </script>
</body>
</html>
