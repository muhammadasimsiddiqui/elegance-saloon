@extends('frontend.layouts.app')

@section('title', 'Contact Us')

@section('content')
        <!-- mass-head start -->
        <div class="mass-head mass-head-pad text-center parallax mass-head-bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="mass-head-content">
                            <img class="img-responsive" src="frontend/assets/images/others/mass-head-logo.png" alt="">
                            <h2 class="page-title">Contact Us</h2>
                        </div>
                    </div> <!--/.col-->
                </div> <!--/.row-->
            </div> <!--/.container-->
            <!-- mass-head-icon start -->
            <div class="mass-head-icon">
                <i class="flaticon-scissors-4"></i>
            </div>
            <!-- mass-head-icon end -->
        </div>
        <!-- mass-head end -->
 
        <div class="contact-form-area pad120 bg-color-1">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section-title text-center">
                            <img src="frontend/assets/images/title-img/title-img-2.png" class="title-img mb15" alt="">
                            <h3 class="title">Keep in touch with us</h3>
                        </div>
                    </div> <!-- /.col -->
                </div> <!-- /.row -->
            </div> <!--/.container-->
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="contact-address">
                            <h3>NYC Branch</h3>
                            <p><i class="fa fa-map-marker"></i> 14 Marcury Road, NY, USA</p>
                            <p><i class="fa fa-phone"></i> (880) 777 4444</p>
                            <p><i class="fa fa-envelope"></i> youremail@email.com</p>
                            <p><i class="fa fa-globe"></i> http://yourdomain.com</p>
                        </div>
                    </div> <!--/.col-->
                    <div class="col-md-8">
                        <!-- contact form start -->
                        <form id="contact-form" action="" class="contact-form" data-toggle="validator" role="form" novalidate="true">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="name">Name<span>*</span></label>
                                        <input type="text" class="form-control" id="name" required="" data-error="Enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div> <!-- /.col -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="email">Email<span>*</span></label>
                                        <input type="email" class="form-control" id="email" required="" data-error="Enter valid email address">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div> <!-- /.col -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="subject">Subject</label>
                                        <input type="text" class="form-control" id="msg_subject" data-error="Enter your message subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div> <!-- /.col -->
                            </div> <!-- /.row -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea id="message" class="form-control" rows="6" required="" data-error="Enter your message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div> <!-- /.col -->
                            </div> <!-- /.row -->
                            <div class="row">
                                <div class="col-md-3">
                                    <button id="submit" type="submit" class="btn btn-primary hvr-in disabled" data-error="Write your message">Send Message</button>
                                </div> <!-- /.col -->
                            </div> <!-- /.row -->
                            <div id="msgalert" class="hidden"></div>
                        </form>
                        <!-- contact form end -->
                    </div> <!--/.col-->
                </div> <!--/.row-->
            </div> <!--/.container-->
        </div>

        <!-- map area start -->
        <div class="map-area">
            <div id="map"></div>
       
        <!-- map script start -->
        <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAr5bLw3FY2R0sBlZJFeVpEZx-MHHoyCts&callback=initMap">
        </script>
        <script>
            function initMap() {
                var uluru = {lat: -25.363, lng: 131.044};
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 4,
                    center: uluru,
                    scrollwheel: false,
                });
                var marker = new google.maps.Marker({
                    position: uluru,
                    map: map
                });
            }
        </script>
        <!-- map script end -->
        </div>
        <!-- map area end -->
@endsection