<?php include 'include/head.php'; ?>
<?php include 'include/header.php'; ?>

<section class="collection-banner text-center">
    <h2>ACCOUNT</h2>
    <p>Home / Signup</p>
</section>


<section>
    <div class="account">
        <form>
            <input type="text" placeholder="Full Name" required>
            <input type="email" placeholder="Email" required>
            <input type="password" placeholder="Password" required>
            <input type="password" placeholder="Confirm Password" required>

            <button type="submit">Create Account</button>

            <div class="account-links">
                <a href="login.php">Already have an account?</a>
                <a href="/">Return to Store</a>
            </div>
        </form>
    </div>
</section>


<?php include 'include/footer.php'; ?>
<?php include 'include/script.php'; ?>