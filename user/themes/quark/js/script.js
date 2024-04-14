function sendMessage() {
    var userInput = document.getElementById("user-input").value;
    var chatBox = document.getElementById("chat-box");

    // Create a new message element
    var messageElement = document.createElement("div");
    messageElement.textContent = userInput;
    messageElement.classList.add("message");

    // Append the new message element to the chat box
    chatBox.appendChild(messageElement);

    // Clear the user input field
    document.getElementById("user-input").value = "";

    // Scroll to the bottom of the chat box
    chatBox.scrollTop = chatBox.scrollHeight;
}
