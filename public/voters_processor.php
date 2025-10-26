<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    http_response_code(405);
    echo json_encode(['status' => 'error', 'message' => 'Method Not Allowed']);
    exit;
}

// Validate required fields
$required_fields = ['fullname', 'gender', 'ageRange', 'phone', 'address', 'lga', 'ward', 'pollingUnit', 'hasVoterCard', 'agreement'];
$errors = [];

foreach ($required_fields as $field) {
    if (empty($_GET[$field])) {
        $errors[$field] = ["$field is required"];
    }
}

// Validate email if provided
if (!empty($_GET['email']) && !filter_var($_GET['email'], FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = ['Invalid email format'];
}

if (!empty($errors)) {
    http_response_code(422);
    echo json_encode(['status' => 'error', 'errors' => $errors]);
    exit;
}

// Process form data
$fullname = $_GET['fullname'];
$gender = $_GET['gender'];
$ageRange = $_GET['ageRange'];
$phone = $_GET['phone'];
$email = $_GET['email'] ?? '';
$address = $_GET['address'];
$lga = $_GET['lga'];
$ward = $_GET['ward'];
$pollingUnit = $_GET['pollingUnit'];
$hasVoterCard = $_GET['hasVoterCard'];
$agreement = $_GET['agreement'];

try {
    // Replace with your database logic (e.g., PDO or MySQLi)
    echo json_encode(['status' => 'success', 'message' => 'Registration successful']);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['status' => 'error', 'message' => 'Server error: ' . $e->getMessage()]);
}
exit;
