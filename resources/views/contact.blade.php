<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }
        h1 {
            margin: 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .contact-form {
            margin: 20px 0;
        }
        .contact-form label {
            display: block;
            font-weight: bold;
            margin-top: 10px;
        }
        .contact-form input[type="text"], .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .contact-form input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .contact-form input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <header>
        <h1>Contact Us</h1>
    </header>
    <nav>
        <ul>
            <li><a href="about">About</a></li>
            <li><a href="FAQ">FAQ</a></li>
            <li><a href="home">home</a></li>
            <li><a href="contact">contact</a></li>
        </ul>
    </nav>
    <div class="container">
        <section>
            <h2>Contact Information</h2>
            <p>just ring ring call me call me ring ring.</p>
        </section>

        <section>
            <h2>Contact Form</h2>
            <form class="contact-form" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" required>
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>
                <input type="submit" value="Submit">
            </form>
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $name = $_POST["name"];
                    $email = $_POST["email"];
                    $message = $_POST["message"];
                    
                    // You can handle form submission and data processing here
                    // For this example, we are just displaying the submitted data
                    echo "<h3>Submitted Information:</h3>";
                    echo "Name: $name<br>";
                    echo "Email: $email<br>";
                    echo "Message: $message<br>";
                }
            ?>
        </section>

        <section>
            <h2>Contact Details</h2>
            <p>Email: kyelmallari@example.com</p>
            <p>Phone: +0966781</p>
        </section>
    </div>
</body>
</html>
