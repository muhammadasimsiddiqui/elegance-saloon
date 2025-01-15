        <div class="header navbar-fixed-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- bootstrap-navbar start -->
                        <nav class="navbar navbar-default">
                            <div class="container-fluid">
                                
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand" href="{{ url('/') }}">
                                        <img src="{{ asset('frontend/assets/images/others/white-logo.png') }}" alt="Elegance Salon">
                                    </a>
                                </div> <!--/.navbar-header-->

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <div class="top-right-contact text-right pull-right hidden-sm hidden-xs">
                                        {{-- <i class="fa fa-phone-square"></i> +92 329 0331394 --}}
                                        <a class="btn btn-primary sbtn-hvr-out" href="{{ url('/signup') }}">Create Account</a>
                                    </div> 
                                    <!--top-right-contact-->
                                    <ul class="nav navbar-nav">
                                        <li class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
                                        <li class="{{ Route::currentRouteName() == 'about' ? 'active' : '' }}"><a href="{{ url('/about') }}">About</a></li>
                                        <li class="{{ Route::currentRouteName() == 'services' ? 'active' : '' }}"><a href="{{ url('/services') }}">Services</a></li>
                                        <li class="{{ Route::currentRouteName() == 'appointment' ? 'active' : '' }}"><a href="{{ url('/appointment') }}">Appointment</a></li>
                                        <li class="{{ Route::currentRouteName() == 'contact' ? 'active' : '' }}"><a href="{{ url('/contact') }}">Contact</a></li>
                                        <li class="{{ Route::currentRouteName() == 'signin' ? 'active' : '' }}"><a href="{{ url('/signin') }}">Log In</a></li>
                                    </ul>
                                    
                                </div><!-- /.navbar-collapse -->
                            </div> <!-- /.container-fluid -->
                        </nav>
                        <!-- bootstrap-navbar end -->

                    </div> <!--/.col-->
                    
                </div> <!--/.row-->
            </div> <!--/.container-->
        </div>