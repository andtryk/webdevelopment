<?php
require_once __DIR__ . '/components/head.php';
require_once __DIR__ . '/components/hashtag-group-person.php';
require_once __DIR__ . '/components/menu.php';
menu(true);
?>

<main class="profile">
    <section class="profile-image-wrapper">
        <article class="profile-image-box">
            <img
                src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80">
            <i class="fas fa-camera"></i>
        </article>
        <label>Change profile image</label>
    </section>

    <section class="profile-details-wrapper">

        <article class="profile-detail">
            <p>Your name</p>
            <input type="text" value="Your name" class="hidden">
            <button class="profile-edit"><i class="fas fa-pen"></i></button>
        </article>

        <article class="profile-detail">
            <p>your_username_123</p>
            <input type="text" value="your_username_123" class="hidden">
            <button class="profile-edit"><i class="fas fa-pen"></i></button>
        </article>

        <article class="profile-detail">
            <p>youremail@gmail.com</p>
            <input type="text" value="youremail@gmail.com" class="hidden">
            <button class="profile-edit"><i class="fas fa-pen"></i></button>
        </article>

        <article class="profile-detail">
            <p class="profile-detail-password">goodPassword123!</p>
            <input type="text" value="goodPassword123!" class="hidden" id="password-input">
            <div>
                <button class="display-password">
                    <i class="fas fa-eye"></i>
                </button>
                <button class="profile-edit" id="password-edit">
                    <i class="fas fa-pen"></i>
                </button>
            </div>
        </article>

    </section>
    <section class="profile-navigation">
        <a href="/subscriptions.php">Subscriptions</a>
        <a href="/automations.php">Automations</a>
    </section>
</main>
<?php require_once __DIR__ . '/components/footer.php'?>