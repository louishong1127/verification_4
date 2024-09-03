<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Process the data as needed, e.g., save it to a database

    // Redirect to another HTML page (e.g., thank you page)
    header("Location: thank_you.html");
    exit(); // Make sure to call exit after the header to stop further script execution
} else {
    echo "Form submission error!";
}
