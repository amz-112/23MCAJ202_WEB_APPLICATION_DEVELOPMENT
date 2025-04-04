<?php
// Initialize variables to store input values and errors
$name = $email = $password = $confirm_password = "";
$nameErr = $emailErr = $passwordErr = $confirmPasswordErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Validate Name (Required)
    if (empty($_POST["name"])) {
        $nameErr = "Name is required.";
    } else {
        $name = clean_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameErr = "Only letters and spaces allowed.";
        }
    }

    // Validate Email (Required, Format)
    if (empty($_POST["email"])) {
        $emailErr = "Email is required.";
    } else {
        $email = clean_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format.";
        }
    }

    // Validate Password (Required, Min 6 Characters)
    if (empty($_POST["password"])) {
        $passwordErr = "Password is required.";
    } else {
        $password = clean_input($_POST["password"]);
        if (strlen($password) < 6) {
            $passwordErr = "Password must be at least 6 characters.";
        }
    }

    // Validate Confirm Password (Match Password)
    if (empty($_POST["confirm_password"])) {
        $confirmPasswordErr = "Confirm Password is required.";
    } else {
        $confirm_password = clean_input($_POST["confirm_password"]);
        if ($confirm_password !== $password) {
            $confirmPasswordErr = "Passwords do not match.";
        }
    }

    // If no errors, process the form (In a real scenario, save to a database)
    if (empty($nameErr) && empty($emailErr) && empty($passwordErr) && empty($confirmPasswordErr)) {
        echo "<h3>Registration Successful!</h3>";
        echo "<p>Name: $name</p>";
        echo "<p>Email: $email</p>";
    }
}

// Function to sanitize input
function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .error { color: red; }
        form { width: 300px; margin: auto; }
        input { width: 100%; padding: 8px; margin: 5px 0; }
        button { padding: 8px; width: 100%; background: green; color: white; border: none; }
    </style>
</head>
<body>

    <h2>Registration Form</h2>
    
    <form method="POST" action="">
        <label>Name:</label>
        <input type="text" name="name" value="<?php echo $name; ?>">
        <span class="error"><?php echo $nameErr; ?></span>

        <label>Email:</label>
        <input type="text" name="email" value="<?php echo $email; ?>">
        <span class="error"><?php echo $emailErr; ?></span>

        <label>Password:</label>
        <input type="password" name="password">
        <span class="error"><?php echo $passwordErr; ?></span>

        <label>Confirm Password:</label>
        <input type="password" name="confirm_password">
        <span class="error"><?php echo $confirmPasswordErr; ?></span>

        <button type="submit">Register</button>
    </form>

</body>
</html>
