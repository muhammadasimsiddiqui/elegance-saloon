@extends('frontend.layouts.app')

@section('title', 'Appointment')

@section('content')
    <!-- mass-head start -->
    <div class="mass-head mass-head-pad text-center parallax mass-head-bg-3">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="mass-head-content">
                        <img class="img-responsive" src="frontend/assets/images/others/mass-head-logo.png" alt="">
                        <h2 class="page-title">Appointment</h2>
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

    <!-- about area start -->
    <div class="about-area bg-color-1 pad120">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title text-center">
                        <img src="frontend/assets/images/title-img/title-img-2.png" class="title-img mb15" alt="">
                        <h3 class="title">Book now</h3>
                        <p class="sub-title">A wide range of male grooming services under one roof</p>
                    </div>
                </div> <!-- /.col -->
            </div> <!-- /.row -->
        </div> <!--/.container-->
        <div class="container">
            <div class="row">
                <div class="col-md-6 sm-mb40">
                    <img class="img-responsive xs-mb30" src="frontend/assets/images/others/shaving.jpg" alt="">
                </div> <!-- /.col -->
                <div class="col-md-6">
                    @include('frontend.partials.appointment')
                </div> <!-- /.col -->
            </div> <!-- /.row -->
        </div> <!--/.container-->
    </div>
    <!-- service area end -->

    <!-- team area start -->
    @include('frontend.partials.team')
    <!-- team area end -->

     <!-- about area start -->
    <div class="about-area bg-color-1 pad120">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title text-center">
                        <img src="frontend/assets/images/title-img/title-img-2.png" class="title-img mb15" alt="">
                        <h3 class="title">Appointments History</h3>
                        <p class="sub-title">A wide range of male grooming services under one roof</p>
                    </div>
                </div> <!-- /.col -->
            </div> <!-- /.row -->
        </div> <!--/.container-->
        <div class="container">
             <table class="table">
        <thead>
            <th>S.No</th>
            <th>Stylist</th>
            <th>Service</th>
            <th>Date</th>
            <th>Time</th>
            <th>Status</th>
        </thead>

        @foreach ($Appointments as $apt)
            <tr>
                <td>{{ $apt->id }}</td>
                <td>{{ $apt->firstname }}{{ $apt->lastname }}</td>
                <td>{{ $apt->name }}</td>
                <td>{{ $apt->date }}</td>
                <td>{{ $apt->time }}</td>
                <td>{{ $apt->apt_status }}</td>
            </tr>
        @endforeach

    </table>

        </div> <!--/.container-->
    </div>
    <!-- service area end -->

    <!-- hair-style area start -->
    <div class="hair-style pad120 parallax bg-3">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 mb30">
                            <a class="gallery-item" href="frontend/assets/images/hair-style/hair-style-1.jpg">
                                <img src="frontend/assets/images/hair-style/hair-style-1.jpg" class="img-responsive"
                                    alt="">
                            </a>
                        </div> <!-- /.col -->
                        <div class="col-md-3 col-sm-3 mb30">
                            <a class="gallery-item" href="frontend/assets/images/hair-style/hair-style-2.jpg">
                                <img src="frontend/assets/images/hair-style/hair-style-2.jpg" class="img-responsive"
                                    alt="">
                            </a>
                        </div> <!-- /.col -->
                        <div class="col-md-3 col-sm-3 mb30">
                            <a class="gallery-item" href="frontend/assets/images/hair-style/hair-style-3.jpg">
                                <img src="frontend/assets/images/hair-style/hair-style-3.jpg" class="img-responsive"
                                    alt="">
                            </a>
                        </div> <!-- /.col -->
                        <div class="col-md-3 col-sm-3 mb30">
                            <a class="gallery-item" href="frontend/assets/images/hair-style/hair-style-4.jpg">
                                <img src="frontend/assets/images/hair-style/hair-style-4.jpg" class="img-responsive"
                                    alt="">
                            </a>
                        </div> <!-- /.col -->
                    </div> <!-- /.row -->
                    <div class="row">
                        <div class="col-md-3 col-sm-3 xs-mb30">
                            <a class="gallery-item" href="frontend/assets/images/hair-style/hair-style-5.jpg">
                                <img src="frontend/assets/images/hair-style/hair-style-5.jpg" class="img-responsive"
                                    alt="">
                            </a>
                        </div> <!-- /.col -->
                        <div class="col-md-3 col-sm-3 xs-mb30">
                            <a class="gallery-item" href="frontend/assets/images/hair-style/hair-style-6.jpg">
                                <img src="frontend/assets/images/hair-style/hair-style-6.jpg" class="img-responsive"
                                    alt="">
                            </a>
                        </div> <!-- /.col -->
                        <div class="col-md-3 col-sm-3 xs-mb30">
                            <a class="gallery-item" href="frontend/assets/images/hair-style/hair-style-7.jpg">
                                <img src="frontend/assets/images/hair-style/hair-style-7.jpg" class="img-responsive"
                                    alt="">
                            </a>
                        </div> <!-- /.col -->
                        <div class="col-md-3 col-sm-3 xs-mb30">
                            <a class="gallery-item" href="frontend/assets/images/hair-style/hair-style-8.jpg">
                                <img src="frontend/assets/images/hair-style/hair-style-8.jpg" class="img-responsive"
                                    alt="">
                            </a>
                        </div> <!-- /.col -->
                    </div> <!-- /.row -->
                </div> <!-- /.col -->
                <div class="col-md-4">
                    <div class="section-title-left">
                        <h3 class="title">Our customers with their new style</h3>
                        <p>A complimentary thorough consultation concerning each client’s individual needs and desires is
                            conducted before every service. Our main goal is to make sure we meet and exceed our clients
                            expectations <strong>Men'z Saloon</strong></p>
                    </div>
                </div> <!-- /.col -->
            </div> <!-- /.row -->
        </div> <!--/.container-->
    </div>
    <!-- hair-style area end -->
@endsection
