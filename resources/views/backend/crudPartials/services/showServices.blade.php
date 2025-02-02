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
                        <div class="col-md-6 table-responsive">
                            <table class="table table-striped">
                                <tr>
                                    <th>Name</th>
                                    <td>{{ $service->name }}</td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td style="word-wrap: break-word; word-break: break-word; white-space: normal; "> <p style="  max-height: 300px; overflow-y: auto;"> {{ $service->description }}</p></td>
                                </tr>
                                <tr>
                                    <th>Price</th>
                                    <td>{{ $service->price }}</td>
                                </tr>
                                <tr>
                                    <th>Timing</th>
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
