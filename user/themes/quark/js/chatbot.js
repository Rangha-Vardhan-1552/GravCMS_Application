
    //Popup container
    document.addEventListener('DOMContentLoaded', function() {
        const chatbotTriggerBtn = document.getElementById('chatbot-trigger-btn');
        const chatbotPopup = document.getElementById('chatbot-popup');

        chatbotTriggerBtn.addEventListener('click', function() {
            if (chatbotPopup.style.display === 'none') {
                chatbotPopup.style.display = 'block';
            } else {
                chatbotPopup.style.display = 'none';
            }
        });
    });


    document.addEventListener('DOMContentLoaded', function() {
    const chatContainer = document.getElementById('chat-container');
    const typingIndicator = document.getElementById('typing-indicator');
    const messageInput = document.getElementById('message-input');

    function addMessage(message, isUser = false) {
    // Remove "\n" at the end of each sentence
    // message = message.replace(/\n\s*/g, ' ');

    const messageElement = document.createElement('div');
    messageElement.classList.add('message', isUser ? 'user' : 'bot');
    chatContainer.appendChild(messageElement);
    chatContainer.scrollTop = chatContainer.scrollHeight; // Scroll to bottom

    const words = message.split(' ');
    let index = 0;

    const typingInterval = setInterval(() => {
        if (index < words.length) {
            if (isUser === true) {
                messageElement.innerText =message.replace(/\n/g, ' ');
            } else {
                messageElement.innerText += (index === 0 ? '' : ' ') + words[index];
                index++;
            }
            
        } else {
            clearInterval(typingInterval);
        }
    }, 200); // Adjust typing speed as needed
}


    function showTypingIndicator() {
        typingIndicator.style.display = 'block';
    }

    function hideTypingIndicator() {
        typingIndicator.style.display = 'none';
    }

    document.getElementById('chat-form').addEventListener('submit', function(event) {
        event.preventDefault();
        const message = messageInput.value.trim();
        if (message === '') return;

        addMessage(`You: ${message}`, true);
        showTypingIndicator();
        setTimeout(sendMessageToChatbot, 1000, message);
        messageInput.value = '';
    });

    function sendMessageToChatbot(message) {
        const api_url = '{{ config.plugins.chatbot.api_url }}';
        const apiUrl = `${api_url}?message=${message}`;

        fetch(apiUrl, {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json'
            },
            // body: JSON.stringify({ input: message })
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
        //    console.log(response.body);
            return response.body;
        })

        .then(stream => {
            // console.log("stream",stream)
            // const streamReplay=stream.reply
            const decoder = new TextDecoder();
            const reader = stream.getReader();
            let messageBuffer = '';

            function read() {
                reader.read().then(({ done, value }) => {
                    if (done) {
                        if (messageBuffer) {
                            addMessage(messageBuffer);
                        }
                        hideTypingIndicator();
                        return;
                    }
                    const text = decoder.decode(value, { stream: true });
                    messageBuffer += text;
                    // Update the UI with the latest chunk of message
                    addMessage(messageBuffer);
                    // Clear the buffer to avoid duplicate messages
                    messageBuffer = '';
                    read();
                }).catch(error => {
                    console.error('Error reading stream:', error);
                });
            }
            read();
        })
        .catch(error => {
            hideTypingIndicator();
            addMessage('Bot: Sorry, an error occurred while fetching the response');
            console.error('Error:', error);
        });
    }

    });


