<?php
include 'configphp.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = mysqli_real_escape_string($conn, $_POST['usernameR']);
    $email = mysqli_real_escape_string($conn, $_POST['emailR']);
    $password = mysqli_real_escape_string($conn, $_POST['passwordR']);

    $sql = "INSERT INTO Users (username, email, u_password) VALUES ('$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        header("Location: giris.html");
        exit();
    } else {
        echo "Hata: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>