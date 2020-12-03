<?php
require_once __DIR__ . '/components/liked-box.php';
$metaTitle = 'Liked today';
require_once __DIR__ . '/components/head.php';
require_once __DIR__ . '/components/menu.php';
menu(true, false);

?>

<main class="container" id="liked-overview">
    <h2>Posts liked today</h2>
    <article class="liked-overview-box">
        <div class="liked-overview-box-details">
            <p>#girlstyles</p>
            <p>Total likes: 22</p>
        </div>
        <div class="liked-overview-btn-wrapper">
            <a href="#">
                See all <i class="fas fa-angle-right"></i>
            </a>
        </div>
    </article>
    <h2>Posts liked yesterday</h2>
    <article class="liked-overview-box">
        <div class="liked-overview-box-details">
            <p>#girlstyles</p>
            <p>Total likes: 183</p>
        </div>
        <div class="liked-overview-btn-wrapper">
            <a href="#">
                See all <i class="fas fa-angle-right"></i>
            </a>
        </div>
    </article>
    <h2>Posts liked today</h2>
    <article class="liked-overview-box">
        <div class="liked-overview-box-details">
            <p>#girlstyles</p>
            <p>Total likes: 1833</p>
        </div>
        <div class="liked-overview-btn-wrapper">
            <a href="#">
                See all <i class="fas fa-angle-right"></i>
            </a>
        </div>
    </article>



</main>

<?php require_once __DIR__ . '/components/footer.php'?>