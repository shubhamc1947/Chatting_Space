<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat App Demo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        #chat-container {
            max-width: 400px;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        #message-container {
            height: 300px;
            overflow-y: auto;
            padding: 20px;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
        }

        #input-container {
            padding: 10px;
            box-sizing: border-box;
            display: flex;
            align-items: center;
            background-color: #f0f0f0;
        }

        #message-input {
            flex: 1;
            padding: 8px;
            border: none;
            border-radius: 4px;
            margin-right: 10px;
        }

        #send-button {
            padding: 8px 15px;
            border: none;
            border-radius: 4px;
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
        }

        .message {
            padding: 8px;
            margin-bottom: 10px;
            border-radius: 4px;
        }

        .sent {
            background-color: #e1f5fe;
            align-self: flex-end;
        }

        .received {
            background-color: #f0f0f0;
            align-self: flex-start;
        }
    </style>
</head>
<body>
    <div id="chat-container">
        <div id="message-container"></div>
        <div id="input-container">
            <input type="text" id="message-input" placeholder="Type your message...">
            <button id="send-button" onclick="sendMessage()">Send</button>
        </div>
    </div>

    <script>
        function sendMessage() {
            var messageInput = document.getElementById('message-input');
            var messageContainer = document.getElementById('message-container');

            var messageText = messageInput.value.trim();
            if (messageText !== '') {
                var messageDiv = document.createElement('div');
                messageDiv.className = 'message sent';
                messageDiv.textContent = messageText;

                messageContainer.appendChild(messageDiv);

                // Clear the input field
                messageInput.value = '';

                // Simulate receiving a message after a delay
                setTimeout(function() {
                    var receivedMessageDiv = document.createElement('div');
                    receivedMessageDiv.className = 'message received';
                    receivedMessageDiv.textContent = 'Thanks for your message!';

                    messageContainer.appendChild(receivedMessageDiv);

                    // Scroll to the bottom to show the latest message
                    messageContainer.scrollTop = messageContainer.scrollHeight;
                }, 1000);
            }
        }
    </script>
</body>
</html>
