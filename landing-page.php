<?php
require_once __DIR__ . '/components/head.php';
require_once __DIR__ . '/components/hashtag-group-person.php';
require_once __DIR__ . '/components/menu.php';
menu(true, true, false);
?>



<main class="landing-main">
    <section>
        <h2>Suggested hashtags</h2>
        <?php

hashtagGroupPerson(true, false, false, [
    ['name' => 'fashionweek', 'members' => '103.213', 'img' => 'https://pbs.twimg.com/profile_images/1301935188684025856/81FCoiJ2_400x400.jpg'],
    ['name' => 'streetfashion', 'members' => '68.074', 'img' => 'https://pbs.twimg.com/profile_images/1278121753554964480/e_Fcl_4q_400x400.jpg'],
    ['name' => 'style', 'members' => '293.951', 'img' => 'https://pbs.twimg.com/profile_images/1088438336488947712/Tvqi6h0A_400x400.jpg'],
])
?>

    </section>

    <section class="landing-messages">
        <h2>New messages</h2>
        <div>
            <a href="chat.php">
                <img src="https://pbs.twimg.com/profile_images/1080545769034108928/CEzHCTpI_400x400.jpg"
                    alt="image of @catLover999">
                <div>
                    <p>@catLover999</p>
                    <p>So I got this new cat</p>
                </div>
            </a>
            <a href="chat.php">
                <img src="https://pbs.twimg.com/profile_images/1313275994086666241/ImnByxjW_400x400.jpg"
                    alt="image of @staartingsoon">
                <div>
                    <p>@staartingsoon</p>
                    <p>How are you long time no s...</p>
                </div>
            </a>
            <a href="chat.php">
                <img src="https://pbs.twimg.com/profile_images/1027113206605643776/YOZiaA9u_400x400.jpg"
                    alt="image of @FashionNova:">
                <div>
                    <p>@FashionNova</p>
                    <p>OMG *Queen*!!👑👏</p>
                </div>
                </a">
        </div>
        <a class="landing-btn" href="message.php">See all<i class="fas fa-angle-right"></i></a>
    </section>

    <section class="landing-messages">
        <h2>Automation status</h2>
        <div>
            <a href="automations.php">
                <div>
                    <p>All new posts in #cats were successfully liked</p>
                    <p>Likes: 22</p>
                </div>
            </a>
            <a href="automations.php">
                <div>
                    <p>Encountered an error when liking #monkaS.</p>
                    <p>Trying again in 19 minutes</p>
                </div>
            </a>
            <a href="automations.php">
                <div>
                    <p>All new posts in #cats were successfully liked</p>
                    <p>Likes: 31</p>
                </div>
            </a>
        </div>
        <a class="landing-btn" href="messages.php">Manage<i class="fas fa-angle-right"></i></a>
    </section>
</main>

<?php require_once __DIR__ . '/components/footer.php';?>