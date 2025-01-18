@extends('backend.layouts.app')

@section('title', content: 'signup')

@section('dashboardcontent')


    <!-- Sign Up Start -->
    <div class="container-fluid">
        <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <a href="index.html" class="">
                            <h3 class="text-primary">EleganceSaloon</h3>
                        </a>
                        <h3>Sign Up</h3>
                    </div>
                    <form action="/registerUser">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="firstname" placeholder="jhondoe" name="firstname">
                            <label for="firstname">First Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="lastname" placeholder="jhondoe" name="lastname">
                            <label for="lastname">Last Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
                            <label for="email">Email address</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                            <label for="password">Password</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary py-3 w-100 mb-4" value="Sign Up">

                    </form>
                    <p class="text-center mb-0">Already have an Account? <a href="{{ url('/signin') }}">Sign In</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Sign Up End -->
    </div>



@endsection
