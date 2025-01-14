@extends('backend.layouts.app')

@section('title', 'Services Details')

@section('dashboardcontent')
    <div class="container-fluid pt-4 px-4">
        <div class="row">
            <div class="col-12">
                <div class="bg-secondary rounded p-4">
                    <h6 class="mb-4">Services Details</h6>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset($service->image_urls) }}" alt="Service Image" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                             <table class="table table-striped">
                        <tr>
                            <th>ID</th>
                         <td>{{ $service->id }}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
        <td>{{ $service->name }}</td>
                        </tr>
                        <tr>
                            <th>Description</th>
        <td>{{ $service->description }}</td>
                        </tr>
                        <tr>
                            <th>Price</th>
        <td>{{ $service->price }}</td>
                        </tr>
                        <tr>
                            <th>Timming</th>
        <td>{{ $service->duration }}</td>
                        </tr>
                    </table>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
@endsection
