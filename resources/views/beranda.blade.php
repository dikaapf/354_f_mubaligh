@extends('layouts.tpl')

@section('title')
Mubaligh || Teacher of The World || Gurune Jagad
@stop

@section('content')
<div id="konten">
    <div class="hero_single version_2">
        <div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-10">
                        <h1>Cari Pengajar Profesional</h1> 
                        <p>Buat Janji, Chat dan Video call</p>
                        <form method="post" action="grid-listing-1.html">
                            <div class="row no-gutters custom-search-input">
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Cari materi...">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <input type="submit" value="Cari">
                                </div>
                            </div>
                            <!-- /row -->
                            <div class="search_trends">
                                <h5>Trending:</h5>
                                <ul>
                                    <li><a href="#0">Tajdwid</a></li>
                                    <li><a href="#0">Bukhori</a></li>
                                    <li><a href="#0">Iqra'</a></li>
                                    <li><a href="#0">Nahwu</a></li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /row -->
            </div>
        </div>
    </div>
    <!-- /hero_single -->
    <div class="bg_gray">
        <div class="container margin_60_40">
            <div class="main_title center">
                <span><em></em></span>
                <h2>Kategori Populer</h2>
                <p>Pilih kategori pelajaran yang ingin anda pahami</p>
            </div>
            <!-- /main_title -->
            <div class="owl-carousel owl-theme categories_carousel">
                <div class="item">
                    <a href="grid-listing-1.html">
                        <span>Baca</span>
                        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="<?= asset('/tpl') ?>/img/icon_home_1.svg" alt="" class="owl-lazy">
                        <h3>Tajwid</h3>
                        <small> Rp10k/ jam</small>
                    </a>
                </div>
                <div class="item">
                    <a href="grid-listing-1.html">
                        <span>Baca</span>
                        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="<?= asset('/tpl') ?>/img/icon_home_3.svg" alt="" class="owl-lazy">
                        <h3>Al-Quran</h3>
                        <small> Rp10k/ jam</small>
                    </a>
                </div>
                <div class="item">
                    <a href="grid-listing-1.html">
                        <span>Baca</span>
                        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="<?= asset('/tpl') ?>/img/icon_home_2.svg" alt="" class="owl-lazy">
                        <h3>Iqra'</h3>
                        <small> Rp10k/ jam</small>
                    </a>
                </div>
                <div class="item">
                    <a href="grid-listing-1.html">
                        <span>Kajian</span>
                        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="<?= asset('/tpl') ?>/img/icon_home_4.svg" alt="" class="owl-lazy">
                        <h3>Shahih Bukhari</h3>
                        <small> Rp10k/ jam</small>
                    </a>
                </div>
                <div class="item">
                    <a href="grid-listing-1.html">
                        <span>Kajian</span>
                        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="<?= asset('/tpl') ?>/img/icon_home_5.svg" alt="" class="owl-lazy">
                        <h3>Shahih Muslim</h3>
                        <small> Rp10k/ jam</small>
                    </a>
                </div>
                <div class="item">
                    <a href="grid-listing-1.html">
                        <span>Kajian</span>
                        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="<?= asset('/tpl') ?>/img/icon_home_6.svg" alt="" class="owl-lazy">
                        <h3>Sunan Tirmidzi</h3>
                        <small> Rp10k/ jam</small>
                    </a>
                </div>
                <div class="item">
                    <a href="grid-listing-1.html">
                        <span>Kajian</span>
                        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="<?= asset('/tpl') ?>/img/icon_home_7.svg" alt="" class="owl-lazy">
                        <h3>Sunan Abudawud</h3>
                        <small> Rp10k/ jam</small>
                    </a>
                </div>
            </div>
            <!-- /carousel -->
        </div>
        <!-- /container -->
    </div>
    <!-- /bg_gray -->
    <div class="container margin_60_40">
        <div class="main_title center">
            <span><em></em></span>
            <h2>Pemateri Profesional</h2>
            <p>Tenaga pengajar yang menguasai keilmuan dibidangnya.</p>
        </div>

        <div class="row add_bottom_15">
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                <div class="strip">
                    <figure>
                        <a href="#0" class="wish_bt"><i class="icon_heart"></i></a>
                        <img src="<?= asset('/tpl') ?>/img/access_bg.jpg" data-src="<?= asset('/tpl') ?>/img/access_bg.jpg" class="img-fluid lazy" alt="">
                        <a href="detail-page.html" class="strip_info">
                            <div class="item_title">
                                <h3>Nurcholis Ramlan</h3>
                                <small>Karyawan, Muballigh</small>
                            </div>
                        </a>
                    </figure>
                    <ul>
                        <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="bottom" title="Available Appointment"><i class="icon-users"></i></a></li>
                        <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="bottom" title="Available Chat"><i class="icon-chat"></i></a></li>
                        <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="bottom" title="Available Video Call"><i class="icon-videocam"></i></a></li>
                        <li>
                            <div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /strip grid -->
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                <div class="strip">
                    <figure>
                        <a href="#0" class="wish_bt"><i class="icon_heart"></i></a>
                        <img src="<?= asset('/tpl') ?>/img/alfarizy.jpg" data-src="<?= asset('/tpl') ?>/img/alfarizy.jpg" class="img-fluid lazy" alt="">
                        <a href="detail-page.html" class="strip_info">
                            <div class="item_title">
                                <h3>Muhammad Ridwan</h3>
                                <small>Muballigh</small>
                            </div>
                        </a>
                    </figure>
                    <ul>
                        <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="bottom" title="Available Appointment"><i class="icon-users"></i></a></li>
                        <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="bottom" title="Available Chat"><i class="icon-chat"></i></a></li>
                        <li>
                            <div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /strip grid -->
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                <div class="strip">
                    <figure>
                        <a href="#0" class="wish_bt"><i class="icon_heart"></i></a>
                        <img src="<?= asset('/tpl') ?>/img/alfarizy.jpg" data-src="<?= asset('/tpl') ?>/img/alfarizy.jpg" class="img-fluid lazy" alt="">
                        <a href="detail-page.html" class="strip_info">
                            <div class="item_title">
                                <h3>Ahmad Alfarizy</h3>
                                <small>Muballigh</small>
                            </div>
                        </a>
                    </figure>
                    <ul>
                        <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="bottom" title="Available Appointment"><i class="icon-users"></i></a></li>
                        <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="bottom" title="Available Video Call"><i class="icon-videocam"></i></a></li>
                        <li>
                            <div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /strip grid -->
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                <div class="strip">
                    <figure>
                        <a href="#0" class="wish_bt"><i class="icon_heart"></i></a>
                        <img src="<?= asset('/tpl') ?>/img/mahir.jpg" data-src="<?= asset('/tpl') ?>/img/mahir.jpg" class="img-fluid lazy" alt="">
                        <a href="detail-page.html" class="strip_info">
                            <div class="item_title">
                                <h3>Mahir Mustofani</h3>
                                <small>Pengusaha, Muballigh</small>
                            </div>
                        </a>
                    </figure>
                    <ul>
                        <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="bottom" title="Available Chat"><i class="icon-chat"></i></a></li>
                        <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="bottom" title="Available Video Call"><i class="icon-videocam"></i></a></li>
                        <li>
                            <div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /strip grid -->
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                <div class="strip">
                    <figure>
                        <a href="#0" class="wish_bt"><i class="icon_heart"></i></a>
                        <img src="img/lazy-placeholder.png" data-src="img/professionals_photos/home_5.jpg" class="img-fluid lazy" alt="">
                        <a href="detail-page.html" class="strip_info">
                            <div class="item_title">
                                <h3>Nadia Syakira</h3>
                                <small>Mahasiswa</small>
                            </div>
                        </a>
                    </figure>
                    <ul>
                        <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="bottom" title="Available Chat"><i class="icon-chat"></i></a></li>
                        <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="bottom" title="Available Video Call"><i class="icon-videocam"></i></a></li>
                        <li>
                            <div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /strip grid -->
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                <div class="strip">
                    <figure>
                        <a href="#0" class="wish_bt"><i class="icon_heart"></i></a>
                        <img src="img/lazy-placeholder.png" data-src="img/professionals_photos/home_6.jpg" class="img-fluid lazy" alt="">
                        <a href="detail-page.html" class="strip_info">
                            <div class="item_title">
                                <h3>Nurazizah Ramlan</h3>
                                <small>Karyawan</small>
                            </div>
                        </a>
                    </figure>
                    <ul>
                        <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="bottom" title="Available Appointment"><i class="icon-users"></i></a></li>
                        <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="bottom" title="Available Chat"><i class="icon-chat"></i></a></li>
                        <li>
                            <div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /strip grid -->
        </div>
        <!-- /row -->

    </div>
    <!-- /container -->
    <div class="bg_gray">
        <div class="container margin_60_40">
            <div class="main_title center add_bottom_10">
                <span><em></em></span>
                <h2>Bagaimana caranya?</h2>
                <p>Yuuk pelajari cara membuat pesanan</p>
            </div>
            <div class="row justify-content-md-center how_2">
                <div class="col-lg-5 text-center">
                    <figure>
                        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="<?= asset('/tpl') ?>/img/web_wireframe.svg" alt="" class="img-fluid lazy" width="360" height="380">
                    </figure>
                </div>
                <div class="col-lg-5">
                    <ul>
                        <li>
                            <h3><span>#01.</span> Cari Pengajar yang Sesuai</h3>
                            <p>Cari dilebih dari ribuan pengajar profesional yang sesuai dengan kriteria kamu.</p>
                        </li>
                        <li>
                            <h3><span>#02.</span> Lihat Profil Pengajar</h3>
                            <p>Lihat perkenalan pengajar dan baca ulasan dari murid yang lain.</p>
                        </li>
                        <li>
                            <h3><span>#03.</span> Lakukan Pemesanan dan Pembayaran</h3>
                            <p>Lakukan pemesanan sesuai waktu yang anda inginkan dan selesaikan pembayarannya!</p>
                        </li>
                        <li>
                            <h3><span>#03.</span> Siap untuk Belajar</h3>
                            <p>Terhubung dengan pengajar profesional sesuai waktu yang telah ditentukan baik offline maupun online.</p>
                        </li>
                    </ul>
                    <p class="add_top_30"><a href="grid-listing-1.html" class="btn_1">Mulai Mencari</a></p>
                </div>
                <!-- /row -->
            </div>
        </div>
        <!-- /container -->
    </div>
    <!-- /bg_gray -->
    <div class="bg_gray">
        <div class="container margin_60_40">			
            <div class="main_title center">
                <span><em></em></span>
                <h2>Kenapa Mubaligh.id ?</h2>
                <p>Mubaligh.id memberikan anda pengalaman terbaik dalam mempelajari Al-Quran dan Al-Hadits.</p>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="box_why">
                        <figure><img src="<?= asset('/tpl') ?>/img/why_1.svg" alt="" width="200" height="200" class="img-fluid"></figure>
                        <h3>Boost your Visibility</h3>
                        <p class="lead"> Illum suavitate ad has, inani salutatus sit et, error reprehendunt id eam.</p>
                        <p>Eu quem patrioque delicatissimi est. Eos delectus perpetua posidonium ei. Ad debitis accusamus eam. Nec ea esse nulla aperiam, pri at decore numquam, no detracto cotidieque his. Invenire facilisis ex ius.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box_why">
                        <figure><img src="<?= asset('/tpl') ?>/img/why_2.svg" alt="" width="200" height="200" class="img-fluid"></figure>
                        <h3>Manage Easly</h3>
                        <p class="lead">Est falli invenire interpretaris id, magna libris sensibus mel id.</p>
                        <p>Per eu nostrud feugiat. Et quo molestiae persecuti neglegentur. At zril definitionem mei, vel ei choro volumus. An tota nulla soluta has, ei nec essent audiam, te nisl dignissim vel. Ex velit audire perfecto pro, ei mei doming vivendo legendos.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box_why">
                        <figure><img src="<?= asset('/tpl') ?>/img/why_3.svg" alt="" width="200" height="200" class="img-fluid"></figure>
                        <h3>Reach New Customers</h3>
                        <p class="lead">Laoreet inimicus vulputate est. Sea in voluptatibus comprehensam vituperatoribus.</p>
                        <p>Movet iriure dolores nec ea, per ei dicat audire signiferumque. Illum porro gubergren vis in, affert graecis an eos, qui quem facilis vulputate cu. Ei commodo prompta eum, et eum vide appareat euripidis.</p>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /bg_gray -->


    <div class="call_section version_2 lazy" data-bg="url(<?= asset('/tpl') ?>/img/bg_call_section.jpg)">
        <div class="container clearfix">
            <div class="col-lg-5 col-md-6 float-right wow">
                <div class="box_1">
                    <div class="ribbon_promo"><span>Free</span></div>
                    <h3>Ingin menjadi pemateri?</h3>
                    <p>Jadilah bagian dari dakwah kami dalam menyiarkan ilmu agama Islam dapatkan amal jariyahnya..</p>
                    <a href="submit-professional.html" class="btn_1">Lebih Detail</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function () {

    });
</script>
@endsection