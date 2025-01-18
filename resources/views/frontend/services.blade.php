@extends('frontend.layouts.app')

@section('title', 'Services')

@section('content')
    <!-- mass-head start -->
    <div class="mass-head mass-head-pad text-center parallax mass-head-bg-1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="mass-head-content">
                        <img class="img-responsive" src="frontend/assets/images/others/mass-head-logo.png" alt="">
                        <h2 class="page-title">Services</h2>
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

    <!-- service area start -->
    <div class="about-area bg-color-1 pad120">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title text-center">
                        <img src="frontend/assets/images/title-img/title-img-2.png" class="title-img mb15" alt="">
                        <h3 class="title">Services</h3>
                        <p class="sub-title">A wide range of male grooming services under one roof</p>
                    </div>
                </div> <!-- /.col -->
            </div> <!-- /.row -->
        </div> <!--/.container-->
        <div class="container">
            <div class="row row-eq-height">
                @foreach ($services as $service)
                    <div class="col-md-4">
                        <div class="service-col alt mb30">
                            <div class="service-thumb">
                                <img class="img-responsive" src="{{ asset($service->image_urls) }}" alt=""
                                    style="min-height: 260px; max-height:260px; min-width: 100%; max-width:100%;">
                            </div>
                            <div class="service-content">
                                <div class="service-header">
                                    <h2> {{ $service->name }}</h2>
                                    <span class="time"><i class="fa fa-clock-o"></i> {{ $service->duration }}</span>
                                </div>
                                <div class="clearfix"></div>
                                <p class="service-description">{{ $service->description }}</p>
                                <div class="service-btn text-center">
                                    <a href="/services/{{ strtolower(str_replace(' ', '-', $service->name)) }}"
                                        class="btn btn-primary sbtn-hvr-out">Book Now</a>

                                </div>
                            </div>
                        </div>
                    </div> <!-- /.col -->
                @endforeach
            </div> <!-- /.row -->
        </div> <!--/.container-->
    </div>
    <!-- service area end -->

    <style>
        .service-description {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            /* Limit to 3 lines */
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            max-height: 4.5em;
            /* Approximate height for 3 lines */
            line-height: 1.5em;
            /* Adjust to match your font size */
        }


        /* Show "Read more" only if text is truncated */
        .service-description:after {
            content: '...';
            display: inline;
        }
    </style>
@endsection
