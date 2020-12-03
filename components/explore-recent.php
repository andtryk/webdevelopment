<?php
require_once __DIR__ . '/hashtag-group-person.php';
?>

<div id="explore-recent">
        <section>
            <h2>Recent</h2>
            <?php
                hashtagGroupPerson(false, true, false, [
                    ['name'=>'Fun group', 'members'=>'7.501', 'description'=>'Fun group for fun people', 'img'=>'https://pbs.twimg.com/profile_images/1317598023032074241/wspprjSM_400x400.jpg']
                ]);
            ?>
        </section>

        <section>
            <h2>Suggested</h2>
            <?php
                hashtagGroupPerson(false, true, false, [
                    ['name'=>'Car group', 'members'=>'231', 'description'=>'Crazy car group', 'img'=>'https://pbs.twimg.com/profile_images/1319286075974545408/svZerS-Y_400x400.jpg']
                ]);

                hashtagGroupPerson(true, false, false, [
                    ['name'=>'girlstyles', 'members'=>'10.624', 'img'=>'https://pbs.twimg.com/profile_images/1329803181673435137/FEtlnfqa_400x400.jpg'],
                    ['name'=>'santorini4lyfe', 'members'=>'333.123', 'img'=>'https://pbs.twimg.com/media/EnMXQvYXYAMKCWg?format=jpg&name=900x900']
                ]);

                hashtagGroupPerson(false, false, false, [
                    ['name'=>'James Federer', 'description'=>'Tennis is my life', 'img'=>'https://pbs.twimg.com/profile_images/1099403781450711041/Fn0Y-Z-4_400x400.jpg'],
                    ['name'=>'noname123', 'description'=>'Once a wise man said...', 'img'=>'https://pbs.twimg.com/profile_images/1227935519805497351/QsqSAxDY_400x400.jpg']
                ]);
            ?>
        </section>
    </div>