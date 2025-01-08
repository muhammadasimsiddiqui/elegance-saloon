

@extends('backend.layouts.app')

@section('title', content: 'table')

@push('styles')
<style>
  
</style>
    
@endpush

@section('dashboardcontent')




            <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Accounts Details</h6>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col"></th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Username</th>
                                            <th scope="col">Number</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Desigination</th>
                                            <th scope="col">Status</th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td><img src='https://via.placeholder.com/50' alt="Profile Image" class="img-fluid"></td>
                                            <td class="align-content-center">John</td>
                                            <td class="align-content-center">jhon@email.com</td>
                                            <td class="align-content-center">923243416388</td>
                                            <td class="align-content-center">doe098</td>
                                            <td class="align-content-center">USA</td>
                                            <td class="align-content-center">Admin</td>
                                            <td class="align-content-center">Deactivate</td>
                                            <td class="align-content-center"> <a href="{{ url('/edit/1') }}" class="btn btn-warning btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            </td>
                                            <td class="align-content-center"><a href="{{ url('/delete/1') }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete?');">
                                                <i class="fa fa-trash"></i>
                                            </a></td>
                                        </tr>
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table End -->


            @endsection
 