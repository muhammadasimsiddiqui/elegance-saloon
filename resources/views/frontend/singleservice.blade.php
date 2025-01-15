@extends('frontend.layouts.app')

@section('title', 'Services Details')

@section('content')
<!-- mass-head start -->
<div class="mass-head mass-head-pad text-center parallax mass-head-bg-2">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="mass-head-content">
                    <img class="img-responsive" src="{{ asset('frontend/assets/images/others/mass-head-logo.png') }}" alt="">
                    <h2 class="page-title">{{ $service->name }}</h2>
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
                    <img src="{{ asset('frontend/assets/images/title-img/title-img-2.png') }}" class="title-img mb15" alt="">
                    <h3 class="title">{{ $service->name }}</h3>
                    <p class="sub-title">Find the Best Beard Style for Your Face Shape</p>
                </div>
            </div> <!-- /.col -->
        </div> <!-- /.row -->
    </div> <!--/.container-->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive xs-mb30" src="{{ asset($service->image_urls) }}" alt="">
            </div> <!-- /.col -->
            <div class="col-md-6">
                <!-- accordion start -->
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    {{ $service->name }}
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                <p>{{ $service->description}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Duration - Price
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <h3>{{ $service->duration }} - {{ $service->price}} pkr</h3>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Stylists
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p>Saifullah Sammo, Sohel Nazmul, Shahriyar Ahmed</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- accordion end -->
            </div> <!-- /.col -->
        </div> <!-- /.row -->
    </div> <!--/.container-->
</div>
<!-- service area end -->

<!-- facility area start -->
<div class="bottom-area bg-color-1">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                
            </div> <!-- /.col -->
            <div class="col-md-6"></div> <!-- /.col -->
        </div> <!-- /.row -->
    </div> <!--/.container-->
</div>
<!-- facility area end -->
@endsection
