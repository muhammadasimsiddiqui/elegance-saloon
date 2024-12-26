@extends('frontend.layouts.app')

@section('title', 'Home')

@section('content')
    
        <!-- service area start -->
        @include('frontend.partials.hero')
        <!-- service area end -->
        
        <!-- service area start -->
        @include('frontend.partials.popular-services')
        <!-- service area end -->

        <!-- team area start -->
        @include('frontend.partials.team')
        <!-- team area end -->

        <!-- booking area start -->
        <div class="booking-area bg-color-1 pad-t120">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section-title text-center">
                            <img src="frontend/assets/images/title-img/title-img-3.png" class="title-img mb15" alt="">
                            <h3 class="title">We are <strong>available</strong></h3>
                            <p class="sub-title">Dedicated To Providing Excellence In Our Service</p>
                        </div>
                    </div> <!-- /.col -->
                </div> <!-- /.row -->
            </div> <!--/.container-->
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-6">
                    	<div class="store-timing mt60">
                    		<h4>Opening time</h4>
                    		<p>Monday to Wednesday <span class="pull-right">07.00 am - 10:00 pm</span></p>
                    		<p>Friday and Saturday <span class="pull-right">12.00 pm - 10:30 pm</span></p>
                    	</div>
                    	<div class="store-timing mt60">
                    		<h4>Closing time</h4>
                    		<p>Friday and Saturday <span class="pull-right">12.00 pm - 10:30 pm</span></p>
                    		<p>Sunday <span class="pull-right">Weekend</span></p>
                    	</div>
                    </div> <!-- /.col -->
                    <div class="col-md-2 hidden-sm hidden-xs">
                    	<img src="frontend/assets/images/others/scissor.png" alt="" class="img-responsive">
                    </div> <!-- /.col -->
                    <div class="col-md-5 col-sm-6 sm-pad-b">
                        <!-- booking form start -->
                        <div class="mt65" >
                            @include('frontend.partials.appointment')
                        </div>
                    	<!-- booking form end -->
                    </div> <!-- /.col -->
                </div> <!-- /.row -->
            </div> <!--/.container-->
        </div>
        <!-- booking area end -->

        <!-- testimonial area start -->
        @include('frontend.partials.testinomial')
        <!-- testimonial area end -->

        <!-- facility area start -->
        @include('frontend.partials.whychooseus')
        <!-- facility area end -->

        <!-- call to action start -->
        <div class="call-to-action pad80 bg-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="c2a bg-drk-trns white-text">
                            <div class="row">
                                <div class="col-md-8 pad80">
                                    <h3>Get 25% off your first mens haircut.</h3>
                                    <p>You can ask for a first visit voucher.The voucher is valid at any of our salons. The 25% discount only applies to a mens haircut with a senior stylist.</p>
                                    <a href="#" class="btn btn-primary hvr-in">Visit now</a>
                                </div> <!-- /.col -->
                                <div class="col-md-4 hidden-sm hidden-xs">
                                    <div class="c2a-img">
                                        <img class="img-1" src="frontend/assets/images/others/c2a-1.jpg" alt="">
                                        <img class="img-2" src="frontend/assets/images/others/c2a-2.jpg" alt="">
                                    </div>
                                </div> <!-- /.col -->
                            </div> <!-- /.row -->
                        </div>
                    </div> <!-- /.col -->
                </div> <!-- /.row -->
            </div> <!--/.container-->
        </div>
        <!-- call to action end -->
@endsection
