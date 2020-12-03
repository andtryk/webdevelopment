<?php
// Please pass boolean for $loggedIn
// Please pass boolean for $logo if false, it shows back arrow
// Please pass boolean for $searchBar if true it shows and hides the magnifying glass
function menu($loggedIn = false, $logo = true, $searchBar = false)
{
    $routes = !$loggedIn ?
    [['name' => 'Log in', 'url' => 'index.php'],
        ['name' => 'Sign up', 'url' => 'index.php'],
        ['name' => 'Privacy', 'url' => 'privacy.php'],
        ['name' => 'Legal', 'url' => 'legal.php']] :
    [
        ['name' => '<i class="fas fa-home"></i> Home', 'url' => 'landing-page.php'],
        ['name' => '<i class="fas fa-search"></i> Explore', 'url' => 'explore.php'],
        ['name' => '<i class="fas fa-user-circle"></i> Profile', 'url' => 'profile.php'],
        ['name' => '<i class="fas fa-comments"></i> Messages', 'url' => 'messages.php'],
        ['name' => '<i class="fas fa-user-friends"></i> Groups', 'url' => 'groups.php'],
        ['name' => '<i class="fas fa-recycle"></i> Automation', 'url' => 'automation.php'],
        ['name' => '<i class="fas fa-dollar-sign"></i> Subscription', 'url' => 'subscription.php'],
        ['name' => '<i class="fas fa-sign-out-alt"></i> Log out', 'url' => 'index.php'],
    ];?>

<header>
    <?php
if ($logo) {?>
    <a href="<?=$loggedIn ? '/landing-page.php' : '/'?>" class="logo">iHub</a>
    <?php } else {?>
    <button class="back-arrow"><i class="fas fa-arrow-left"></i></button>
    <?php }
    if ($loggedIn && $searchBar) {?>
    <input type="text" placeholder="Search iHub" id="menu-search-bar">
    <?php }?>
    <div>
        <?php if ($loggedIn && !$searchBar) {?>
        <a href="explore.php" class="menu-search"><i class="fas fa-search"></i></a>
        <?php }?>
        <button class="burger-menu"><i class="fas fa-bars"></i></button>
    </div>

    <!-- Mobile menu -->
    <div class="menu-overlay hidden">
        <div class="menu">
            <div class="menu-header">
                <button class="close-menu">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <nav>
                <?php foreach ($routes as $route) {?>
                <a href="<?=$route['url']?>"><?=$route['name']?></a>
                <?php }?>
            </nav>
        </div>
    </div>
</header>
<?php
}
?>