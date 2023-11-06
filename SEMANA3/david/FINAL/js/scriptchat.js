const chatbox = document.getElementById("chat-box");
const textinput = document.getElementById("text");
const submit = document.getElementById("submit")

submit.addEventListener('click', sendMessage);

textinput.addEventListener('keydown', function (event) {
    if (event.key === "Enter") {
        sendMessage();
    }
});

function sendMessage() {
    const message = textinput.value;
    if (message.trim() !== '') {
        const container = document.createElement('div');
        container.className = 'message-container';
        chatbox.appendChild(container);

        const img = document.createElement('img');
        img.className = 'perfil';
        img.src = 'img/porfile.png';
        container.appendChild(img);

        const messageElement = document.createElement('span');
        messageElement.className = 'message';
        messageElement.textContent = message;
        container.appendChild(messageElement);

        const autor = document.createElement('p');
        autor.className = 'autor';
        autor.textContent = 'grup5';
        container.appendChild(autor);
        
        textinput.value = '';
    }
}