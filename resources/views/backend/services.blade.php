@extends('backend.layouts.app')

@section('title', 'Services')

@push('styles')
<style>
    .description-column {
    max-width: 200px;  /* Default width */
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

@media (max-width: 768px) {
    .description-column {
        max-width: 150px;  /* Smaller width for mobile screens */
    }
}

</style>
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
                                <td class="align-content-center  description-column">{{ $service->description }}</td>
                                <td class="align-content-center">{{ $service->price }}</td>
                                <td class="align-content-center">{{ $service->duration }}</td>
                                <td class="text-center align-content-center">
               

<a href="{{ route('services.showServices', ['id' => $service->id]) }}" class="btn btn-info btn-sm">View</a>
                                   <a href="{{ route('services.edit', $service->id) }}" class="btn btn-warning btn-sm">Edit</a>
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

<!-- Add Services Section Start -->
    <div class="container-fluid pt-4 px-4">
        <form action="{{ route('services.store') }}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Add New Services</h6>

                    <div class="row">
                       

                        <div class="col-md-12">
                              <div class="row">
                        
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" placeholder="Name" id="name"
                                    name="name" required>
                                <label for="name">Name</label>
                            </div>
                        </div>
                       
                        <div class="col-sm-12 col-xl-6">
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" placeholder="price" id="price"
                                    name="price" required>
                                <label for="price">Price</label>
                            </div>
                        </div>
                       
                        <div class="col-sm-12 col-xl-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="time" 
            name="time" 
            placeholder="Enter working time (e.g., 30min, 1hr)" 
            pattern="^([1-9][0-9]*\s?(min|hr|hours))$" 
            required>
                                <label for="time">Timing</label>
                                  <small class="form-text text-muted">
            Format: "30min", "1hr", "2 hours", etc.
        </small>
                            </div>
                        </div>
                       
                        <div class="col-12">

                            <div class="form-floating mb-3">
                               <textarea class="form-control" placeholder="Description" id="description" name="desc" style="height: 150px;" required></textarea><label for="description" >Description</label>
                            </div>
                        </div>
                         <div class="col-sm-12 col-xl-4">
                            <!-- Profile Image -->
                            <div class="text-start mb-3">
                                <label for="serviceImg" class="form-label">Add Service Image</label>
                                <input class="form-control form-control-sm bg-dark" id="serviceImg" type="file" name="serviceImg" accept="image/png, image/jpg, image/jpeg, image/gif" required >
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
    <!-- Add Services Section End -->
@endsection

@push('scripts')
<!-- Add any necessary JS files here -->
@endpush
