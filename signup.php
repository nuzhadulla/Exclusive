<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclusive - Sign Up</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Exclusive</h1>
        <div class="nav-links">
            <a href="#">Home</a>
            <a href="#">Contact</a>
            <a href="#">About</a>
            <a href="#">Sign Up</a>
        </div>
        <div class="search-container">
            <input type="text" placeholder="What are you looking for?">
            <button type="submit">Search</button>
        </div>
    </header>
    
    <main>
        <div class="signup-container">
           <img src="images/image.png" alt="Shopping Cart" class="signup-image">

            <div>
                <h2>Create an account</h2>
                <p>Enter your details below</p>
                <form action="process_signup.php" method="POST">
                <input type="text" name="name" placeholder="Name" required>
                <input type="text" name="email" placeholder="Email or Phone Number" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" class="create-account-btn">Create Account</button>
                <p class="google-signup"><img src="images/google-icon.png" alt="Google Icon"> Sign up with Google</p>
                </form>
                <p>Already have an account? <a href="#">Log in</a></p>
            </div>
        </div>
    </main>

    <footer>
        <div class="footer-content">
            <p>© Copyright Rintel 2022. All rights reserved</p>
        </div>
    </footer>
</body>
</html>

