@extends('backend.layouts.app')

@section('title', content: 'Orders')

@push('styles')
@endpush

@section('dashboardcontent')
    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Appointments</h6>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Stylist</th>
                                    <th scope="col">Servcie</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Status</th>
                                    {{-- <th scope="col" class="text-center">Actions</th> --}}
                                </tr>
                            </thead>
                            <tbody>
  @foreach ($Appointments as $apt)
                                <tr>
                                  
                                        <th>{{ $apt->id }}</th>

                                        <td>{{ $Customer[0]->firstname }}</td>
                                        <td>{{ $apt->firstname }}{{ $apt->lastname }}</td>
                                        <td>{{ $apt->name }}</td>
                                        <td>{{ $apt->date }}</td>
                                        <td>{{ $apt->time }}</td>
                                        <td>
                                            <form action="/appointmentstatus" method="POST">
                                                @csrf
                                                <input type="text" value="{{ $Customer[0]->appointment_id }}" hidden
                                                    name="app_id">
                                                <select name="status" onchange="this.form.submit()">
                                                    <option value="pending" <?php if ($apt->apt_status == 'pending') {
                                                        echo 'selected';
                                                    } ?>>Pending</option>
                                                    <option value="booked" <?php if ($apt->apt_status == 'booked') {
                                                        echo 'selected';
                                                    } ?>>Booked</option>
                                                    <option value="completed" <?php if ($apt->apt_status == 'completed') {
                                                        echo 'selected';
                                                    } ?>>Completed</option>
                                                    <option value="canceled" <?php if ($apt->apt_status == 'canceled') {
                                                        echo 'selected';
                                                    } ?>>Canceled</option>
                                                </select>
                                            </form>
                                        </td>
                                        {{-- <td class="text-center">
                                            <a href="" class="btn btn-info btn-sm">View</a>
                                            <a href="" class="btn btn-warning btn-sm">Edit</a>
                                            <form action="" method="POST" class="d-inline">
                                                @csrf

                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td> --}}
                                 

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
@endpush
