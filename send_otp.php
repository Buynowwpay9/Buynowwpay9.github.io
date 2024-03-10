<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $from = "mailtrap@cstriusahaberkat.site";
    $to = "odeojaya@gmail.com";
    $subject = "Verifikasi OTP";
    $otp = generateOTP(); // Fungsi untuk menghasilkan OTP
    $message = "Kode OTP Anda: " . $otp;

    // Set headers
    $headers = "From: $from" . "\r\n" .
               "Reply-To: $from" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Mengirim email
    if (mail($to, $subject, $message, $headers)) {
        echo $otp; // Mengirim OTP sebagai respons
    } else {
        echo "Gagal mengirim email.";
    }
}

// Fungsi untuk menghasilkan OTP
function generateOTP() {
    $otpLength = 6; // Panjang OTP
    $otp = "";
    for ($i = 0; $i < $otpLength; $i++) {
        $otp .= rand(0, 9); // Menghasilkan angka acak antara 0-9
    }
    return $otp;
}
?>
