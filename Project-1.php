<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Networking Sites</title>
    <style>
        body {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
}

header {
  background-color: #007bff;
  color: #fff;
  padding: 20px;
}

.container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

/* Chat Window Styles */
.chat-window {
  width: 500px;
  background-color: #f0f0f0;
  border-radius: 8px;
  overflow: hidden;
}

.chat-area {
  height: 400px;
  overflow-y: scroll;
  padding: 20px;
}

.chat-messages {
  display: flex;
  flex-direction: column;
}

.message {
  margin-bottom: 10px;
  background-color: #fff;
  padding: 10px;
  border-radius: 4px;
}

.user-input {
  display: flex;
  align-items: center;
  padding: 20px;
  background-color: #fff;
}

#message-input {
  flex-grow: 1;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

#send-button {
  padding: 8px 16px;
  margin-left: 10px;
  background-color: #007bff;
  border: none;
  border-radius: 4px;
  color: #fff;
  cursor: pointer;
}

#send-button:hover {
  background-color: #0056b3;
}
    </style>
</head>
<body>
<header>
  <h1>Social Networking Sites</h1>
</header>
<div class="container">
  <div class="chat-window">
    <div class="chat-area">
      <div class="chat-messages">
      </div>
    </div>
    <div class="user-input">
      <button id="send-button">Send</button>
    </div>
  </div>
</div>
<script>
function sendMessage() {
  const messageInput = document.getElementById('message-input');
  const message = messageInput.value.trim();
  if (message !== '') {
    const chatMessages = document.querySelector('.chat-messages');
    const messageElement = document.createElement('div');
    messageElement.classList.add('message');
    messageElement.textContent = message;
    chatMessages.appendChild(messageElement);
    messageInput.value = '';
    chatMessages.scrollTop = chatMessages.scrollHeight;
  }
}
document.getElementById('send-button').addEventListener('click', sendMessage);
document.getElementById('message-input').addEventListener('keydown', (event) =&gt; {
  if (event.key === 'Enter') {
    event.preventDefault();
    sendMessage();
  }
});
</script>
</body>
</html>