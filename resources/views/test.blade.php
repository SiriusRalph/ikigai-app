<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IKIGAI - Questionnaire</title>
    @include('user.css')
    <style>
        /* Styles généraux */
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
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 30px;
            text-align: center;
        }

        /* Titres et descriptions */
        .title {
            color: #f35526;
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        .description {
            color: #555;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        /* Containers des questions */
        .question-container {
            margin-bottom: 20px;
            display: none; 
        }

        .question-container.active {
            display: block; 
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
        <h1 class="title">IKIGAI</h1>
        <p class="description">Help us match you to the right coach.</p>
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
                <button type="button" class="btn-navigation" id="prev-question">Previous</button>
                <button type="button" class="btn-navigation" id="next-question">Next</button>
            </div>
            <button type="submit" class="btn-submit" id="submit-button" style="display: none;">Submit Test</button>
        </form>
    </div>

    @include('user.script')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const totalQuestions = {{ count($questions) }};
            let currentQuestionIndex = 0;

            const questionContainers = document.querySelectorAll('.question-container');
            const prevButton = document.getElementById('prev-question');
            const nextButton = document.getElementById('next-question');
            const submitButton = document.getElementById('submit-button');

            function showQuestion(index) {
                questionContainers.forEach((container, i) => {
                    container.classList.toggle('active', i === index);
                });

                prevButton.style.display = index === 0 ? 'none' : 'inline-block';
                nextButton.style.display = index === totalQuestions - 1 ? 'none' : 'inline-block';
                submitButton.style.display = index === totalQuestions - 1 ? 'inline-block' : 'none';
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

            // Masquer le bouton précédent par défaut
            prevButton.style.display = 'none';
        });
    </script>
</body>
</html>
