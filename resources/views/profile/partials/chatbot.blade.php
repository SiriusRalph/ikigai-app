<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot</title>
    <style>

        .chat-container {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            z-index: 1000;
        }

        .chat-button {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            z-index: 1001;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .chat-button img {
            width: 40px;
            border-radius: 50%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .chat-box {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            width: 320px;
            height: 500px;
            background: #fefefe;
            border: 1px solid #1350B4;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            transform: translateX(100%);
            transition: transform 0.4s ease;
            z-index: 1000;
        }

        .chat-box.open {
            transform: translateX(0);
        }

        .user-message {
            background-color: #1350B4;
            color: white;
            align-self: flex-end;
            margin-left: 30%;
        }

        .bot-message {
            background-color: #f0f0f0;
            color: #333;
            align-self: flex-start;
            margin-right: 30%;
        }

        .chat-messages {
            overflow-y: auto;
            padding: 1rem;
            height: calc(100% - 100px);
        }

        .chat-message {
            padding: 10px;
            margin: 10px;
            border-radius: 10px;
            width: 70%;
            word-wrap: break-word;
        }

        .input {
            display: flex;
            align-items: center;
            padding: 0.75rem;
            border-top: 1px solid #494545;
        }

        .input input[type="text"] {
            flex: 1;
            padding: 0.75rem;
            border: none;
            border-radius: 1.25rem;
            background-color: #f0f0f0;
            margin-right: 0.75rem;
            font-family: 'Red hat Display', sans-serif;
            font-size: 0.9rem;
            color: #000;
        }


        .close-button {
            position: absolute;
            top: 0.5rem;
            right: 0.5rem;
            cursor: pointer;
            color: #333;
        }

        #chat-form {
            padding-left: 20px;
            background-color: #f5F5F5;
            padding-top: 5px;
        }

        #user-input {
            border-radius: 50px;
            border: solid 1px #d17979;
            padding: 6px;
            color: #000;
        }

        #user-input:focus {
            outline-color: #fe7534;
        }
        .bouton{
            border-radius: 40px !important;
            padding: 7px !important;
            background-color: #fe7534;
            border: none;
            width: 70px
        }
        .bouton:hover{
            background-color: #ff9f43;
        }
        .footer{
            text-align: center;
            padding: 13px;
            background-color: #f5F5F5;

        }
        .footer h6{
            font-size: 11px;
            line-height: 10px;
            color: #333
        }


    </style>
</head>
<body>

<div class="center">
    <div class="chat-container">
        <div class="chat-button" id="chat-button">
            <img src="/dashboard/assets/img/icone_ikigai-removebg-preview.png" alt="Chat Icon">
        </div>

        <div class="chat-box" id="chat-box">
            <div id="chat-messages" class="chat-messages">
            </div>
            <form id="chat-form" action="{{ route('chat.response') }}" method="POST">
                @csrf
                <input type="text" name="query" id="user-input" placeholder="Type your message here..." required>
                <button type="submit" class="bouton">Send</button>
            </form>
            <div class="close-button" id="close-button">
                <span>&times;</span>
            </div>

            <div class="footer">
                <h6>IkizenBot</h6>
                <h6>Powered by <a href="{{route('accueil')}}">Ikizen OS</a></h6>
            </div>
        </div>
    </div>
</div>

<script>
// public/js/chatbot.js

document.addEventListener('DOMContentLoaded', function() {
    var chatButton = document.getElementById('chat-button');
    var chatBox = document.getElementById('chat-box');
    var closeButton = document.getElementById('close-button');
    var chatForm = document.getElementById('chat-form');
    var userInput = document.getElementById('user-input');
    var chatMessages = document.getElementById('chat-messages');

    chatButton.addEventListener('click', function() {
        chatBox.classList.add('open');
        chatButton.style.display = 'none'; // Masquer l'icône du chatbot
    });

    closeButton.addEventListener('click', function() {
        chatBox.classList.remove('open');
        chatButton.style.display = 'block'; // Afficher l'icône du chatbot
    });

    chatForm.addEventListener('submit', function(event) {
        event.preventDefault();
        var formData = new FormData(chatForm);
        var userMessage = userInput.value.trim();

        if (userMessage !== '') {
            appendMessage('user', userMessage);

            fetch(chatForm.action, {
                method: chatForm.method,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                appendMessage('bot', data.response);
            })
            .catch(error => console.error('Error:', error));

            userInput.value = '';
        }
    });

    function appendMessage(sender, message) {
        var messageElem = document.createElement('div');
        messageElem.className = 'chat-message';
        messageElem.textContent = message;

        if (sender === 'user') {
            messageElem.classList.add('user-message');
        } else if (sender === 'bot') {
            messageElem.classList.add('bot-message');
        }

        chatMessages.appendChild(messageElem);
        chatMessages.scrollTop = chatMessages.scrollHeight;
    }
});
</script>

</body>
</html>
