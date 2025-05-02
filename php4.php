<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 40px;
            background: #f9f9f9;
            color: #333;
        }

        h2 {
            color: #444;
            margin-bottom: 20px;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 12px 16px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e0f7e9;
        }

        table, th, td {
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>

<?php
$servername = "127.0.0.1:3306";
$username = "root"; 
$password = "root";     
$dbname = "testdb";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("<p style='color: red;'>Connection failed: " . $conn->connect_error . "</p>");
}

// SQL query to retrieve data
$sql = "SELECT id, name, email FROM users";
$result = $conn->query($sql);

$sql1 = "INSERT INTO users (id,name,email) VALUES (101,"Harikrishnan","harik2115@gmail.com")"
$result1 = $conn->query($sql1);

// Check if there are results
if ($result->num_rows > 0) {
    echo "<h2>User List</h2>";
    echo "<table>";
    echo "<tr><th>ID</th><th>Name</th><th>Email</th></tr>";

    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['id']) . "</td>";
        echo "<td>" . htmlspecialchars($row['name']) . "</td>";
        echo "<td>" . htmlspecialchars($row['email']) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<p>No users found.</p>";
}

$conn->close();
?>

</body>
</html>
