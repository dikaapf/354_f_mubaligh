<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Verifikasi pendaftaran email di Mubaligh.id</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <img src="<?= asset('/tpl/img/mubaligh_logo.png') ?>">
        <h3>{{$detail['title']}}</h3>
        <p>Hai {{$detail['body']}},</p>
        <p>Kamu sudah memasukkan {{$detail['email_to']}} sebagai alamat email pada mubaligh.id</p>

        <p>Mohon verifikasi email-mu di bawah ini agar kamu dapat mengakses mubalig.id</p>
        <p><?= url('/verifikasi/user/' . Crypt::encrypt($detail['key'])); ?></p>

        Terima Kasih
    </body>
</html>
