<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="signIn.css">
</head>
<body>
    <div class="container">
        <h2>Sign Up</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="submit">Sign Up</button>
        </form>
    </div>

    <?php
    // PHP code to handle form submission and database connection
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        $servername = "localhost";
        $username = "root"; // MySQL username
        $password = ""; // MySQL password
        $database = "user_management_shopify"; // Replace with your database name

        // Create connection
        $conn = new mysqli($servername, $username, $password, $database);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare data for insertion
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Insert data into the database
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

        if ($conn->query($sql) === TRUE) {
            header("Location: shop.html");
            exit();
        } else {
            echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
        }

        // Close connection
        $conn->close();
    }
    ?>
</body>
</html>
