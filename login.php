<?php
declare(strict_types=1); // Declare strict types

$Arun = "Arun"; // Remove unnecessary variable;

if ($_SERVER["REQUEST_METHOD"] === "POST") { // Check if the request method is POST
    $usr = filter_input(INPUT_POST, "usr", FILTER_SANITIZE_STRING); // Sanitize user input
    $pwd = filter_input(INPUT_POST, "pwd", FILTER_SANITIZE_STRING); // Sanitize password input

    if ($usr === "Arun" && $pwd === "Arun") { // Use triple equals for strict comparison
        $loginName = "Welcome Admin";
    } else {
        $loginName = "Login Failed";
    }
} else {
    $loginName = "No data submitted"; // Handle no data submitted
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="sitestyle.css">
</head>
<body>
    <header>
        <h1>Cloud Login Result</h1>
    </header>
    <hr>
    <article>
        <section>
            <h2><?= $loginName ?></h2> <!-- Use short echo syntax -->
        </section>
    </article>
    <footer>
        Developed by Arun pet
    </footer>
</body>
</html>
