<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Registration</title>
<style>
/* Custom CSS styles */
body {
    background-color: #f3f4f6;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    max-width: 500px;
    padding: 2rem;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.container h2 {
    font-size: 1.5rem;
    margin-bottom: 1rem;
    text-align: center;
}

.success-message {
    color: #1f9d55;
    text-align: center;
    margin-bottom: 1rem;
}

.error-message {
    color: #e53e3e;
    text-align: center;
    margin-bottom: 1rem;
}

.back-link {
    display: block;
    text-align: center;
    color: #3b82f6;
    text-decoration: none;
    margin-top: 1rem;
}

.back-link:hover {
    text-decoration: underline;
}
</style>
</head>
<body>
<div class="container">
    <h2>User Registration</h2>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydb";
    // Create connection
    $conn = mysqli_connect('localhost', 'root', '', 'mydb');
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // Prepare data for insertion   
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobileno = $_POST['mobile'];
    // Insert data into database
    $sql = "INSERT INTO mydb (name, email, password, mobileno) VALUES ('$name', '$email', '$password', '$mobileno')";
    if ($conn->query($sql) === TRUE) {
        echo '<p class="success-message">Registration successful!</p>';
    } else {
        echo '<p class="error-message">Error: ' . $conn->error . '</p>';
    }
    // Close connection
    $conn->close();
    ?>
    <a href="Signup1.html" class="back-link">Back to Registration Form</a>
</div>
</body>
</html>
