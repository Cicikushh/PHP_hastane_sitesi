<?php
include 'configphp.php';

// Get the doctor_id from the URL (default to 1 if not set)
$doctor_id = isset($_GET['doctor_id']) ? (int) $_GET['doctor_id'] : 1;

// Fetch doctor info (You can replace this with actual doctor details fetching logic)
$sql_doctor = "SELECT name, photo FROM doctors WHERE id = ?";
$stmt_doctor = $conn->prepare($sql_doctor);
$stmt_doctor->bind_param("i", $doctor_id);
$stmt_doctor->execute();
$result_doctor = $stmt_doctor->get_result();
$doctor = $result_doctor->fetch_assoc();

// Fetch comments for the selected doctor
$sql = "SELECT name, comment, created_at FROM comments WHERE doctor_id = ? ORDER BY created_at DESC";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $doctor_id);
$stmt->execute();
$result = $stmt->get_result();

// Fetch all comments
$comments = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $comments[] = $row;
    }
}

// Close the connection
$stmt->close();
$conn->close();
?>
