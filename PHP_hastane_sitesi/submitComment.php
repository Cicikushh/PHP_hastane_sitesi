<?php
include 'configphp.php';

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $doctor_id = isset($_POST['doctor_id']) ? (int) $_POST['doctor_id'] : 0;
    $name = isset($_POST['name']) ? $_POST['name'] : 'Anonymous';
    $comment = isset($_POST['comment']) ? $_POST['comment'] : '';

    // Insert the comment into the database
    $sql = "INSERT INTO comments (doctor_id, name, comment) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iss", $doctor_id, $name, $comment);

    if ($stmt->execute()) {
        // Redirect back to the page with the comments for the selected doctor
        header("Location: /doctor_comments.php?doctor_id=$doctor_id");
        exit;
    } else {
        echo "Failed to add comment.";
    }

    // Close the connection
    $stmt->close();
    $conn->close();
}
?>
