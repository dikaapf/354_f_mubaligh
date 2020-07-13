@extends('layouts.blog')

@section('title')
Mubaligh || Teacher of The World || Gurune Jagad
@stop

@section('content')
<div class="container margin_45_40">			
    <div class="row">
        <div class="col-lg-9">
            <div class="row">
                <div class="col-md-12">
                    <article class="blog">

                        <div class="post_info">
                            <div class="alert alert-info">
                                Sebuah pesan berisi link untuk verifikasi akun anda telah dikirimkan melalui email anda. silahkan cek email anda.
                            </div>
                            @if (session('status'))
                            <div class="alert alert-success">
                                <h3 class="text-info"><i class="fa fa-exclamation-triangle"></i> Informasi</h3>                         {{ session('status') }}

                            </div>
                            @endif      </div>

                    </article>
                    <!-- /article -->
                </div>
                <!-- /col -->

            </div>
            <!-- /row -->



        </div>
        <!-- /col -->

        <aside class="col-lg-3">
            <div class="widget search_blog">
                <div class="form-group">
                    <input type="text" name="search" id="search" class="form-control" placeholder="Terms...">
                    <span><input type="submit" value="Search"></span>
                </div>
            </div>
            <!-- /widget -->
            <div class="widget">
                <div class="widget-title first">
                    <h4>Latest Post</h4>
                </div>
                <ul class="comments-list">
                    <li>
                        <div class="alignleft">
                            <a href="#0"><img src="<?= asset('/tpl') ?>/img/blog-5.jpg" alt=""></a>
                        </div>
                        <small>Category - 11.08.2016</small>
                        <h3><a href="#" title="">Verear qualisque ex minimum...</a></h3>
                    </li>
                    <li>
                        <div class="alignleft">
                            <a href="#0"><img src="<?= asset('/tpl') ?>/img/blog-6.jpg" alt=""></a>
                        </div>
                        <small>Category - 11.08.2016</small>
                        <h3><a href="#" title="">Verear qualisque ex minimum...</a></h3>
                    </li>
                    <li>
                        <div class="alignleft">
                            <a href="#0"><img src="<?= asset('/tpl') ?>/img/blog-4.jpg" alt=""></a>
                        </div>
                        <small>Category - 11.08.2016</small>
                        <h3><a href="#" title="">Verear qualisque ex minimum...</a></h3>
                    </li>
                </ul>
            </div>
            <!-- /widget -->
            <div class="widget">
                <div class="widget-title">
                    <h4>Categories</h4>
                </div>
                <ul class="cats">
                    <li><a href="#">Dermatology <span>(12)</span></a></li>
                    <li><a href="#">Consulting <span>(21)</span></a></li>
                    <li><a href="#">Treatments <span>(44)</span></a></li>
                    <li><a href="#">Personal care <span>(31)</span></a></li>
                </ul>
            </div>
            <!-- /widget -->
            <div class="widget">
                <div class="widget-title">
                    <h4>Popular Tags</h4>
                </div>
                <div class="tags">
                    <a href="#">Lawyer</a>
                    <a href="#">Accounting</a>
                    <a href="#">Consulting</a>
                    <a href="#">Doctors</a>
                    <a href="#">Best Offers</a>
                    <a href="#">Languages</a>
                    <a href="#">Teach</a>
                </div>
            </div>
            <!-- /widget -->
        </aside>
        <!-- /aside -->
    </div>
    <!-- /row -->	
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function () {

    });
</script>
@endsection