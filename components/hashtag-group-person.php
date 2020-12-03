<?php
function hashtagGroupPerson($hashtag, $group, $paid, $arrayData)
{
    foreach ($arrayData as $arrayData) {
        ?>
<div class="hashtag-group-person">
    <?php
if ($hashtag) {
            ?>
    <div>
        <img src="<?=$arrayData['img']?>" alt="image of <?=$arrayData['name']?>">
        <i class="fas fa-hashtag"></i>
    </div>
    <?php
} else {
            ?>
    <img src="<?=$arrayData['img']?>" alt="image of <?=$arrayData['name']?>">
    <?php
}
        ?>
    <article>
        <p class="result-title"><?=$arrayData['name']?></p>
        <?php
if (!$hashtag) {
            ?>
        <p><?=$arrayData['description']?></p>
        <?php
}
        ?>
        <?php
if ($hashtag || $group) {
            ?>
        <i class="fas fa-user"></i><span> <?=$arrayData['members']?></span>
        <?php
}
        ?>
    </article>
    <?php
if ($hashtag) {
            ?>
    <div class="btn-div">
        <button>Automate</button>
    </div>
</div>
<?php
} else if ($group && $paid) {
            ?>
<div class="btn-div">
    <button>Join</button>
    <p>Paid</p>
</div>
</div>
<?php

        } else if ($group && !$paid) {
            ?>
<div class="btn-div">
    <button>Join</button>
    <p class="paid-group">Free</p>
</div>
</div>
<?php
} else {
            ?>
</div>
<?php
}
    }
}