<!DOCTYPE html>
<html lang="en">

<?php
$metaTitle = 'Sign up to iHub';
require_once __DIR__ . '/components/head.php';
require_once __DIR__ . '/components/menu.php';
menu();
?>




<main class="index-main">
    <section id="signup-box">
        <section class="signup-login-box">
            <section class="auth-form">
                <h1>Signup</h1>
                <form>
                    <input name="email" type="text" placeholder="Email" value="" data-type="email">
                    <input name="password" type="password" placeholder="Password" value="" data-type="string" data-min="2" data-max="20">
                    <a href="landing-page.php"><button type="button" class="signup-button">Sign up</button></a>
                </form>
                
            </section>
        </section>
        <section class="switch-box">
                <div>Already have an account? <button type="button" class="switch-button" onclick="toggleLogin();">Login!</button></div>
        </section>
    </section>
    <section id="login-box" class="hidden">
        <section class="signup-login-box">
            <section class="auth-form">
                <h1>Login</h1>
                <form>
                    <input name="email" type="text" placeholder="Email" value="" data-type="email">
                    <input name="password" type="password" placeholder="Password" value="" data-type="string" data-min="2" data-max="20">
                    <a href="landing-page.php"><button type="button" class="signup-button">Sign up</button></a>
                    <a href="#">Forgot password?</a>
                </form>
                
            </section>
        </section>
        <section class="switch-box">
                <div>Dont have an account yet? <button type="button" class="switch-button" onclick="toggleLogin();">Signup!</button></div>
        </section>
    </section>
</main>
<script>
    const loginBox = document.getElementById('login-box');
const signupBox = document.getElementById('signup-box');

function toggleLogin() {
    loginBox.classList.toggle('hidden');
    signupBox.classList.toggle('hidden');
}
</script>
<?php require_once __DIR__ . '/components/footer.php';?>