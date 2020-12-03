<?php

$metaTitle = 'Chat';
require_once __DIR__ . '/components/head.php';
require_once __DIR__ . '/components/menu.php';
menu(true, true);
?>

<main class="chat-wrapper container" id="chat">
    <h1>Girls in black</h1>
    <section class="chat-list">
        <article class="chat-box">
            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=634&q=80"
                class="chat-box-left" />
            <div class="chat-box-mid">
                <p>
                    Kappa :)
                </p>
                <p>
                    How are you? Long time no
                    see!
                </p>
                <p class="chat-date-message sent">
                    Sent 24-10-2020
                </p>
            </div>
        </article>
        <article class="chat-box">
            <img src="https://images.unsplash.com/photo-1532074205216-d0e1f4b87368?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=681&q=80
" class="chat-box-right" />
            <div class="chat-box-mid own-message">
                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and
                more recently with desktop. It was popularised in the 1960s with the release of Letraset
                <p class="chat-date-message received">Received 25-10-2020</p>
            </div>
        </article>

        <article class="chat-box">
            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=634&q=80"
                class="chat-box-left" />
            <div class="chat-box-mid">
                <p>
                    Various versions have evolved over the years, sometimes by accident, sometimes on purpose
                    (injected
                    humour and the like).
                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                    passages,
                    and more recently with desktop
                </p>
                <p class="chat-date-message sent">Sent 26-10-2020</p>
            </div>
        </article>
        <form class="appear-transition">
            <button><i class="far fa-image"></i></button>
            <input type="text" placeholder="Type...">
            <button><i class="fas fa-paper-plane"></i></button>
        </form>
    </section>
</main>

<?php require_once __DIR__ . '/components/footer.php'?>