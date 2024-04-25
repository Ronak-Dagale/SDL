<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registered Users</title>
<style>
/* Custom CSS styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f3f4f6;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.container h2 {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
    border: 1px solid #ccc;
}

th, td {
    border: 1px solid #ccc;
    padding: 8px;
}

th {
    background-color: #f2f2f2;
    font-weight: bold;
    text-align: left;
}

tr:nth-child(even) {
    background-color: #f9f9f9;
}

tr:hover {
    background-color: #f2f2f2;
}

.back-link {
    display: block;
    text-align: center;
    background-color: #3490dc;
    color: #ffffff;
    text-decoration: none;
    padding: 10px;
    border-radius: 4px;
}

.back-link:hover {
    background-color: #2779bd;
}
</style>
</head>
<body>
<div class="container">
    <h2>Registered Users</h2>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile Number</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Database connection parameters
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "mydb";
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            // Fetch data from the database
            $sql = "SELECT name, email, mobileno FROM mydb";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["mobileno"] . "</td></tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No registered users found</td></tr>";
            }
            // Close connection
            $conn->close();
            ?>
        </tbody>
    </table>
    <a href="signup1.html" class="back-link">Back to Registration Form</a>
</div>
</body>
</html>
