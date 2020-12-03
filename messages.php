<?php
require_once __DIR__ . '/components/messageBox.php';
$metaTitle = 'Liked today';
require_once __DIR__ . '/components/head.php';
require_once __DIR__ . '/components/menu.php';
menu(true);

$messages = [
    [
        "https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=763&q=80", 'Fashionists', 'Something crazy just happ..', '21-12-2020',
    ],
    [
        "https://images.unsplash.com/photo-1507209696998-3c532be9b2b5?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=750&q=80", 'Office dudes', 'i just saw the most...', '21-12-2020',
    ],
    [
        "https://images.unsplash.com/photo-1520811328488-fa79a6e4c07f?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=934&q=80", 'Girls in black', 'What do you think of this t...', '20-12-2020',
    ],
    [
        "https://images.unsplash.com/photo-1552519507-da3b142c6e3d?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=750&q=80", 'Car lovers33', 'New tuned car!', '10-12-2020',
    ],
    [
        "https://images.unsplash.com/photo-1581253563647-3ebad3c2f559?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1022&q=80", 'Yoga people', 'Just found this new morni...', '10-11-2020',
    ],
]

?>

<main class="" id="messages">
    <h1>Messages</h1>

    <section class="messages-list">
        <?php foreach ($messages as $message) {
    messageBox(...$message);
}?>
    </section>



</main>

<?php require_once __DIR__ . '/components/footer.php'?>