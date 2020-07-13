@extends('layouts.tpl_front')

@section('title')
Mubaligh || Teacher of The World || Gurune Jagad
@stop

@section('content')
<div id="konten">
    <div class="container margin_detail">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="box_general">

                    <div class="main_info_wrapper">
                        <div class="main_info clearfix">
                            <div class="user_desc">
                                <h3>Selamat Datang, {{ Auth::user()->name }}</h3>

                            </div>
                            <div class="score_in">
                                <div class="rating">
                                    <div class="score"><span>Saldo Anda </span><strong>105.000,00</strong></div>
                                </div>
                            </div>
                        </div>
                        <!-- /main_info_wrapper -->

                    </div>
                    <!-- /main_info -->
                </div>
                <p class="text-center add_bottom_30"><a href="grid-listing-1.html" class="btn_1 medium">Cari Pengajar</a></p>

                <!-- /box_general -->
                <div class="box_general">
                    <div class="tabs_detail">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a id="tab-A" href="#pane-A" class="nav-link active" data-toggle="tab" role="tab">Review Pengajar</a>
                            </li>
                            <li class="nav-item">
                                <a id="tab-B" href="#pane-B" class="nav-link" data-toggle="tab" role="tab">Reviews</a>
                            </li>
                        </ul>
                        <div class="tab-content" role="tablist">
                            <div id="pane-A" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="tab-A">
                                <div class="card-header" role="tab" id="heading-A">
                                    <h5>
                                        <a class="collapsed" data-toggle="collapse" href="#collapse-A" aria-expanded="true" aria-controls="collapse-A">
                                            Rekomendasi Pengajar
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse-A" class="collapse" role="tabpanel" aria-labelledby="heading-A">
                                    <div class="card-body info_content">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="main_title version_2">
                                                    
                                                    <h2>Rekomendasi minggu ini</h2>
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
                                                                    <img src="<?=asset('/tpl') ?>/img/mahir.jpg" data-src="<?=asset('/tpl') ?>/img/mahir.jpg" alt="" class="lazy">
                                                                </figure>
                                                                <div class="score"><strong>9.5</strong></div>
                                                                <em>Muballigh, <br>Karyawan</em>
                                                                <h3>Mahir Mustofani, S.Kom</h3>
                                                                <small>Wamena - Papua</small>
                                                                <ul>
                                                                    <li><span class="ribbon off">-30%</span></li>
                                                                    <li>15K/jam</li>
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
                                </div>
                            </div>
                            <!-- /tab -->
                            <div id="pane-B" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
                                <div class="card-header" role="tab" id="heading-B">
                                    <h5>
                                        <a class="collapsed" data-toggle="collapse" href="#collapse-B" aria-expanded="false" aria-controls="collapse-B">
                                            Reviews
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse-B" class="collapse" role="tabpanel" aria-labelledby="heading-B">
                                    <div class="card-body reviews">
                                        <div class="row add_bottom_45 d-flex align-items-center">
                                            <div class="col-md-3">
                                                <div id="review_summary">
                                                    <strong>8.5</strong>
                                                    <em>Superb</em>
                                                    <small>Based on 4 reviews</small>
                                                </div>
                                            </div>
                                            <div class="col-md-9 reviews_sum_details">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h6>Response time</h6>
                                                        <div class="row">
                                                            <div class="col-xl-10 col-lg-9 col-9">
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-2 col-lg-3 col-3"><strong>9.0</strong></div>
                                                        </div>
                                                        <!-- /row -->
                                                        <h6>Service</h6>
                                                        <div class="row">
                                                            <div class="col-xl-10 col-lg-9 col-9">
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-2 col-lg-3 col-3"><strong>9.5</strong></div>
                                                        </div>
                                                        <!-- /row -->
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h6>Communication</h6>
                                                        <div class="row">
                                                            <div class="col-xl-10 col-lg-9 col-9">
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-2 col-lg-3 col-3"><strong>6.0</strong></div>
                                                        </div>
                                                        <!-- /row -->
                                                        <h6>Price</h6>
                                                        <div class="row">
                                                            <div class="col-xl-10 col-lg-9 col-9">
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-2 col-lg-3 col-3"><strong>6.0</strong></div>
                                                        </div>
                                                        <!-- /row -->
                                                    </div>
                                                </div>
                                                <!-- /row -->
                                            </div>
                                        </div>
                                        <div id="reviews">
                                            <div class="review_card">
                                                <div class="row">
                                                    <div class="col-md-2 user_info">
                                                        <figure><img src="<?= asset('/tpl') ?>/img/avatar4.jpg" alt=""></figure>
                                                        <h5>Lukas</h5>
                                                    </div>
                                                    <div class="col-md-10 review_content">
                                                        <div class="clearfix add_bottom_15">
                                                            <span class="rating">8.5<small>/10</small> <strong>Rating average</strong></span>
                                                            <em>Published 54 minutes ago</em>
                                                        </div>
                                                        <h4>"Great!!"</h4>
                                                        <p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his. Tollit molestie suscipiantur his et.</p>
                                                        <ul>
                                                            <li><a href="#0"><i class="icon_like"></i><span>Useful</span></a></li>
                                                            <li><a href="#0"><i class="icon_dislike"></i><span>Not useful</span></a></li>
                                                            <li><a href="#0"><i class="arrow_back"></i> <span>Reply</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- /row -->
                                            </div>
                                            <!-- /review_card -->
                                            <div class="review_card">
                                                <div class="row">
                                                    <div class="col-md-2 user_info">
                                                        <figure><img src="<?= asset('/tpl') ?>/img/avatar6.jpg" alt=""></figure>
                                                        <h5>Lukas</h5>
                                                    </div>
                                                    <div class="col-md-10 review_content">
                                                        <div class="clearfix add_bottom_15">
                                                            <span class="rating">8.5<small>/10</small> <strong>Rating average</strong></span>
                                                            <em>Published 10 Oct. 2019</em>
                                                        </div>
                                                        <h4>"Awesome Experience"</h4>
                                                        <p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his. Tollit molestie suscipiantur his et.</p>
                                                        <ul>
                                                            <li><a href="#0"><i class="icon_like"></i><span>Useful</span></a></li>
                                                            <li><a href="#0"><i class="icon_dislike"></i><span>Not useful</span></a></li>
                                                            <li><a href="#0"><i class="arrow_back"></i> <span>Reply</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- /row -->
                                            </div>
                                            <!-- /review_card -->
                                            <div class="review_card">
                                                <div class="row">
                                                    <div class="col-md-2 user_info">
                                                        <figure><img src="<?= asset('/tpl') ?>/img/avatar1.jpg" alt=""></figure>
                                                        <h5>Marika</h5>
                                                    </div>
                                                    <div class="col-md-10 review_content">
                                                        <div class="clearfix add_bottom_15">
                                                            <span class="rating">9.0<small>/10</small> <strong>Rating average</strong></span>
                                                            <em>Published 11 Oct. 2019</em>
                                                        </div>
                                                        <h4>"Really great!!"</h4>
                                                        <p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his. Tollit molestie suscipiantur his et.</p>
                                                        <ul>
                                                            <li><a href="#0"><i class="icon_like"></i><span>Useful</span></a></li>
                                                            <li><a href="#0"><i class="icon_dislike"></i><span>Not useful</span></a></li>
                                                            <li><a href="#0"><i class="arrow_back"></i> <span>Reply</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- /row -->
                                                <div class="row reply">
                                                    <div class="col-md-2 user_info">
                                                        <figure><img src="<?= asset('/tpl') ?>/img/avatar.jpg" alt=""></figure>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="review_content">
                                                            <strong>Reply from Prozim</strong>
                                                            <em>Published 3 minutes ago</em>
                                                            <p><br>Hi Monika,<br><br>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his. Tollit molestie suscipiantur his et.<br><br>Thanks</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /reply -->
                                            </div>
                                            <!-- /review_card -->
                                        </div>
                                        <!-- /reviews -->
                                        <p class="text-right"><a href="leave-review.html" class="btn_1">Leave a review</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /tab-content -->
                    </div>
                    <!-- /tabs_detail -->
                </div>
            </div>
            <!-- /col -->
            <div class="col-xl-4 col-lg-5" id="sidebar_fixed">
                <div class="box_booking mobile_fixed">
                    <div class="head">
                        <h3>Jadwal Saya</h3>
                        <a href="#0" class="close_panel_mobile"><i class="icon_close"></i></a>
                    </div>
                    <!-- /head -->
                    <div class="main">
                        <div class="radio_select type">
                            <ul>
                                <li>
                                    <input type="radio" id="appointment" name="type" value="12.00pm">
                                    <label for="appointment"><i class="icon-users"></i> Appointment</label>
                                </li>
                                <li>
                                    <input type="radio" id="chat" name="type" value="12.30pm">
                                    <label for="chat"><i class="icon-chat"></i> Chat</label>
                                </li>
                                <li>
                                    <input type="radio" id="video" name="type" value="1.00pm">
                                    <label for="video"><i class="icon-videocam"></i> Video Call</label>
                                </li>
                            </ul>
                        </div>
                        <!-- /type -->
                        <input type="text" id="datepicker_field">
                        <div id="DatePicker"></div>
                        <div class="dropdown time">
                            <a href="#" data-toggle="dropdown">Hour <span id="selected_time"></span></a>
                            <div class="dropdown-menu">
                                <div class="dropdown-menu-content">
                                    <div class="radio_select">
                                        <ul>
                                            <li>
                                                <input type="radio" id="time_1" name="time" value="12.00pm">
                                                <label for="time_1">12.00<small>pm</small></label>
                                            </li>
                                            <li>
                                                <input type="radio" id="time_2" name="time" value="12.30pm">
                                                <label for="time_2">12.30<small>pm</small></label>
                                            </li>
                                            <li>
                                                <input type="radio" id="time_3" name="time" value="1.00pm">
                                                <label for="time_3">1.00<small>pm</small></label>
                                            </li>
                                            <li>
                                                <input type="radio" id="time_4" name="time" value="1.30pm">
                                                <label for="time_4">1.30<small>pm</small></label>
                                            </li>
                                            <li>
                                                <input type="radio" id="time_5" name="time" value="2.00pm">
                                                <label for="time_5">2.00<small>pm</small></label>
                                            </li>
                                            <li>
                                                <input type="radio" id="time_6" name="time" value="02.30pm">
                                                <label for="time_6">2.30<small>pm</small></label>
                                            </li>
                                            <li>
                                                <input type="radio" id="time_7" name="time" value="03.00pm">
                                                <label for="time_7">3.00<small>pm</small></label>
                                            </li>
                                            <li>
                                                <input type="radio" id="time_8" name="time" value="03.30pm">
                                                <label for="time_8">3.30<small>pm</small></label>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /time_select -->
                                </div>
                            </div>
                        </div>
                        <!-- /dropdown -->
                        <a href="booking.html" class="btn_1 full-width booking">Book Now</a>
                    </div>
                </div>
                <!-- /box_booking -->
                <div class="btn_reserve_fixed"><a href="#0" class="btn_1 full-width booking">Book Now</a></div>
                <ul class="share-buttons">
                    <li><a class="fb-share" href="#0"><i class="social_facebook"></i> Share</a></li>
                    <li><a class="twitter-share" href="#0"><i class="social_twitter"></i> Share</a></li>
                    <li><a class="gplus-share" href="#0"><i class="social_googleplus"></i> Share</a></li>
                </ul>
            </div>
        </div>
        <!-- /row -->
    </div>

    <!-- /bg_gray -->


</div>
@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function () {

    });
</script>
@endsection