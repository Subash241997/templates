<?php
include '../dbConnection.php';
// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$first_name = trim($_POST['first_name']);
$last_name = trim($_POST['last_name']);
$email = trim($_POST['email']); //
$phone=trim($_POST['phone']);
$inquiry_type= trim($_POST['inquiry_type']); //
$message=trim($_POST['message']);

$sql = "INSERT INTO contacts (first_name, last_name, email, phone, inquiry_type, message) VALUES ('$first_name', '$last_name', '$email', '$phone', '$inquiry_type', '$message')";

if ($conn->query($sql) === TRUE) {
    $response = [
        'status' => 'success',
        'message' => 'Data inserted successfully'
    ];

} else {
    $response = [
        'status' => 'error',
        'message' => 'Data insert failed'.mysqli_error($conn)
    ];
}
echo json_encode($response);
$conn->close();
?>