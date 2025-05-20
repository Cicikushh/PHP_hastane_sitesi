<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize form input
    $m_name = htmlspecialchars($_POST['m_name']);
    $m_mail = filter_var($_POST['m_mail'], FILTER_SANITIZE_EMAIL);
    $m_subject = htmlspecialchars($_POST['m_subject']);
    $m_message = htmlspecialchars($_POST['m_message']);
    
    header("Location: iletisim.html");
     // Validate email
    if (!filter_var($m_mail, FILTER_VALIDATE_EMAIL)) {
        echo "Geçerli bir e-posta adresi girin.";
        exit();
    }
    // Email recipient
    $to = "ozlemdemiral32@gmail.com"; // Your email address
    $subject = $m_subject;
    $message = "
    <html>
    <head>
        <title>$m_subject</title>
    </head>
    <body>
        <p><strong>Adı:</strong> $m_name</p>
        <br>
        <p><strong>Mesaj:</strong></p>
        <p>$m_message</p>
    </body>
    </html>
    ";

    // Header bilgileri
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: $m_mail" . "\r\n";

  
    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Mail gönderildi!";  // Confirmation message  // Redirect after sending email
        exit();
    } else {
        echo "Bir hata oluştu. E-posta gönderilemedi.";
    }
}
?>