<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio - Contact</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="darkmode.css">
    <style> 
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="projects.html">Projects</a></li>
                <li><a href="skills.html">Skills</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="contact">
            <h1> Contact</h1>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Get form data
                $name = $_POST['name'];
                $email = $_POST['email'];
                $message = $_POST['message'];

                // Validate email
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    echo "<p>Invalid email format</p>";
                } else {
                    // Email details
                    $to = "your-email@example.com";
                    $subject = "Contact Form Submission from $name";
                    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

                    // Email headers
                    $headers = "From: $email";

                    // Send email
                    if (mail($to, $subject, $body, $headers)) {
                        echo "<p>Email successfully sent!</p>";
                    } else {
                        echo "<p>Failed to send email.</p>";
                    }
                }
            }
            ?>
            <form id="contact-form" method="POST" action="contact.php">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
                
                <button type="submit">Send</button>
            </form>
        </section>
    </main>
    <script src="js/darkmode.js"></script>
</body>
</html>


