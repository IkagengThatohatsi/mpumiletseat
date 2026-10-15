<?php

include 'config/dbcon.php';

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: contact.php");
    exit;
}


$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$service_id = !empty($_POST['service_id'])
    ? (int) $_POST['service_id']
    : null;
$event_date = !empty($_POST['event_date'])
    ? $_POST['event_date']
    : null;
$number_of_guests = !empty($_POST['guests'])
    ? (int) $_POST['guests']
    : null;
$location = trim($_POST['location'] ?? '');
$message = trim($_POST['message'] ?? '');


if ($name === '' || $email === '' || $message === '') {
    die("Please complete all required fields.");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Please enter a valid email address.");
}

if ($number_of_guests !== null && $number_of_guests < 1) {
    die("Number of guests must be at least 1.");
}


$sql = "INSERT INTO enquiries
        (
            name,
            email,
            phone,
            service_id,
            event_date,
            number_of_guests,
            location,
            message
        )
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Something went wrong. Please try again.");
}


$stmt->bind_param(
    "sssisiss",
    $name,
    $email,
    $phone,
    $service_id,
    $event_date,
    $number_of_guests,
    $location,
    $message
);


if ($stmt->execute()) {

    $stmt->close();
    $conn->close();

    header("Location: contact.php?success=1");
    exit;

} else {

    $stmt->close();
    $conn->close();

    die("Your enquiry could not be submitted. Please try again.");

}

?>