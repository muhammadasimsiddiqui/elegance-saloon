@extends('backend.layouts.app')

@section('title', 'Edit Service')

@section('dashboardcontent')
    <div class="container-fluid pt-4 px-4">
        <form action="{{ route('services.update', $service->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')  <!-- This ensures we are updating the existing record -->
            <div class="row g-4">
                <div class="col-12">
                    <div class="bg-secondary rounded h-100 p-4">
                        <h6 class="mb-4">Edit Service</h6>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" placeholder="Name" id="name"
                                           name="name" value="{{ old('name', $service->name) }}" required>
                                    <label for="name">Name</label>
                                </div>
                            </div>

                            <div class="col-sm-12 col-xl-6">
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" placeholder="Price" id="price"
                                           name="price" value="{{ old('price', $service->price) }}" required>
                                    <label for="price">Price</label>
                                </div>
                            </div>

                            <div class="col-sm-12 col-xl-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="time" name="time"
                                           value="{{ old('time', $service->duration) }}"
                                           placeholder="Enter working time (e.g., 30min, 1hr)"
                                           pattern="^([1-9][0-9]*\s?(min|hr|hours))$" required>
                                    <label for="time">Timing</label>
                                    <small class="form-text text-muted">Format: "30min", "1hr", "2 hours", etc.</small>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" placeholder="Description" id="description"
                                              name="desc" style="height: 150px;" required>{{ old('desc', $service->description) }}</textarea>
                                    <label for="description">Description</label>
                                </div>
                            </div>

                            <div class="col-sm-12 col-xl-4">
                                <!-- Profile Image -->
                                <div class="text-start mb-3">
                                    <label for="serviceImg" class="form-label">Update Service Image</label>
                                    <input class="form-control form-control-sm bg-dark" id="serviceImg" type="file"
                                           name="serviceImg" accept="image/png, image/jpeg, image/gif">
                                    @if ($service->image_urls)
                                        <img src="{{ asset($service->image_urls) }}" alt="Service Image"
                                             class="mt-2" style="width: 100px; height: auto;">
                                    @endif
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
<!-- Add any necessary JS files here -->
@endpush
