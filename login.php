<?php
session_start();

// Define the predefined username and password
$correctUsername = "admin";
$correctPassword = "password";

// Retrieve user input
$inputUsername = $_POST['username'];
$inputPassword = $_POST['password'];

// Validate user input
if ($inputUsername == $correctUsername && $inputPassword == $correctPassword) {
    // Set session variable to indicate the user is logged in
    $_SESSION['username'] = $inputUsername;
    
    // Redirect to the home page
    header("Location: home.php");
    exit();
} else {
    // Invalid login attempt
    header("Location: index.php?error=true");
    exit();
}
?>
<?php
session_start();

// Define the predefined username and password
$correctUsername = "admin";
$correctPassword = "password";

// Retrieve user input
$inputUsername = $_POST['username'];
$inputPassword = $_POST['password'];

// Validate user input
if ($inputUsername == $correctUsername && $inputPassword == $correctPassword) {
    // Set session variable to indicate the user is logged in
    $_SESSION['username'] = $inputUsername;
    
    // Redirect to the home page
    header("Location: home.php");
    exit();
} else {
    // Invalid login attempt
    header("Location: index.php?error=true");
    exit();
}
?>
