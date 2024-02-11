<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission Result</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        h2 {
            color: #333;
        }

        p {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = isset($_POST["Name"]) ? $_POST["Name"] : "";
    $email = isset($_POST["Email"]) ? $_POST["Email"] : "";
    $message = isset($_POST["Message"]) ? $_POST["Message"] : "";

    // Print the form data
    echo "<h2>Form Submission Result</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Message:</strong> $message</p>";
} else {
    // If not a POST request, display an error message
    echo "<h2>Error: Invalid Request</h2>";
}
?>

</body>
</html>
