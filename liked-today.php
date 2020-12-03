<?php
require_once __DIR__ . '/components/liked-box.php';
$metaTitle = 'Liked today';
require_once __DIR__ . '/components/head.php';
require_once __DIR__ . '/components/menu.php';
menu(true, false);

$likes = [
    ["https://images.unsplash.com/photo-1529092419721-e78fb7bddfb2?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=964&q=80", 'CHpa8', 'Kappaprida', '5'],
    ["https://images.unsplash.com/photo-1526313199968-70e399ffe791?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1050&q=80
", 'Exa3q', 'xxx333.com', '5'],
    ["https://images.unsplash.com/photo-1505934000979-29ddff379cf7?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1050&q=80
", 'Bydx03', 'birdGuy13', '5'],
]
?>

<main class="container" id="liked-posts">
    <h1>Posts liked today</h1>
    <section class="liked-today-boxes-wrapper">
        <?php
foreach ($likes as $like) {
    likedBox(...$like);
}
?>
    </section>
    <div class="liked-today-unlike-wrapper">
        <button id="unlike-selected-btn">Unlike Selected</button>
    </div>

</main>

<?php require_once __DIR__ . '/components/footer.php'?>