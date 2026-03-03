<?php include 'include/head.php'; ?>
<?php include 'include/header.php'; ?>

<section class="collection-banner text-center">
    <h2>ACCOUNT</h2>
    <p>Home / Login</p>
</section>


<section>
    <div class="account">
    <form>
        <input type="email" placeholder="Email" required>
        <input type="password" placeholder="Password" required>

        <button type="submit">Sign In</button>

        <div class="account-links">
            <a href="forgot.php">Forgot your password?</a>
            <a href="signup.php">Create account</a>
            <a href="/">Return to Store</a>
        </div>
    </form>
</div>
</section>


<?php include 'include/footer.php'; ?>
<?php include 'include/script.php'; ?>