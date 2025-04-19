    const minim_chat = () => {
    };

    const close_chat = () =>  {
        const chatbox = document.querySelector('.chatbox');
        const chatboxBubble = document.querySelector('.chatbox-bubble');
        chatbox.style.display = chatbox.style.display === 'none' || chatbox.style.display === '' ? 'block' : 'none';
        chatboxBubble.style.display = chatboxBubble.style.display === 'flex' || chatboxBubble.style.display === '' ? 'none' : 'flex';
    };
    const open_chat = (el) => { 
        const chatbox = document.querySelector('.chatbox');
        chatbox.style.display = chatbox.style.display === 'none' || chatbox.style.display === '' ? 'block' : 'none';
        el.style.display = el.style.display === 'flex' || el.style.display === '' ? 'none' : 'flex';
    };
    const sendMessage = () => {
    const input = document.getElementById('chatbox-input');
    const message = input.value;
    if (message.trim() === '') return;
    //const context = main_Object.events;
    const currentMonth = new Date().getMonth() + 1; // get the current month (1-12)
      const filteredEvents = main_Object.events.filter((event) => {
        return event.eventMonth === currentMonth.toString().padStart(2, '0') && event.locationTag === 'RSC Jarun';;
      });
    const messagesDiv = document.getElementById('chatbox-messages');
    const userMessage = document.createElement('div');
    userMessage.classList.add('userMessage');
    userMessage.textContent = 'You: ' + message;
    messagesDiv.appendChild(userMessage);
    input.value = '';
    fetch('functions/chat.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
        body: JSON.stringify({
        message: message,
        context: filteredEvents
      })
    })
    .then(response => response.json())
    .then(data => {
      const botMessage = document.createElement('div');
      botMessage.textContent = 'Bot: ' + data.response;
      messagesDiv.appendChild(botMessage);
    })
    .catch(error => console.error('Error:', error));
  }