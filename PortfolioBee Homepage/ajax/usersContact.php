<?php
include '../dbConnection.php';
// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

//// Check the connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}

// Retrieve and trim the input values
$first_name = trim($_POST['first_name']);
$last_name = trim($_POST['last_name']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$inquiry_type = trim($_POST['inquiry_type']);
$message = trim($_POST['message']);

// Validation
if (empty($first_name) || empty($last_name) || empty($email) || empty($phone) || empty($inquiry_type) || empty($message)) {
    $response = [
        'status' => 'Error',
        'message' => 'Please fill up all the fields.'
    ];
}
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // Check if the email format is valid
    $response = [
        'status' => 'Error',
        'message' => 'Please provide a valid email address.'
    ];
}
elseif (!preg_match('/^\d{10}$/', $phone)) {
    // Check if the phone number is exactly 10 digits
    $response = [
        'status' => 'Error',
        'message' => 'Please enter a valid phone number.'
    ];
}
else {
    // Directly include the user input in the SQL query
    $sql = "INSERT INTO contacts (first_name, last_name, email, phone, inquiry_type, message) 
            VALUES ('$first_name', '$last_name', '$email', '$phone', '$inquiry_type', '$message')";

    if ($conn->query($sql) === TRUE) {
        $response = [
            'status' => 'Success',
            'message' => 'Message sent successfully.'
        ];
    } else {
        $response = [
            'status' => 'Error',
            'message' => 'Failed to send message. ' . $conn->error
        ];
    }
}

$conn->close();
echo json_encode($response);
?>
