<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['user-name'];  // Matches the HTML field name
    $insight = $_POST['user-insight'];  // Matches the HTML field name

    // Email details
    $to = "kumalonosipho1@gmail.com";  // Replace with your email address
    $subject = "New Insight Submission from $name";
    $body = "Name: $name\n\nInsight:\n$insight";
    $headers = "From: no-reply@yourdomain.com";  // Replace with your domain email

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for your insight! We'll get back to you soon.";
    } else {
        echo "Sorry, there was an error processing your submission.";
    }
} else {
    echo "Invalid request.";
}
?>
