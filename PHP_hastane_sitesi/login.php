<?php
include 'configphp.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM Users WHERE email = '$email' AND u_password = '$password'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        session_start();
        $_SESSION['user_id'] = $user['ID'];
        $_SESSION['username'] = $user['username'];
        header("Location: giris.html");
        exit();
    } else {
        echo "Kullanıcı bulunamadı veya hatalı şifre!";
    }
}
$conn->close();
?>
