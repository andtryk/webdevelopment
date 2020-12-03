<?php
require_once __DIR__ . '/components/head.php';
require_once __DIR__ . '/components/menu.php';
menu(true, true, true);
?>


<main id="explore">
    <section>
        <div data-id="hashtags" class="explore-subpage-btn">Hashtags</div>
        <div data-id="groups" class="explore-subpage-btn">Groups</div>
        <div data-id="people" class="explore-subpage-btn">People</div>
    </section>
    <?php // require_once __DIR__ . '/components/instagramModal.php';?>
    <?php require_once __DIR__ . '/components/explore-recent.php';?>
    <?php require_once __DIR__ . '/components/explore-hashtags.php';?>
    <?php require_once __DIR__ . '/components/explore-groups.php';?>
    <?php require_once __DIR__ . '/components/explore-people.php';?>

</main>

<?php require_once __DIR__ . '/components/footer.php';?>