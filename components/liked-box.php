<?php

function likedBox($imgsrc, $link, $user, $time)
{?>
<article class="liked-box">
    <div class="liked-box-left">
        <img src="<?=$imgsrc?>">
        <div>
            <a href="#" class="liked-box-link">instagram.com/p/<?=$link?>...</a>
            <p class="liked-box-user"><i class="fas fa-user"></i> <?=$user?></p>
            <p class="liked-box-time"><?=$time?> min. ago <i class="fas fa-heart"></i></p>
        </div>
    </div>
    <input type="checkbox" class="liked-box-check">
</article>
<?php }?>