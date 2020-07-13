<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Mubaligh.id">
        <title>Mubaligh: Belajar Al-Quran dan Al-Hadits </title>

        <!-- Favicons-->
        <link rel="shortcut icon" href="<?= asset('/tpl') ?>/img/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" type="image/x-icon" href="<?= asset('/tpl') ?>/img/apple-touch-icon-57x57-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?= asset('/tpl') ?>/img/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?= asset('/tpl') ?>/img/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?= asset('/tpl') ?>/img/apple-touch-icon-144x144-precomposed.png">

        <!-- BASE CSS -->
        <link href="<?= asset('/tpl') ?>/css/bootstrap_customized.min.css" rel="stylesheet">
        <link href="<?= asset('/tpl') ?>/css/style.css" rel="stylesheet">

        <!-- SPECIFIC CSS -->
        <link href="<?= asset('/tpl') ?>/css/contacts.css" rel="stylesheet">

        <!-- YOUR CUSTOM CSS -->
        <link href="<?= asset('/tpl') ?>/css/custom.css" rel="stylesheet">

    </head>

    <body>

        <header class="header clearfix element_to_stick">
            <div class="container-fluid">
                <div id="logo">
                    <a href="index.html">
                        <img src="<?= asset('/tpl') ?>/img/logo.svg" width="140" height="35" alt="" class="logo_normal">
                        <img src="<?= asset('/tpl') ?>/img/logo_sticky.svg" width="120" height="35" alt="" class="logo_sticky">
                    </a>
                </div>
                <ul id="top_menu">
                    <li><a href="login.html" class="btn_access">Masuk</a></li>
                    <li><a href="submit-professional.html" class="btn_access green">Jadi Pengajar</a></li>
                </ul>
                <!-- /top_menu -->
                <a href="#0" class="open_close">
                    <i class="icon_menu"></i><span>Menu</span>
                </a>
                <nav class="main-menu">
                    <div id="header_menu">
                        <a href="#0" class="open_close">
                            <i class="icon_close"></i><span>Menu</span>
                        </a>
                        <a href="index.html"><img src="<?= asset('/tpl') ?>/img/logo.svg" width="120" height="35" alt=""></a>
                    </div>
                    <ul>
                        <li><a href="#0">Beranda</a></li>
                        <li><a href="#0">Daftar Pesanan</a></li>
                        <li><a href="#0">xxxxx</a></li>
                        <li><a href="#0">Profil</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- /header -->

        <main>
            <div class="hero_single inner_pages background-image" data-background="url(<?= asset('/tpl') ?>/img/home_section_1.jpg)">
                <div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-9 col-lg-10 col-md-8">
                                <h1>Kontak Mubaligh.id</h1>
                                <p>Rasakan pengalaman terbaik dengan para pengajar profesional</p>
                            </div>
                        </div>
                        <!-- /row -->
                    </div>
                </div>
            </div>
            <!-- /hero_single -->

            <div class="bg_gray">
                <div class="container margin_60_40">
                    <div class="row justify-content-center">
                        <div class="col-lg-4">
                            <div class="box_contacts">
                                <i class="icon_lifesaver"></i>
                                <h2>Pusat Bantuan</h2>
                                <a href="#0">+62 111-111-111</a> - <a href="#0">help@mubaligh.id</a>
                                <small>Senin - Jumat 9am-6pm Sabtu 9am-2pm</small>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="box_contacts">
                                <i class="icon_pin_alt"></i>
                                <h2>Alamat</h2>
                                <div>Jl. Cempaka Warna No. 10B, Cempaka Putih, Jakarta</div>
                                <small>Senin - Jumat 9am-6pm Sabtu 9am-2pm</small>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="box_contacts">
                                <i class="icon_cloud-upload_alt"></i>
                                <h2>Pengajuan</h2>
                                <a href="#0">+62 111-111-11</a> - <a href="#0">info@mubaligh.id</a>
                                <small>Senin - Jumat 9am-6pm Sabtu 9am-2pm</small>
                            </div>
                        </div>
                    </div>
                    <!-- /row -->
                </div>
                <!-- /container -->
            </div>
            <!-- /bg_gray -->

            <div class="container margin_60_40">
                <h5 class="mb_5">Beritahu Kami</h5>
                <div class="row">
                    <div class="col-lg-4 col-md-6 add_bottom_25">
                        <div id="message-contact"></div>
                        {!! Form::open(['url' => 'kontak/kirim_pesan', 'class' => 'form-horizontal']) !!}

                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Nama" id="name_contact" name="name_contact">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="email" placeholder="Email" id="email_contact" name="email_contact">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" style="height: 150px;" placeholder="Pesan" id="message_contact" name="message_contact"></textarea>
                        </div>
                        <!--                            <div class="form-group">
                                                        <input class="form-control" type="text" id="verify_contact" name="verify_contact" placeholder="Apakah kamu manusia? 3 + 1 =">
                                                    </div>-->
                        <div class="form-group">
                            <input class="btn_1 full-width" type="submit" value="Kirim" id="submit-contact">
                        </div>
                        {!! Form::close() !!}
                    </div>
                    <div class="col-lg-8 col-md-6 add_bottom_25">
                        <!--<iframe class="map_contact" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39714.47749917409!2d-0.13662037019554393!3d51.52871971170425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondra%2C+Regno+Unito!5e0!3m2!1sit!2ses!4v1557824540343!5m2!1sit!2ses" allowfullscreen></iframe>-->
                        <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.6586399259471!2d106.86724512914287!3d-6.179645099720382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f4ff2857f995%3A0xdefd442860f396eb!2sJl.%20Cempaka%20Warna%20No.10%2C%20RT.11%2FRW.4%2C%20Cemp.%20Putih%20Tim.%2C%20Kec.%20Cemp.%20Putih%2C%20Kota%20Jakarta%20Pusat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2010510!5e0!3m2!1sen!2sid!4v1591912229983!5m2!1sen!2sid"  allowfullscreen="" ></iframe> </div>-->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.6586399259471!2d106.86724512914287!3d-6.179645099720382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f4ff2857f995%3A0xdefd442860f396eb!2sJl.%20Cempaka%20Warna%20No.10%2C%20RT.11%2FRW.4%2C%20Cemp.%20Putih%20Tim.%2C%20Kec.%20Cemp.%20Putih%2C%20Kota%20Jakarta%20Pusat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2010510!5e0!3m2!1sen!2sid!4v1591912229983!5m2!1sen!2sid" width="800" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>    </div>
                </div>
                <!-- /container -->

        </main>
        <!-- /main -->

    <x-footer />

    <!--/footer-->

    <div id="toTop"></div><!-- Back to top button -->

    <div class="layer"></div><!-- Opacity Mask Menu Mobile -->

    <!-- COMMON SCRIPTS -->
    <script src="<?= asset('/tpl') ?>/js/common_scripts.min.js"></script>
    <script src="<?= asset('/tpl') ?>/js/common_func.js"></script>
    <!--<script src="<?= asset('/tpl') ?>/assets/validate.js"></script>-->

</body>
</html>