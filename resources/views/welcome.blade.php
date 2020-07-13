@extends('layouts.tplx')

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
                                        <input class="form-control" type="text" placeholder="Cari pengajar, Materi...">
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
                                    <li><a href="#0">Igra'</a></li>
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
                <h2>Materi</h2>
                <!--<p>Cum doctus civibus efficiantur in imperdiet deterruisset</p>-->
            </div>
            <!-- /main_title -->
            <div class="owl-carousel owl-theme categories_carousel">
                <div class="item">
                    <a href="grid-listing-1.html">
                        <span>98</span>
                        <img src="<?= asset('/tpl/img/learning.jpg') ?>" data-src="<?= asset('/tpl/img/learning.jpg') ?>" alt="" class="owl-lazy">
                        <h3>Belajar Membaca (IQRA)</h3>
                        <small>Rp. 15K/sesi</small>
                    </a>
                </div>
                <div class="item">
                    <a href="grid-listing-1.html">
                        <span>96</span>
                        <img src="<?= asset('/tpl/img/learning.jpg') ?>" data-src="<?= asset('/tpl/img/learning.jpg') ?>" alt="" class="owl-lazy">
                        <h3>Belajar Membaca (Tajdwid)</h3>
                        <small>Rp. 10K/sesi</small>
                    </a>
                </div>
                <div class="item">
                    <a href="grid-listing-1.html">
                        <span>87</span>
                        <img src="<?= asset('/tpl/img/learning.jpg') ?>" data-src="<?= asset('/tpl/img/learning.jpg') ?>" alt="" class="owl-lazy">
                        <h3>Makna Al-Qur'an</h3>
                        <small>Rp. 5K/sesi</small>
                    </a>
                </div>
                <div class="item">
                    <a href="grid-listing-1.html">
                        <span>78</span>
                        <img src="<?= asset('/tpl/img/learning.jpg') ?>" data-src="<?= asset('/tpl/img/learning.jpg') ?>" alt="" class="owl-lazy">
                        <h3>Sunan Abi Dawud</h3>
                        <small>Rp. 15K/sesi</small>
                    </a>
                </div>
                <div class="item">
                    <a href="grid-listing-1.html">
                        <span>65</span>
                        <img src="<?= asset('/tpl/img/learning2.jpg') ?>" data-src="<?= asset('/tpl/img/learning2.jpg') ?>" alt="" class="owl-lazy">
                        <h3>Bukhori</h3>
                        <small>Rp. 15K/sesi</small> 
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
        <p class="text-center add_bottom_30"><a href="grid-listing-1.html" class="btn_1 medium">Start Searching</a></p>
        <div class="row">
            <div class="col-12">
                <div class="main_title version_2">
                    <span><em></em></span>
                    <h2>Performa terbaik minggu ini</h2>
                    <!--<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>-->
                    <a href="#0">View All</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="list_home">
                    <ul>
                        <li>
                            <a href="detail-page.html">
                                <figure>
                                    <img src="img/professional_list_placeholder.png" data-src="img/professional_list_1.jpg" alt="" class="lazy">
                                </figure>
                                <div class="score"><strong>9.5</strong></div>
                                <em>Lawyer</em>
                                <h3>Laura Marting</h3>
                                <small>8 Patriot Square E2 9NF</small>
                                <ul>
                                    <li><span class="ribbon off">-30%</span></li>
                                    <li>Average price $35</li>
                                </ul>
                            </a>
                        </li>
                        <li>
                            <a href="detail-page.html">
                                <figure>
                                    <img src="img/professional_list_placeholder.png" data-src="img/professional_list_2.jpg" alt="" class="lazy">
                                </figure>
                                <div class="score"><strong>8.0</strong></div>
                                <em>Teacher</em>
                                <h3>Anna Smith</h3>
                                <small>27 Old Gloucester St, 4563</small>
                                <ul>
                                    <li><span class="ribbon off">-40%</span></li>
                                    <li>Average price $30</li>
                                </ul>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="list_home">
                    <ul>
                        <li>
                            <a href="detail-page.html">
                                <figure>
                                    <img src="img/professional_list_placeholder.png" data-src="img/professional_list_3.jpg" alt="" class="lazy">
                                </figure>
                                <div class="score"><strong>9.5</strong></div>
                                <em>Pediatrician</em>
                                <h3>Dr. Stefany Lens</h3>
                                <small>27 Old Gloucester St, 4563</small>
                                <ul>
                                    <li><span class="ribbon off">-30%</span></li>
                                    <li>Average price $20</li>
                                </ul>
                            </a>
                        </li>
                        <li>
                            <a href="detail-page.html">
                                <figure>
                                    <img src="img/professional_list_placeholder.png" data-src="img/professional_list_4.jpg" alt="" class="lazy">
                                </figure>
                                <div class="score"><strong>8.0</strong></div>
                                <em>Yoga Trainer</em>
                                <h3>Lucy Clarks</h3>
                                <small>22 Hertsmere Rd E14 4ED</small>
                                <ul>
                                    <li><span class="ribbon off">-50%</span></li>
                                    <li>Average price $35</li>
                                </ul>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /container -->
    <div class="bg_gray">
        <div class="container margin_60_40">
            <div class="main_title center add_bottom_10">
                <span><em></em></span>
                <h2>Bagaimana cara menggunakannya?</h2>
                <!--<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>-->
            </div>
            <div class="row justify-content-md-center how_2">
                <div class="col-lg-5 text-center">
                    <figure>
                        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/web_wireframe.svg" alt="" class="img-fluid lazy" width="360" height="380">
                    </figure>
                </div>
                <div class="col-lg-5">
                    <ul>
                        <li>
                            <h3><span>#01.</span> Cari Pemateri/Muballigh</h3>
                            <p>Search over 12.000 verifyed professionals that match your criteria.</p>
                        </li>
                        <li>
                            <h3><span>#02.</span> Lihat profilnya</h3>
                            <p>View professional introduction and read reviews from other customers.</p>
                        </li>
                        <li>
                            <h3><span>#03.</span> Ikuti kursusnya</h3>
                            <p>Connect with your professional booking an appointment, via chat or video call!</p>
                        </li>
                    </ul>
                    <p class="add_top_30"><a href="grid-listing-1.html" class="btn_1">Start Searching</a></p>
                </div>
                <!-- /row -->
            </div>
        </div>
        <!-- /container -->
    </div>
    <!-- /bg_gray -->
    <div class="call_section version_2 lazy" data-bg="url(img/bg_call_section.jpg)">
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