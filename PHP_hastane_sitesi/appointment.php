<?php
include 'configphp.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $hizmet = mysqli_real_escape_string($conn, $_POST['hizmet']);
    $doktor = mysqli_real_escape_string($conn, $_POST['doktor']);
    $isim = mysqli_real_escape_string($conn, $_POST['isim']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $tarih = mysqli_real_escape_string($conn, $_POST['tarih']);
    $saat = mysqli_real_escape_string($conn, $_POST['saat']);


    $sql = "INSERT INTO appointments (hizmet, doktor, isim, email, randevutarih, randevusaati) 
            VALUES ('$hizmet', '$doktor', '$isim', '$email', '$tarih', '$saat')";

    if ($conn->query($sql) === TRUE) {
        header("Location: randevu.html");


        $to = $email; // Alıcı e-posta adresi
        $subject = "Yeni Randevu Talebi";
        $message = "$isim, randevunuz alınmıştır.";


        // Header bilgileri
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: angrydolphinsss@gmail.com" . "\r\n";

        // Mail gönder
        if (mail($to, $subject, $message, $headers)) {
            echo "Randevunuz başarıyla oluşturuldu ve e-posta gönderildi!";
        } else {
            echo "Bir hata oluştu. E-posta gönderilemedi.";
        }
        exit();
    } else {
        echo "Hata: " . $sql . "<br>" . $conn->error;
    }   
}
$conn->close();
?>