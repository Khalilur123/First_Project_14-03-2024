<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Process the form data (e.g., send email, save to database, etc.)
    // Here, we'll just print the data for demonstration
    echo "Name: $name<br>";
    echo "Email: $email<br>";
    echo "Message: $message<br>";
} else {
    // Handle invalid form submission
    echo "Invalid request";
}
?>
