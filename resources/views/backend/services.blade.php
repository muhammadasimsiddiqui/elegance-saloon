@extends('backend.layouts.app')

@section('title', 'Services')

@push('styles')
<!-- Add any necessary CSS files here -->
@endpush

@section('dashboardcontent')
<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Services</h6>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col"></th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Price</th>
                                <th scope="col">Timming</th>
                                <th scope="col" class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                              @foreach($services as $service)
                            <tr>
                                <th scope="row" class="align-content-center">{{ $loop->iteration }}</th>
                                <td class="align-content-center"></td>
                                <td class="align-content-center">{{ $service->name }}</td>
                                <td class="align-content-center">{{ $service->description }}</td>
                                <td class="align-content-center">{{ $service->price }}</td>
                                <td class="align-content-center">{{ $service->duration }}</td>
                                <td class="text-center align-content-center">
               

    <a href="" class="btn btn-info btn-sm">View</a>
                                   <a href="{{ route('edit.service', $service->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('delete.service', $service->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Table End -->
@endsection

@push('scripts')
<!-- Add any necessary JS files here -->
@endpush
