if (document.getElementById('chat')) {
    (() => {
        const chatList = document.querySelector('.chat-list');
        const chatForm = document.querySelector('.chat-list form');

        window.addEventListener('DOMContentLoaded', function () {
            window.addEventListener('scroll', (e) => {
                window.innerHeight + window.pageYOffset >=
                document.body.offsetHeight
                    ? chatForm.classList.add('appear-transition')
                    : chatForm.classList.remove('appear-transition');
            });
        });

        chatForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const messageText = chatForm.querySelector('input').value;
            chatList.insertAdjacentHTML(
                'beforeend',
                renderMessage(messageText)
            );
            window.scrollTo(0, document.body.scrollHeight);
            chatForm.reset();
        });

        function renderMessage(val) {
            return `
                <div class="chat-box">
                        <img src="https://images.unsplash.com/photo-1532074205216-d0e1f4b87368?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=681&q=80" class="chat-box-right" />
                    <div class="chat-box-mid own-message">
                            ${val}
                        <p class="chat-date-message received">Just now...</p>
                    </div>
                </div>`;
        }
    })();
}
