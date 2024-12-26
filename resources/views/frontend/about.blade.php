@extends('frontend.layouts.app')

@section('title', 'About')

@section('content')
<!-- mass-head start -->
<div class="mass-head mass-head-pad text-center parallax mass-head-bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="mass-head-content">
                            <img class="img-responsive" src="frontend/assets/images/others/mass-head-logo.png" alt="">
                            <h2 class="page-title">About us</h2>
                        </div>
                    </div> <!--/.col-->
                </div> <!--/.row-->
            </div>  <!--/.container-->
            <!-- mass-head-icon start -->
            <div class="mass-head-icon">
                <i class="flaticon-scissors-4"></i>
            </div>
            <!-- mass-head-icon end -->
        </div>
        <!-- mass-head end -->
        
        <!-- about area start -->
        <div class="about-area bg-color-1 pad120">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section-title text-center">
                            <img src="frontend/assets/images/title-img/title-img-2.png" class="title-img mb15" alt="">
                            <h3 class="title">About <strong>Menz Saloon</strong></h3>
                            <p class="sub-title">A wide range of male grooming services under one roof</p>
                        </div>
                    </div> <!-- /.col -->
                </div> <!-- /.row -->
            </div> <!--/.container-->
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img class="img-responsive xs-mb30" src="frontend/assets/images/others/about-us-image.jpg" alt="">
                    </div> <!-- /.col -->
                    <div class="col-md-6">
                        <p>Since 1995 MANZ SALOON dolor sit amet, ex option timeam antiopam cum. An autem eruditi ius, vim tation epicuri verterem id. Ei duo prompta maiorum eloquentiam, ei pri dolor evertitur necessitatibus. Eu postea aliquid mea, eu cum ludus solet forensibus, no docendi volutpat dignissim eum. Eu nam stet congue.An autem eruditi ius, vim tation epicuri verterem id. Ei duo prompta maiorum eloquentiam, ei pri dolor evertitur necessitatibus. Eu postea aliquid mea, eu cum ludus solet.</p>
                        <ul class="fa-ul">
                            <li><i class="fa-li fa fa-scissors"></i> Lorem ipsum dolor sit amet, consectetur </li>
                            <li><i class="fa-li fa fa-scissors"></i> Lorem ipsum dolor sit amet, consectetur </li>
                            <li><i class="fa-li fa fa-scissors"></i> Lorem ipsum dolor sit amet, consectetur </li>
                        </ul>
                    </div> <!-- /.col -->
                </div> <!-- /.row -->
            </div> <!--/.container-->
        </div>
        <!-- service area end -->

       <!-- team area start -->
       @include('frontend.partials.team')
        <!-- team area end -->

        <!-- pricing area start -->
        <div class="counter-area bg-color-1 pad120">
        <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section-title text-center">
                            <img src="frontend/assets/images/title-img/title-img-4.png" class="title-img mb15" alt="">
                            <h3 class="title">Services <strong>price</strong></h3>
                            <p class="sub-title">Customer satisfaction is our top priority</p>
                        </div>
                    </div> <!-- /.col -->
                </div> <!-- /.row -->
            </div> <!--/.container-->
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="pricing-box text-center xs-mb30">
                            <div class="price-title">
                                <h4>The Buzz Cut & Fade</h4>
                            </div>
                            <div class="price-tag">
                                <h5><span>$</span>15.00</h5>
                            </div>
                            <div class="price-description">
                                <p>A super clipper cut with a number of grades to shape and fade. A razor is used to finish off those sharp lines to detail.</p>
                            </div>
                            <a href="#" class="btn btn-primary hvr-out">Book now</a>
                        </div> <!--/.price-box-->
                    </div> <!-- /.col -->
                    <div class="col-md-4 col-sm-4">
                        <div class="pricing-box text-center xs-mb30">
                            <div class="price-title">
                                <h4>The Gent</h4>
                            </div>
                            <div class="price-tag">
                                <h5><span>$</span>17.50</h5>
                            </div>
                            <div class="price-description">
                                <p>An old classic Haircut completed mostly with scissors over comb to add texture & shape. Finished with talc and some hair tonic.</p>
                            </div>
                            <a href="#" class="btn btn-primary hvr-out">Book now</a>
                        </div> <!--/.price-box-->
                    </div> <!-- /.col -->
                    <div class="col-md-4 col-sm-4">
                        <div class="pricing-box text-center xs-mb30">
                            <div class="price-title">
                                <h4>The Esquire</h4>
                            </div>
                            <div class="price-tag">
                                <h5><span>$</span>19.50</h5>
                            </div>
                            <div class="price-description">
                                <p>A selected designer fashion or retro cut to include extreme tapering and texture. Finished with a hair pomade or clay for extreme styling.</p>
                            </div>
                            <a href="#" class="btn btn-primary hvr-out">Book now</a>
                        </div> <!--/.price-box-->
                    </div> <!-- /.col -->
                </div> <!-- /.row -->
            </div> <!--/.container-->
        </div>
        <!-- pricing area end -->

        <!-- hair-style area start -->
        <div class="hair-style pad120 parallax bg-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 mb30">
                                <a class="gallery-item" href="frontend/assets/images/hair-style/hair-style-1.jpg">
                                    <img src="frontend/assets/images/hair-style/hair-style-1.jpg" class="img-responsive" alt="">
                                </a>
                            </div> <!-- /.col -->
                            <div class="col-md-3 col-sm-3 mb30">
                                <a class="gallery-item" href="frontend/assets/images/hair-style/hair-style-2.jpg">
                                    <img src="frontend/assets/images/hair-style/hair-style-2.jpg" class="img-responsive" alt="">
                                </a>
                            </div> <!-- /.col -->
                            <div class="col-md-3 col-sm-3 mb30">
                                <a class="gallery-item" href="frontend/assets/images/hair-style/hair-style-3.jpg">
                                    <img src="frontend/assets/images/hair-style/hair-style-3.jpg" class="img-responsive" alt="">
                                </a>
                            </div> <!-- /.col -->
                            <div class="col-md-3 col-sm-3 mb30">
                                <a class="gallery-item" href="frontend/assets/images/hair-style/hair-style-4.jpg">
                                    <img src="frontend/assets/images/hair-style/hair-style-4.jpg" class="img-responsive" alt="">
                                </a>
                            </div> <!-- /.col -->
                        </div> <!-- /.row -->
                        <div class="row">
                            <div class="col-md-3 col-sm-3 xs-mb30">
                                <a class="gallery-item" href="frontend/assets/images/hair-style/hair-style-5.jpg">
                                    <img src="frontend/assets/images/hair-style/hair-style-5.jpg" class="img-responsive" alt="">
                                </a>
                            </div> <!-- /.col -->
                            <div class="col-md-3 col-sm-3 xs-mb30">
                                <a class="gallery-item" href="frontend/assets/images/hair-style/hair-style-6.jpg">
                                    <img src="frontend/assets/images/hair-style/hair-style-6.jpg" class="img-responsive" alt="">
                                </a>
                            </div> <!-- /.col -->
                            <div class="col-md-3 col-sm-3 xs-mb30">
                                <a class="gallery-item" href="frontend/assets/images/hair-style/hair-style-7.jpg">
                                    <img src="frontend/assets/images/hair-style/hair-style-7.jpg" class="img-responsive" alt="">
                                </a>
                            </div> <!-- /.col -->
                            <div class="col-md-3 col-sm-3 xs-mb30">
                                <a class="gallery-item" href="frontend/assets/images/hair-style/hair-style-8.jpg">
                                    <img src="frontend/assets/images/hair-style/hair-style-8.jpg" class="img-responsive" alt="">
                                </a>
                            </div> <!-- /.col -->
                        </div> <!-- /.row -->
                    </div> <!-- /.col -->
                    <div class="col-md-4">
                        <div class="section-title-left">
                            <h3 class="title">Our customers with their new style</h3>
                            <p>A complimentary thorough consultation concerning each client’s individual needs and desires is conducted before every service. Our main goal is to make sure we meet and exceed our clients expectations <strong>Men'z Saloon</strong></p>
                        </div>
                    </div> <!-- /.col -->
                </div> <!-- /.row -->
            </div> <!--/.container-->
        </div>
        <!-- hair-style area end -->

        <!-- animated counter area start -->
        <div class="counter-area bg-color-1 pad120">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="counter-box text-center xs-mb30" data-count="20">
                            <div class="counter-icon">
                                <i class="flaticon-scissors"></i>
                            </div>
                            <div class="counter-content mb30">
                                <h2 class="counter"></h2>
                                <h4>Professional Barbers</h4>
                            </div>
                        </div> <!--/.counter-box-->
                    </div> <!-- /.col -->
                    <div class="col-md-4 col-sm-4">
                        <div class="counter-box text-center xs-mb30" data-count="786">
                            <div class="counter-icon">
                                <i class="flaticon-boy-hair-shape"></i>
                            </div>
                            <div class="counter-content">
                                <h2 class="counter"></h2>
                                <h4>Stunning Hair Styles</h4>
                            </div>
                        </div> <!--/.counter-box-->
                    </div> <!-- /.col -->
                    <div class="col-md-4 col-sm-4">
                        <div class="counter-box text-center" data-count="3249">
                            <div class="counter-icon">
                                <i class="flaticon-boy-happy-smile"></i>
                            </div>
                            <div class="counter-content">
                                <h2 class="counter"></h2>
                                <h4>Satisfied Clients</h4>
                            </div>
                        </div> <!--/.counter-box-->
                    </div> <!-- /.col -->
                </div> <!-- /.row -->
            </div> <!--/.container-->
        </div>
        <!-- animated counter area end -->
@endsection