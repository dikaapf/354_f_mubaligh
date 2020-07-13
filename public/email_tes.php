<?php

$to_email = "oman.buluatie@gmail.com";
$subject = "REGISTRASI PENGGUNA";
$body = "Terima Kasih Telah Menggunakan Layanan Kami. Ini adalah email Otomatis. Tidak Perlu membalas email ini";
$headers = "From: Mubaligh.id";
 
if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}


