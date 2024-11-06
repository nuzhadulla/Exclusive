<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));

    // Here you can add logic to save the data to a database

    // Redirect to a success page or display a success message
    echo "Account created successfully for $name!";
} else {
    // Redirect back to signup if accessed directly
    header("Location: signup.php");
    exit();
}
?>
